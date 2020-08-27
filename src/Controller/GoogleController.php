<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Routing\Annotation\Route;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use App\encriptado;

class GoogleController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function login()
    {
        return $this->render('google/login.html.twig');
    }
    
    /**
     * @Route("/login/{emailEncriptado}", name="app_login")
     */
    public function loginApp($emailEncriptado)
    {
        $encriptado = new encriptado();
        $em = $this->getDoctrine()->getManager();
        $users = null;

        $email = $encriptado->desencriptar($emailEncriptado);
        $users= $em->getRepository(User::class)->findBy(['email'=>$email]);

        foreach ($users as  $user){
            $token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
            $this->get('security.token_storage')->setToken($token);
            $this->get('session')->set('_security_main', serialize($token));
        }
        
        
        return $this->redirectToRoute('sistemas');
    }
    
    /**
     * Link to this controller to start the "connect" process
     *
     * @Route("/connect/google", name="connect_google")
     * @param ClientRegistry $clientRegistry
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function connectAction(ClientRegistry $clientRegistry)
    {
        return $clientRegistry
            ->getClient('google')
            ->redirect();
    }

    /**
     * Facebook redirects to back here afterwards
     *
     * @Route("/connect/google/check", name="connect_google_check")
     * @param Request $request
     * @return JsonResponse|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function connectCheckAction(Request $request)
    {
        
        if (!$this->getUser()) {
            return new JsonResponse(array('status' => false, 'message' => "User not found!"));
        } else {
	    $this->crearLog($this->getUser());
            return $this->redirectToRoute('sistemas');
        }

    }
    
    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    private function crearLog($usuario){

        //Se crea nombre del log, y la dirección.
        $fp = fopen("uploads/logs/".$this->getFechActualString()."-iduser=".$usuario->getId(), "x+");
        $texto="";
        //Comienza el log

        $texto.="------------------".$this->getFechActualString()."------------------\n";
        $texto.="Usuario: ".$usuario->getEmail()."\n";
        $texto.="Ip del usuario: ".$_SERVER['REMOTE_ADDR']."\n";
        
        $texto.="Hora actual: ".$this->getFechActualString()."\n";
        
        //Finaliza el log
        $texto.="--------------------FIN--------------------";


        if ($fp != 0){
            fwrite($fp, $texto);
        }

        fclose($fp);
    }

    public function getFechActualString(){
        $fechaActual=  new \DateTime();
        
        $fecha = $fechaActual->format('Y-m-d-H-i-s');
        return $fecha;
    }
}
