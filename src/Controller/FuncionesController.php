<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Novedad;
use App\Entity\Sistema;
use App\Entity\User;

class FuncionesController extends AbstractController
{
    /**
     * @Route("/novedad/{fecha}/{numero}/{titulo}/", name="crearNovedad")
     */
    public function crearNovedad($fecha,$numero,$titulo)
    {
        
        $manager = $this->getDoctrine()->getManager();

        $user = $this->getUser();

        $sistema= $manager->getRepository(Sistema::class)->findBy(
            ['nombre' => 'Documentos']
        );
        
        
        $novedad = new Novedad();
        $fechaDateTime = \DateTime::createFromFormat('d-m-Y H:i:s', $fecha); 
        $novedad->setFecha($fechaDateTime);
        $novedad->setNumeroDocumento($numero);
        $novedad->setTitulo($titulo);
        
        $manager->persist($novedad);
        $manager->flush();
        
        //Para direccionar de nuevo a documentos.
        $url = end($sistema)->getUrl();
        $rol=json_encode($user->getRoles(),TRUE);
        $url .= "/" . $user->getEmail() . "/" . $rol . "/" . $user->getEstado(); 
        
        return $this->redirect($url);
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
