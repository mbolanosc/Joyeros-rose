<?php
//variables
$username = $_POST['name'];
$useremail = $_POST['email'];
$useraddress = $_POST['address'];
$userphone = $_POST['phone'];
$userProducts = nl2br(implode(', ', $_POST['productosDeInteres']));

function validate($username, $useremail, $useraddress,$userphone){
  $return_array=array();
  $return_array['success'] = '1';
  //email
  if($useremail == ''){
    $return_array['success'] = '0';
    echo "Email requerido";
  }else{
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    if(!preg_match($email_exp,$$useremail)) {
      $return_array['success'] = '0';
      echo "Email invalido";
    }
  }
  if($username == ''){
    $return_array['success'] = '0';
    echo "Nombre requerido";
  }else{
    $string_exp = "/^[A-Za-z .'-]+$/";
    if (!preg_match($string_exp, $username)) {
      $return_array['success'] = '0';
      echo "Nombre invalido";
    }
  }
  return $return_array;
}
function sendEmail($username,$useremail,$useraddress,$userphone,$userProducts){
  $mail = "Mensaje: " . $username. "<br>"."Correo electronico: ".$useremail."<br>"."Dirección: ".$useraddress."<br>"."Telefono: ".$userphone ."<br>". "PRODUCTOS: " .$userProducts;
  $titulo = "PRUEBA DE TITULO";
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
  $headers .= "From: Joyeros Rose < mbolanosc@ucenfotec.ac.cr>\r\n";
  $bool = mail("mbolanos@lionix.org",$titulo,$mail,$headers);
  if($bool){
      echo "Mensaje enviado";

  }else{
      echo "Mensaje no enviado";
  }
  return true;
}
//enviar mjs
$return_array = validate($username,$useremail);

if($return_array['success'] == '1'){
  sendEmail($username,$useremail,$useraddress,$userphone,$userProducts);
  echo "Mensaje enviado";
}


?>
