<?php

//https://github.com/PHPMailer/PHPMailer

require_once("vendor/autoload.php");

/**
 * 
 * composer update  
 * 
 * 
 * 
 * configuracoes SMTP: é a porta por onde esse email vai sair e o endereco de ip do servidor do email 
 * 
 * é diferente  servidor web (apache, ...) de servidor de email (software especifico para usar as portas para enviar
 *  e receber email, por isso precisa ter um servidor de email instalado como o extand (microsoft) e outros. pode contratar
 * um terceiro. basta pega o endereco de ip, a port, user, password e colocar no codigo )
 * 
 * 
 * ARQUIVO contents.html>>>
 *  pode pedir para o design fazer do email que quer enviar 
 *  se for colocar img é importante que elas estejam hospedadas no mesmo servidor, 
 */


//Create a new PHPMailer instance
$mail = new PHPMailer();

//Tell PHPMailer to use SMTP
$mail->isSMTP();  //metodo que prepara o phpmailer para enviar o email

//Enable SMTP debugging
//SMTP::DEBUG_OFF = off (for production use)  0  em producao
//SMTP::DEBUG_CLIENT = client messages           1 em teste
//SMTP::DEBUG_SERVER = client and server messages  2 em desenvolvimento
$mail->SMTPDebug = 2; 

//Set the hostname of the mail server  
$mail->Host = 'smtp.gmail.com';   
//Use `$mail->Host = gethostbyname('smtp.gmail.com');`
//if your network does not support SMTP over IPv6,
//though this may cause issues with TLS

//Set the SMTP port number:
// - 465 for SMTP with implicit TLS, a.k.a. RFC8314 SMTPS or
// - 587 for SMTP+STARTTLS
$mail->Port = 587;

//Set the encryption mechanism to use:
// - SMTPS (implicit TLS on port 465) or
// - STARTTLS (explicit TLS on port 587)
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//AUTENTICACAO DO SERVIDOR
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'cursophp7hcode@gmail.com';

//Password to use for SMTP authentication
$mail->Password = '<?senha?>';

//Set who the message is to be sent from
//Note that with gmail you can only use your account address (same as `Username`)
//or predefined aliases that you have configured within your account.
//Do not use user-submitted addresses in here
$mail->setFrom('josuecarlosos2@gmail.com', 'TESTANDO 123');

//Set an alternative reply-to address
//This is a good place to put user-submitted addresses
//$mail->addReplyTo('replyto@example.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress('josuecarlosos2@gmail.com', 'kkkkkkkkkkkkkkkkkkkk Hcode');
$mail->addAddress('fjuliano546@gmail.com', 'kkkkkkkkkkkkkkkkkkkk TESTANDO 123');

//Set the subject line
$mail->Subject = 'Testando a classe PHPMailer com Gmail';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //AQUI COLOCAMOS O ARQUIVO HTML

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}

?>