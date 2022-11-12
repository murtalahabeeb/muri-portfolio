<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$email =$_GET['email'];
$message =$_GET['message'];
$subject = "From portfolio website from ".$email =$_GET['name'];;
         
$message = $message;


$header = "From:murtalahabeeb@gmail.com \r\n";
//$header .= "Cc:afgh@somedomain.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";


         $retval = mail ($email,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully... you will be redirected after 5 seconds";
            header( "refresh:8;url=index.html" );
         }else {
            echo "Message could not be sent... you will be redirected after 5 seconds";
            header( "refresh:8;url=index.html" );
         }
      ?>
