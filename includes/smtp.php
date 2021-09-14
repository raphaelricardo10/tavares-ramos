<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './includes/PHPMailer/src/Exception.php';
require './includes/PHPMailer/src/PHPMailer.php';
require './includes/PHPMailer/src/SMTP.php';

function get_include_contents($filename, $variablesToMakeLocal)
{
    extract($variablesToMakeLocal);
    if (is_file($filename)) {
        ob_start();
        include $filename;
        return ob_get_clean();
    }
    return false;
}


function startMail($debug = 0)
{
    include './includes/smtpCredentials.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';
    $mail->SMTPDebug = $debug;
    $mail->Host = $host;
    $mail->Port = $port;
    $mail->SMTPAuth = true;
    $mail->Username = $username;
    $mail->Password = $password;
    $mail->setFrom('contato@tavaresramos.com.br', 'Tavares Ramos');
    return $mail;
}

function sendMailToServer(array $postData, $mailSubject, String $fileHTML, int $debug = 0)
{
    $mail = startMail($debug);
    $mail->addReplyTo($postData['email'], sprintf('%s %s', $postData['name'], $postData['surname']));
    $mail->addAddress('contato@tavaresramos.com.br', 'Contato via Site');
    $mail->Subject = $mailSubject;
    $mail->Body = get_include_contents($fileHTML, $postData);
    $mail->IsHTML(true);
    if (!$mail->send()) {
        return false;
    } else {
        return true;
    }
}

function sendMailToClient(array $postData, String $fileHTML, int $debug = 0)
{
    $mail = startMail($debug);
    $mail->addReplyTo('contato@tavaresramos.com.br', 'Tavares Ramos');
    $mail->addAddress($postData['email'], sprintf('%s %s', $postData['name'], $postData['surname']));
    $mail->Subject = 'Tavares Ramos - Recebemos seu contato';
    $mail->Body = get_include_contents($fileHTML, $postData);
    $mail->IsHTML(true);
    $mail->send();
}
