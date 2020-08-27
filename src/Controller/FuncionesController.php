<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Novedad;
use App\Entity\Sistema;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use App\encriptado;

class FuncionesController extends AbstractController
{
    /**
     * @Route("/novedad/{fecha}/{numero}/{titulo}/{email}", name="crearNovedad")
     */
    public function crearNovedad($fecha,$numero,$titulo,$email)
    {
        $url="";
        $manager = $this->getDoctrine()->getManager();

        //$user= $manager->getRepository(User::class)->findBy();

        $sistemas= $manager->getRepository(Sistema::class)->findBy(
            ['nombre' => 'Cambiar']
        );
        
        $manag = $this->getDoctrine()->getManager();
        $novedad = new Novedad();
        $fechaDateTime = \DateTime::createFromFormat('d-m-Y H:i:s', $fecha); 
        $novedad->setFecha($fechaDateTime);
        $novedad->setNumeroDocumento($numero);
        $novedad->setTitulo($titulo);
        
        $manag->persist($novedad);
        $manag->flush();
        
        //Para direccionar de nuevo a documentos.
        foreach($sistemas as $sistema){
            $url = $sistema->getUrl();
            $url .= "/" . $email;
        
        }
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
