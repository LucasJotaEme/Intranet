<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Sistema;
use App\Entity\Novedad;
use App\Entity\User;
use App\Form\SistemaType;

class PermisosController extends AbstractController
{
     
    /**
     * @Route("/superadmin/permisos/{id}", name="verPermisos")
     */
    public function permisos(Request $request,$id){
        $em = $this->getDoctrine()->getManager();
        $sistema= $em->getRepository(Sistema::class)->find($id);
        $usuarios= $em->getRepository(User::class)->findAll();
        
        return $this->render('permisos/permisos.html.twig', [
            'sistema' => $sistema, 'usuarios' => $usuarios
        ]);
    }
    
    /**
     * @Route("/superadmin/permisos/agregar/{idSistema}/{idUsuario}", name="agregarPermiso")
     */
    public function agregarPermiso(Request $request,$idSistema,$idUsuario){
        $usuario=new User();
        $sistema=new Sistema();
        $em = $this->getDoctrine()->getManager();
        
        $sistema= $em->getRepository(Sistema::class)->find($idSistema);
        $usuario= $em->getRepository(User::class)->find($idUsuario);
        $sistema->addUsuario($usuario);
        
        $em->flush();
        
        return $this->redirectToRoute('verPermisos');
    }
    
    /**
     * @Route("/superadmin/permisos/quitar/{idSistema}/{idUsuario}", name="quitarPermiso")
     */
    public function quitarPermiso(Request $request,$idSistema,$idUsuario){
        
        $em = $this->getDoctrine()->getManager();
        
        $sistema= $em->getRepository(Sistema::class)->find($idSistema);
        $usuario= $em->getRepository(User::class)->find($idUsuario);
        $sistema->removeUsuario($usuario);
        
        $em->flush();
        
        return $this->redirectToRoute('verPermisos');
    }
}
