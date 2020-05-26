<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Sistema;
use App\Entity\User;
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
        $usuario = $this->getUser();
        
        $sistemas= $em->getRepository(Sistema::class)->findAll();
        
        //Se obtiene los sistemas del usuario, y se lo pasa al .twig.
        return $this->render('sistema/acceso.html.twig', [
            'sistemas' => $sistemas, 'tamanio' => count($sistemas), 'sistemasUsuario' => $usuario->getSistemas()
        ]);
    }
    
    /**
     * @Route("/admin/nuevoSistema", name="nuevoSistema")
     */
    public function nuevoSistema(Request $request)
    {
        $sistema = new Sistema();
        $sistema->setLogo("iconoUnraf.png");
        $formulario = $this->createForm(SistemaType::class,$sistema);
        $formulario->handleRequest($request);
        
        if ($formulario->isSubmitted() && $formulario->isValid()) {
            
            $entityManager = $this->getDoctrine()->getManager();
            $sistema = $formulario->getData();
            
            if ($sistema->getLogo()!=null){
                $imagen = $formulario->get('logo')->getData();
            
                $extensionArchivo=$imagen->guessExtension();
                $nombreArchivo= time().".".$extensionArchivo;
                $imagen->move("uploads",$nombreArchivo);
                $sistema->setLogo($nombreArchivo);
            }else{
                $sistema->setLogo("iconoUnraf.png");
            }
            
            $entityManager->persist($sistema);
            $entityManager->flush();

            
            $this->addFlash('correcto', 'Se creó el sistema correctamente!');
            
            return $this->redirectToRoute('sistemas');
        }
        
        return $this->render('sistema/nuevoSistema.html.twig', [
            'formulario' => $formulario->createView(),'imagen' => $sistema->getLogo()
        ]);
    }
    
    /**
     * @Route("/admin/modificarSistema/{id}/", name="modificarSistema")
     */
    public function modificarSistema(Request $request,$id)
    {
        $manager = $this->getDoctrine()->getManager();
        
        
        $sistema = $manager->getRepository(Sistema::class)->find($id); 
        $urlLogo = $sistema->getLogo();
        
        $form = $this->createForm(SistemaType::class,$sistema);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() &&  $form->isValid()){
            $sistema = $form->getData();
            
            if ($sistema->getLogo()!=null){
                $imagen = $form->get('logo')->getData();
                $extensionArchivo=$imagen->guessExtension();
                $nombreArchivo= time().".".$extensionArchivo;
                $imagen->move("uploads",$nombreArchivo);   
                $sistema->setLogo($nombreArchivo);
            }else{
                $sistema->setLogo($urlLogo);
            }
            
            $manager->flush();
            
            return $this->sistemas();
        }
        else{
            return $this->render('sistema/modificarSistema.html.twig', [
            'formulario' => $form->createView(),'imagen' => $sistema->getLogo()
        ]);
        }
    }
    
    /**
     * @Route("/admin/eliminarSistema/{id}/", name="eliminarSistema")
     */
    public function quitarCompra(Request $request,$id){
        $em = $this->getDoctrine()->getManager();
        $sistema= $em->getRepository(Sistema::class)->find($id);
        $em->remove($sistema);
        $em->flush();
        return $this->sistemas();
    }
    
    /**
     * @Route("/admin/permisos/", name="permisos")
     */
    public function permisos(Request $request){
        $em = $this->getDoctrine()->getManager();
        $sistemas= $em->getRepository(Sistema::class)->findAll();
        $usuarios= $em->getRepository(User::class)->findAll();
        
        return $this->render('sistema/permisos.html.twig', [
            'sistemas' => $sistemas, 'usuarios' => $usuarios
        ]);
    }
    
    /**
     * @Route("/admin/permisos/agregar/{idSistema}/{idUsuario}", name="agregarPermiso")
     */
    public function agregarPermiso(Request $request,$idSistema,$idUsuario){
        $usuario=new User();
        $sistema=new Sistema();
        $em = $this->getDoctrine()->getManager();
        
        $sistema= $em->getRepository(Sistema::class)->find($idSistema);
        $usuario= $em->getRepository(User::class)->find($idUsuario);
        $sistema->addUsuario($usuario);
        
        $em->flush();
        
        return $this->permisos($request);
    }
    
    /**
     * @Route("/admin/permisos/quitar/{idSistema}/{idUsuario}", name="quitarPermiso")
     */
    public function quitarPermiso(Request $request,$idSistema,$idUsuario){
        
        $em = $this->getDoctrine()->getManager();
        
        $sistema= $em->getRepository(Sistema::class)->find($idSistema);
        $usuario= $em->getRepository(User::class)->find($idUsuario);
        $sistema->removeUsuario($usuario);
        
        $em->flush();
        
        return $this->permisos($request);
    }
    
    /**
     * @Route("/user/direccionamiento/{id}", name="direccionamiento")
     */
    public function direccionamiento(Request $request,$id){
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $sistema= $em->getRepository(Sistema::class)->find($id);
        
        $url = $sistema->getUrl();
        $rol="";
        if (count($user->getRoles())==2){
            $rol="ROLE_ADMIN";
        }else{
            $rol="ROLE_USER";
        }
        $url .= "/" . $user->getEmail() . "/" . $rol . "/" . $user->getEstado(); 
        
        return $this->redirect($url);
    }
    
    
}
