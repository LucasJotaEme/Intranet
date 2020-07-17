<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Sistema;
use App\Entity\Novedad;
use App\Entity\User;
use App\Form\SistemaType;
use Symfony\Component\HttpFoundation\Request;

class UsuariosController extends AbstractController
{
    /**
     * @Route("/superadmin/usuarios", name="usuarios")
     */
    public function usuarios()
    {
        $em = $this->getDoctrine()->getManager();
        
        
        $usuarios= $em->getRepository(User::class)->findAll();
        
        return $this->render('usuarios/usuarios.html.twig', [
            'usuarios' => $usuarios
        ]);
    }
}
