<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $estado;
    
    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $ultimoAcceso;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Sistema", mappedBy="usuarios")
     */
    private $sistemas;

    public function __construct()
    {
        $this->sistemas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
    function getEstado() {
        return $this->estado;
    }

    function getUltimoAcceso() {
        return $this->ultimoAcceso;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setUltimoAcceso($ultimoAcceso) {
        $this->ultimoAcceso = $ultimoAcceso;
    }

        
    

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword()
    {
        // not needed for apps that do not check user passwords
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed for apps that do not check user passwords
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    /**
     * @return Collection|Sistema[]
     */
    public function getSistemas(): Collection
    {
        return $this->sistemas;
    }

    public function addSistema(Sistema $sistema): self
    {
        if (!$this->sistemas->contains($sistema)) {
            $this->sistemas[] = $sistema;
            $sistema->addUsuario($this);
        }

        return $this;
    }

    public function removeSistema(Sistema $sistema): self
    {
        if ($this->sistemas->contains($sistema)) {
            $this->sistemas->removeElement($sistema);
            $sistema->removeUsuario($this);
        }

        return $this;
    }
}
