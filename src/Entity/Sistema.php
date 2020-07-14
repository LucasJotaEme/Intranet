<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SistemaRepository")
 */
class Sistema
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $logo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descripcion;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User", inversedBy="sistemas")
     */
    private $usuarios;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $palabra1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $palabra2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $palabra3;

    public function __construct()
    {
        $this->usuarios = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(?string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }
    
    function getDescripcion() {
        return $this->descripcion;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    
    /**
     * @return Collection|User[]
     */
    public function getUsuarios(): Collection
    {
        return $this->usuarios;
    }

    public function addUsuario(User $usuario): self
    {
        if (!$this->usuarios->contains($usuario)) {
            $this->usuarios[] = $usuario;
        }

        return $this;
    }

    public function removeUsuario(User $usuario): self
    {
        if ($this->usuarios->contains($usuario)) {
            $this->usuarios->removeElement($usuario);
        }

        return $this;
    }

    public function getPalabra1(): ?string
    {
        return $this->palabra1;
    }

    public function setPalabra1(?string $palabra1): self
    {
        $this->palabra1 = $palabra1;

        return $this;
    }

    public function getPalabra2(): ?string
    {
        return $this->palabra2;
    }

    public function setPalabra2(?string $palabra2): self
    {
        $this->palabra2 = $palabra2;

        return $this;
    }

    public function getPalabra3(): ?string
    {
        return $this->palabra3;
    }

    public function setPalabra3(?string $palabra3): self
    {
        $this->palabra3 = $palabra3;

        return $this;
    }
}
