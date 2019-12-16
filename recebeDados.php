<?php
//Recebe o email.
$email  = $_POST['email'];


if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

//Aqui vai conectar com o Banco de dados





  echo json_encode('<script>
Command: toastr["success"]("Você recebera novidades em breve...", "Enviado!")

toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-right",
  "preventDuplicates": true,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}</script>
');
} else {
  echo json_encode('
  <script>
   Command: toastr["error"]("Digite um email válido!", "Atenção!")
  
  toastr.options = {
    "closeButton": false,
    "debug": true,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }
              
  </script>
  
  ');
}
?>