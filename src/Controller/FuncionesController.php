<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Novedad;
use App\Entity\Sistema;

class FuncionesController extends AbstractController
{
    /**
     * @Route("/novedad/{fecha}/{numero}/{titulo}/", name="crearNovedad")
     */
    public function crearNovedad($fecha,$numero,$titulo)
    {
        $manager = $this->getDoctrine()->getManager();
        
        $novedad = new Novedad();
        $fechaDateTime = \DateTime::createFromFormat('d-m-Y H:i:s', $fecha); 
        $novedad->setFecha($fechaDateTime);
        $novedad->setNumeroDocumento($numero);
        $novedad->setTitulo($titulo);
        
        $manager->persist($novedad);
        $manager->flush();
        
        
        return $this->redirectToRoute("direccionamientoDocs");
    }

    
    public function baseAction()
    {
        $em = $this->getDoctrine()->getManager();
        $sistemas= $em->getRepository(Sistema::class)->findAll();
        
        return $this->render('base.html.twig', [
            'sistemas' => $sistemas
        ]);
    }
}
