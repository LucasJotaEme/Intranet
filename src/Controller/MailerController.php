<?php
// src/Controller/MailerController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class MailerController extends AbstractController
{
    /**
     * @Route("/user/email/{motivo}/{mensaje}")
     */
    public function sendEmail(MailerInterface $mailer,$motivo,$mensaje)
    {
        $email = (new Email())
            ->from('lucasmaldonado100@gmail.com')
            ->to('lucas.maldonado@unraf.edu.ar')
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject($motivo)
            ->text($mensaje);
	    //->html('<h3 style="color:blue;">Soporte intranet</h3><p>Hola</p>');

        $mailer->send($email);
	return $this->redirectToRoute('sistemas');
        // ...
    }
}