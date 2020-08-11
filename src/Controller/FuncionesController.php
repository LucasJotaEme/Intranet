<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Novedad;
use App\Entity\Sistema;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;

class FuncionesController extends AbstractController
{
    /**
     * @Route("/novedad/{fecha}/{numero}/{titulo}/{id}", name="crearNovedad")
     */
    public function crearNovedad($fecha,$numero,$titulo,$id)
    {
        $url="";
        $manager = $this->getDoctrine()->getManager();

        $user= $manager->getRepository(User::class)->find($id);

        $sistemas= $manager->getRepository(Sistema::class)->findBy(
            ['nombre' => 'Novedades']
        );
        
        
        $novedad = new Novedad();
        $fechaDateTime = \DateTime::createFromFormat('d-m-Y H:i:s', $fecha); 
        $novedad->setFecha($fechaDateTime);
        $novedad->setNumeroDocumento($numero);
        $novedad->setTitulo($titulo);
        
        $manager->persist($novedad);
        $manager->flush();
        
        //Para direccionar de nuevo a documentos.
        foreach($sistemas as $sistema){
            $url = $sistema->getUrl();
            $url .= "/" . $user->getEmail();
        
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
