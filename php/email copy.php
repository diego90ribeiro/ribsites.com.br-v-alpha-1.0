<?php
//Variáveis
$email = $_POST['newsletter'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

//enviar
   
  // emails para quem será enviado o formulário
  $emailenviar = "ribesites@hotmail.com.br";
  $destino = $emailenviar;
  $assunto = "Newsletter - Ribsites";
 
  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: $nome <$email>';
  //$headers .= "Bcc: $EmailPadrao\r\n";
   
  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  echo " E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "Erro.";
  }
?>