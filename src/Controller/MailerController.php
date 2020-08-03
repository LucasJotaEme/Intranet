<?php
// src/Controller/MailerController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;


class MailerController extends AbstractController
{
    /**
     * @Route("/email")
     */
    public function sendEmail(MailerInterface $mailer)
    {
        $email = (new Email())
            ->from('lucasmaldonado100@gmail.com')
            ->to('lucasmaldonado100@gmail.com')
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Probando Mailer')
            ->text('A verrrrrrrrrrr');
	    //->html('<h3 style="color:blue;">Soporte intranet</h3><p>Hola</p>');

        $mailer->send($email);
	return $this->redirectToRoute('sistemas');
        // ...
    }
}