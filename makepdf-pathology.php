<?php
require_once __DIR__ . '/vendor/autoload.php';

//grab variables
 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $message = $_POST['message'];


//Create new PDF instance
 $mpdf = new \Mpdf\Mpdf();


//Create pdf
 $data = '';

 $data .= '<h1>Your details</h1>';

 // add data
  $data .= '<strong>First Name</strong>' . $fname . '<br/>';
  $data .= '<strong>Last Name</strong>' . $lname . '<br/>';

  if($message)
  {
    $data .= '<br/> <strong>message</strong><br/>' . $message;
  }

  //write PDF
$mpdf->WriteHTML($data);

//Output to browser
$mpdf->Output('mypdf.pdf', 'D');
