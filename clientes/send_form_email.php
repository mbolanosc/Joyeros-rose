<?php
//variables
$username = $_POST['name'];
$useremail = $_POST['email'];
$useraddress = $_POST['address'];
$userphone = $_POST['phone'];
$userProducts = nl2br(implode(', ', $_POST['productosDeInteres']));

function validate($username, $useremail,$useraddress,$userphone){
  $return_array=array();
  $return_array['success'] = '1';
  //email
  if($useremail == ''){
    $return_array['success'] = '0';
  }else{
    $email_exp = "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/";
    if(!preg_match($email_exp,$useremail)) {
      $return_array['success'] = '0';
    }
  }
  //user name
  if($username == ''){
    $return_array['success'] = '0';
  }else{
    $string_exp = "/^[A-Za-z .'-]+$/";
    if (!preg_match($string_exp, $username,$useraddress)) {
      $return_array['success'] = '0';
    }
  }
  //address
  if($useraddress == ''){
    $return_array['success'] = '0';
  }

  //phone Number
  if($userphone == ''){
    $return_array['success'] = '0';
  }
  return $return_array;
}
function sendEmail($username,$useremail,$useraddress,$userphone,$userProducts){
  $mail = "Nombre: " . $username. "<br>"."Correo electronico: ".$useremail."<br>"."Direccion: ".$useraddress."<br>"."Telefono: ".$userphone ."<br>". "PRODUCTOS: " .$userProducts;
  $titulo = "Sitio web Joyeros Rose";
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
  $headers .= "From: Joyeros Rose <info@joyerosrose.com >\r\n";
  $bool = mail("joyerose@racsa.co.cr",$titulo,$mail,$headers);

  if($bool){
      //echo "Mensaje enviado";
      header("Location: emailsend.html");

  }else{
      header("Location: error.html");
      //echo "Mensaje no enviado";
  }
  return true;
}
//enviar mjs
$return_array = validate($username,$useremail,$useraddress,$userphone);

if($return_array['success'] == '1'){
  sendEmail($username,$useremail,$useraddress,$userphone,$userProducts);
}


?>
