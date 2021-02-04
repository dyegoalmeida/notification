<?php

/** Padrão correto */
require __DIR__.'/lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email;
$novoEmail->sendMail("Assunto de Teste",
                     "<p>Esse é um email de <b>teste</b>!</p>",
                     "dyego@cmhfarmaceutica.com.br",
                     "Dyego CMH",
                     "dyegocm@gmail.com",
                     "Dyego Gmail");

var_dump($novoEmail);                     
?>