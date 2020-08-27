<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\NovedadIntranet;
use App\Form\NovedadType;
use Symfony\Component\HttpFoundation\Request;

class NovedadesController extends AbstractController
{
    /**
     * @Route("/admin/nuevaNovedad", name="nuevaNovedad")
     */
    public function nuevaNovedad(Request $request)
    {
        $novedad = new NovedadIntranet();
        $novedad->setFechaPublicacion($this->getFechActual());
        $novedad->setFechaCaducidad($this->getFechActual());
        $formulario = $this->createForm(NovedadType::class,$novedad);
        $formulario->handleRequest($request);

        if ($formulario->isSubmitted() && $this->validacionNovedad($novedad) ) {
            
            $entityManager = $this->getDoctrine()->getManager();
            $novedad = $formulario->getData();
            
            $entityManager->persist($novedad);
            $entityManager->flush();

            
            $this->addFlash('correcto', 'Se creó una nueva novedad!');
            
            return $this->redirectToRoute('sistemas');
        }
        
        return $this->render('novedades/nuevaNovedad.html.twig', [
            'formulario' => $formulario->createView()
        ]);
    }

    /**
     * @Route("/admin/modificarNovedad/{id}", name="modificarNovedad")
     */
    public function modificarNovedad(Request $request,$id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $novedad = $entityManager->getRepository(NovedadIntranet::class)->find($id); 

        $formulario = $this->createForm(NovedadType::class,$novedad);
        $formulario->handleRequest($request);

        if ($formulario->isSubmitted() && $this->validacionNovedad($novedad) ) {
            
            $novedad = $formulario->getData();
            
            $entityManager->flush();

            
            $this->addFlash('correcto', 'Se modificó la novedad!');
            
            return $this->redirectToRoute('sistemas');
        }
        
        return $this->render('novedades/nuevaNovedad.html.twig', [
            'formulario' => $formulario->createView()
        ]);
    }

    public function validacionNovedad($novedad){
        $fechaActual= $this->getFechActualString();
        
        if ($novedad->getFechaPublicacion() < $fechaActual) {
            $this->addFlash('error', 'Fecha de publicación no válida.');
            return false;
        }else if ($novedad->getFechaCaducidad() < $fechaActual){
            $this->addFlash('error', 'Fecha de caducidad no válida.');
            return false;
        }else if ($novedad->getFechaPublicacion() > $novedad->getFechaCaducidad()){
            $this->addFlash('error', 'Fecha de caducidad es menor a fecha de publicación.');
            return false;
        }else{
            return true;
        }
    }

    public function getFechActual(){
        $fechaActual=  new \DateTime();
                
        return $fechaActual;
    }

    public function getFechActualString(){
        $fechaActual=  new \DateTime();
        $fecha = $fechaActual->format('Y-m-d');
        return $fecha;
    }
}
