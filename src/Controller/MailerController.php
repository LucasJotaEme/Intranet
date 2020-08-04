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
            ->priority(Email::PRIORITY_HIGH)
            ->subject($motivo)
            ->text('')
	    ->html("
		<div>
			<div style='border:3 px solid #fc447c;width:500px; padding:15px;'>
		        	<h2 style='color:#0F9FA8;text-align:center;'>Mensaje desde Intranet</h2>
				<hr>
				<h4>". $this->getUser()->getEmail() ."</h4>
				<hr>
				<h4 style='color:#fc447c;'>Motivo de mensaje: ". $motivo ."</h4>
				<hr>
				<h4 style='color:#2B2B2B;'>Mensaje: ". $mensaje ."</h4>
				<hr>
			</div>
		</div>

	    ");

        $mailer->send($email);
	$this->addFlash('correcto', 'Se ha enviado el mail correctamente. Pronto tendrá su respuesta');
	return $this->redirectToRoute('sistemas');
        // ...
    }
}