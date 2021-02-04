<?php

namespace Notification;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email
{

    /**
     * Desde o PHP 5.5, a palavra-chave class também pode ser 
     * utilizada para resolução de nome de classes. Pode-se obter
     * uma string contendo o nome completo e qualificado da classe
     * ClassName utilizando ClassName::class. 
     * Isso é particularmente útil em classes com namespaces.
     */
    private $mail = \stdClass::class;
    
    public function __construct($smtpDebug, $host, $user, $pass, $smtSecure, $port, $setFromEmail, $setFromName)
    {
        $this->mail = new PHPMailer(true);

        //Server settings
        $this->mail->SMTPDebug  = $smtpDebug; //2                               // Enable verbose debug output
        $this->mail->isSMTP();                                     // Send using SMTP
        $this->mail->Host       = $host;//'smtp-web.kinghost.net';         // Set the SMTP server to send through
        $this->mail->SMTPAuth   = true;                            // Enable SMTP authentication
        $this->mail->Username   = $user;//'dyego@cmhfarmaceutica.com.br';  // SMTP username
        $this->mail->Password   = $pass;//'sucesso*0800';                  // SMTP password
        $this->mail->SMTPSecure = $smtSecure;//'tls';                           // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $this->mail->Port       = $port; //587; 
        $this->mail->CharSet    = 'utf-8';
        $this->mail->setLanguage('br');
        $this->mail->isHTML(true);
        $this->mail->setFrom($setFromEmail,$setFromName); //'dyego@cmhfarmaceutica.com.br', 'Dyego CMH');
    }

    public function sendMail($subject, $body, $replyEmail, $replyName, $addressEmail, $addressName)
    {
        $this->mail->Subject = (string) $subject;
        $this->mail->Body = $body;

        $this->mail->addReplyTo($replyEmail, $replyName);
        $this->mail->addAddress($addressEmail, $addressName);

        try {
            $this->mail->send();
        } catch(Exception $e){
            echo "Erro ao enviar o e-mail: {$this->mail->ErrorInfo} {$e->getMessage()}";
        }
    }

}

?>