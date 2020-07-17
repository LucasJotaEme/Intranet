<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Sistema;
use App\Entity\UserBusqueda;
use App\Form\BusquedaUserType;
use App\Entity\User;
use App\Form\SistemaType;

class PermisosController extends AbstractController
{
     
    /**
     * @Route("/superadmin/permisos/{id}", name="verPermisos")
     */
    public function permisos(Request $request,$id){
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(BusquedaUserType::class,new UserBusqueda());
        $form->handleRequest($request);
        $busqueda=$form->getData();

        $sistema= $em->getRepository(Sistema::class)->find($id);
        $usuarios= $em->getRepository(User::class)->findAll();

        if ($form->isSubmitted()){
            return $this->render('permisos/permisos.html.twig', [
            'sistema' => $sistema, 'usuarios' => $this->buscarUsuarios($busqueda),'formulario' => $form->createView()
        ]);
        }
        else{
            return $this->render('permisos/permisos.html.twig', [
            'sistema' => $sistema, 'usuarios' => $usuarios,'formulario' => $form->createView()
        ]);
        }
        
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
        
        return $this->permisos($request,$idSistema);
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
        
        return $this->permisos($request, $idSistema);
    }

    //------------------ BUSQUEDAS A LA BD A PATA --------------------------

    public function buscarUsuarios(UserBusqueda $busqueda){
        
        $manager=$this->getDoctrine()->getManager();
        
        $query = $manager->createQuery(
        "SELECT u
        FROM App\Entity\User u
        WHERE u.email LIKE :email
        ORDER BY u.id DESC
        "
        )->setParameter('email',$busqueda->getBuscar().'%');
        
        //Límite de resultados..
        $query->setMaxResults(100);
        
        //Retorna busqueda de la compra..
        return $query->getResult();
    }
}
