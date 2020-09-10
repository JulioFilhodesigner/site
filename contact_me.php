<?php
// check if fields passed are empty
if(empty($_POST['fname'])                  ||
   empty($_POST['email'])                               ||
   empty($_POST['message'])        ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
        echo "No arguments Provided!";
        return false;
   }
        
$name = $_POST['fname'];
$email_address = $_POST['email'];
$message = $_POST['message'];
        
// create email body and send it        
$to = 'nicksonwebdeveloper@gmail.com'; // put your email
$email_subject = "
Formulário de contato enviado por:  $name";
$email_body = " Você recebeu uma nova mensagem. \n\n".
 " Aqui estão os detalhes:\n \nName: $name \n ".
 "Email: $email_address\n Message \n $message";
$headers = "From: $email_address\n";
$headers .= "Reply-To: $email_address";        
mail($to,$email_subject,$email_body,$headers);
return true;                        
?>