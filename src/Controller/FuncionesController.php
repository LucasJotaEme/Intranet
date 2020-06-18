<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Novedad;

class FuncionesController extends AbstractController
{
    /**
     * @Route("/novedad/{fecha}/{numero}/{titulo}/{link}", name="crearNovedad")
     */
    public function crearNovedad($fecha,$numero,$titulo,$link)
    {
        $manager = $this->getDoctrine()->getManager();
        
        $novedad = new Novedad();
        $novedad->setFecha($fecha);
        $novedad->setNumeroDocumento($numero);
        $novedad->setTitulo($titulo);
        $novedad->setLink($link);
        
        $manager->persist($novedad);
        $manager->flush();
        
        
        return $this->redirectToRoute("");
    }
}
