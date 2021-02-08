<?php

/** Padrão correto */
require __DIR__.'/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email(2, "mail.host.com", "your@email.com", "your-pass", "smtp secure (tls / ssl)", "port (587)",
    "from@email.com", "From name");
$novoEmail->sendMail("SUbject", "Content", "reply@email.com", "Replay Name", "address@email.com", "Address Name");

var_dump($novoEmail);                     
?>
