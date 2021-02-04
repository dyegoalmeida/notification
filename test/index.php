<?php

/** Padrão correto */
require __DIR__.'/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email(2,'smtp-web.kinghost.net','dyego@cmhfarmaceutica.com.br','sucesso*0800','tls','587','dyego@cmhfarmaceutica.com.br','Dyego CMH');
$novoEmail->sendMail("Assunto de Teste",
                     "<p>Esse é um email de <b>teste</b>!</p>",
                     "dyego@cmhfarmaceutica.com.br",
                     "Dyego CMH",
                     "dyegocm@gmail.com",
                     "Dyego Gmail");

var_dump($novoEmail);                     
?>