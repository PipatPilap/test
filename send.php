<?php
$headers =  'MIME-Version: 1.0' . "\r\n";
$headers .= 'From: Your name <info@address.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

mail($to, $subject, $body, $headers);
$to =$_POST['to'];
$from =$_POST['from'];
$subject =$_POST['Subject'];
$message =$_POST['message'];

$header ="From:$from";
mail ($to,$subject,$header);

 ?>
