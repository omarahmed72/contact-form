<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = filter_var( $_POST['name'], FILTER_SANITIZE_STRING) ;
  $phone = filter_var(  $_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
  $message = filter_var(  $_POST['message'], FILTER_SANITIZE_STRING);


  $myEmail = 'omah15289@gmail.com';
  $subject = 'Contact Form';


  mail($myEmail, $subject, $message);
}


?>