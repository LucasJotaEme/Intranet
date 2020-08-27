<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Sistema;
use App\Entity\Novedad;
use App\Entity\User;
use App\Entity\NovedadIntranet;
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
        
        $usuario->setUltimoAcceso($this->getFechActual());
        //$this->crearLog($usuario);
        $em->flush($usuario);
        
        $sistemas= $em->getRepository(Sistema::class)->findAll();
        
        //Se obtiene los sistemas del usuario, y se lo pasa al .twig.
        return $this->render('sistema/acceso.html copy.twig', [
            'sistemas' => $sistemas, 'tamanio' => count($sistemas), 'sistemasUsuario' => $usuario->getSistemas(), 'novedades' => $this->buscarNovedades(),
            'novedadesUNRaf' =>$this->buscarNovedadesUNRaf()
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
                $imagen->move("./uploads",$nombreArchivo);
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
            $this->addFlash('correcto', 'Se modificó el sistema correctamente');
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
        $this->addFlash('correcto', 'Se eliminó el sistema '. $sistema->getNombre() );
        $em->remove($sistema);
        $em->flush();
        return $this->sistemas();
    }
    
    /**
     * @Route("/user/direccionamiento/{id}", name="direccionamiento")
     */
    public function direccionamiento(Request $request,$id){
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $sistema= $em->getRepository(Sistema::class)->find($id);
        
        $url = $sistema->getUrl();
        $rol=json_encode($user->getRoles(),TRUE);
        $url .= "/" . $user->getEmail() . "/" . $rol . "/" . $user->getEstado(); 
        
        return $this->redirect($url);
    }

    /**
     * @Route("/user/direccionamientoDocumentos", name="direccionamientoDocs")
     */
    public function direccionamientoDocumentos(Request $request){
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $sistema= $em->getRepository(Sistema::class)->findBy(
            ['nombre' => 'Documentos']
        );
        
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

    ############################# FUNCIONES ####################################

    public function getFechActual(){
        $fechaActual=  new \DateTime();
                
        return $fechaActual;
    }

    public function getFechActualString(){
        $fechaActual=  new \DateTime();
        $fecha = $fechaActual->format('Y-m-d');
        return $fecha;
    }

    ############################# BUSQUEDA BD A PATA ################################

    public function buscarNovedadesUNRaf(){
        
        $manager=$this->getDoctrine()->getManager();
        $fecha=$this->getFechActualString();
        
        $query = $manager->createQuery(
        "SELECT nu
        FROM App\Entity\NovedadIntranet nu
        WHERE '" .$fecha. "' >= nu.fechaPublicacion AND '" .$fecha. "'<= nu.fechaCaducidad
         ORDER BY nu.fechaPublicacion DESC"
        );
        
        //Límite de resultados..
        $query->setMaxResults(100);
        
        //Retorna busqueda de la compra..
        return $query->getResult();

    }

    public function buscarNovedades(){
        
        $manager=$this->getDoctrine()->getManager();
        $fecha=$this->getFechActualString();
        
        $query = $manager->createQuery(
        "SELECT nu
        FROM App\Entity\Novedad nu
        WHERE '" .$fecha. "' >= nu.fecha
        ORDER BY nu.fecha DESC"
        );
        
        //Límite de resultados..
        $query->setMaxResults(100);
        
        //Retorna busqueda de la compra..
        return $query->getResult();

    }
    
    
}
