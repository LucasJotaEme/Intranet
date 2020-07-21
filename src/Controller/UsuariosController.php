<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Sistema;
use App\Entity\Novedad;
use App\Entity\User;
use App\Form\SistemaType;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\UserBusqueda;
use App\Form\BusquedaUserType;

class UsuariosController extends AbstractController
{
    /**
     * @Route("/superadmin/usuarios", name="usuarios")
     */
    public function usuarios(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        $form = $this->createForm(BusquedaUserType::class,new UserBusqueda());
        $form->handleRequest($request);
        $busqueda=$form->getData();


        $usuarios= $em->getRepository(User::class)->findAll();
        
        if ($form->isSubmitted()){
            return $this->render('usuarios/usuarios.html.twig', [
            'usuarios' => $this->buscarUsuarios($busqueda),'formulario' => $form->createView()
        ]);
        }
        else{
            return $this->render('usuarios/usuarios.html.twig', [
                'usuarios' => $usuarios,'formulario' => $form->createView()
            ]);
        }
    }

    /**
     * @Route("/superadmin/convertingAdmin/{id}", name="cambioAdmin")
     */
    public function cambioAdmin(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();

        $usuario= $em->getRepository(User::class)->find($id);

        $usuario->setRoles("{'ROLE_ADMIN'}");
            
        $em->persist($usuario);
        return $this->render('usuarios/usuarios.html.twig', [
            'usuarios' => $usuarios,'formulario' => $form->createView()
        ]);
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
