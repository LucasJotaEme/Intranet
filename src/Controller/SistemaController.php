<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Sistema;
use App\Form\SistemaType;
use Symfony\Component\HttpFoundation\Request;

class SistemaController extends AbstractController
{
    /**
     * @Route("/user/sistemas", name="sistemas")
     */
    public function sistemas()
    {
        $em = $this->getDoctrine()->getManager();
        $sistemas= $em->getRepository(Sistema::class)->findAll();
        
        //Se obtiene los sistemas del usuario, y se lo pasa al .twig.
        return $this->render('sistema/acceso.html.twig', [
            'sistemas' => $sistemas
        ]);
    }
    
    /**
     * @Route("/admin/nuevoSistema", name="nuevoSistema")
     */
    public function nuevoSistema(Request $request)
    {
        $sistema = new Sistema();
        $formulario = $this->createForm(SistemaType::class,$sistema);
        $formulario->handleRequest($request);
        
        if ($formulario->isSubmitted() && $formulario->isValid()) {
            
            $entityManager = $this->getDoctrine()->getManager();
            $sistema = $formulario->getData();
            
            $imagen = $formulario->get('logo')->getData();
            
            $extensionArchivo=$imagen->guessExtension();
            $nombreArchivo= time().".".$extensionArchivo;
            $imagen->move("uploads",$nombreArchivo);
            $sistema->setLogo($nombreArchivo);
            
            $entityManager->persist($sistema);
            $entityManager->flush();

            
            $this->addFlash('correcto', 'Se creó el sistema correctamente!');
            
            return $this->redirectToRoute('sistemas');
        }
        
        return $this->render('sistema/nuevoSistema.html.twig', [
            'formulario' => $formulario->createView()
        ]);
    }
}
