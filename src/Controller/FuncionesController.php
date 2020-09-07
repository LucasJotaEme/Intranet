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
     * @Route("/novedad/{fecha}/{numero}/{titulo}/{email}/{version}/{id}", name="crearNovedad")
     */
    public function crearNovedad($fecha,$numero,$titulo,$email,$version,$id)
    {
        $url="";
        $manager = $this->getDoctrine()->getManager();

        //$user= $manager->getRepository(User::class)->findBy();

        $sistemas= $manager->getRepository(Sistema::class)->findBy(
            ['nombre' => 'Documentos']
        );
        
        $manag = $this->getDoctrine()->getManager();
        $novedad = new Novedad();
        $fechaDateTime = \DateTime::createFromFormat('d-m-Y H:i:s', $fecha); 

        //Para ver si ya existe una novedad
        $novedades= $manager->getRepository(Sistema::class)->findBy(
            ['idParametro' => $id]
        );

        if ($novedades!=null){
            $novedad->setFecha($fechaDateTime);
            $novedad->setNumeroDocumento($numero);
            $novedad->setTitulo($titulo);
            $novedad->setVersion($version);
            $novedad->setIdParametro($id);
            $novedad->setEstado("Nuevo");
            
            $manag->persist($novedad);
            $manag->flush();
        }else{
            foreach($novedades as $editarNovedad){
                $editarNovedad->setFecha($fechaDateTime);
                $editarNovedad->setTitulo($titulo);
                $editarNovedad->setNumeroDocumento($numero);
                $editarNovedad->setVersion($version);
                $editarNovedad->setEstado("Editado");
                $manag->flush();
            }
        }
        
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
