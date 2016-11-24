<?php
if($_POST && isset($_FILES['fileproduct']))
{
  //variables
  $username = $_POST['name'];
  $useremail = $_POST['email'];
  $useraddress = $_POST['address'];
  $userphone = $_POST['phone'];
  $userProducts = nl2br(implode(', ', $_POST['productosDeInteres']));

  //email settings
  $from_email         = 'info@joyerosrose.com';
  $recipient_email    = 'joyerose@racsa.co.cr';
  $subject        = filter_var($_POST["name"], FILTER_SANITIZE_STRING); //get subject from HTML form

    //Get uploaded file data
    $file_tmp_name    = $_FILES['fileproduct']['tmp_name'];
    $file_name        = $_FILES['fileproduct']['name'];
    $file_size        = $_FILES['fileproduct']['size'];
    $file_type        = $_FILES['fileproduct']['type'];
    $file_error       = $_FILES['fileproduct']['error'];

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

    //file
    if($file_error > 0)
      {
        header("Location: error.html");
      }else{
        //enviar mjs
        $return_array = validate($username,$useremail,$useraddress,$userphone);
      }

    //read from the uploaded file & base64_encode content for the mail
    $handle = fopen($file_tmp_name, "r");
    $content = fread($handle, $file_size);
    fclose($handle);
    $encoded_content = chunk_split(base64_encode($content));

        $boundary = md5("sanwebe");
        //header
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "From:".$from_email."\r\n";
        $headers .= "Reply-To: ".$reply_to_email."" . "\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n";

        //plain text
        $body = "--$boundary\r\n";
        $body .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
        $body .= "Nombre: " . $username. "<br>"."Correo electronico: ".$useremail."<br>"."Direccion: ".$useraddress."<br>"."Telefono: ".$userphone ."<br>". "Productos: " .$userProducts ."\r\n\r\n";


        //attachment
        $body .= "--$boundary\r\n";
        $body .="Content-Type: $file_type; name=".$file_name."\r\n";
        $body .="Content-Disposition: attachment; filename=".$file_name."\r\n";
        $body .="Content-Transfer-Encoding: base64\r\n";
        $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n";
        $body .= $encoded_content;
        $body .= "--$boundary--";



    $sentMail = @mail($recipient_email, $subject, $body, $headers);
    if($sentMail) //output success or failure messages
    {
      header("Location: emailsend.html");
    }else{
      header("Location: error.html");
    }

}
?>
