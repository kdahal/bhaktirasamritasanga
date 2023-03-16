<?php
if( isset($_POST['one']) && isset($_POST['two']) && isset($_POST['three']) && isset($_POST['four']) && isset($_POST['five']) && isset($_POST['six']) ){
	$one = $_POST['one'];
	$two = $_POST['two'];
	$three = $_POST['three'];
	$four = $_POST['four'];
	$five = $_POST['five'];
	$six = nl2br($_POST['six']);
	$to = "tostidas@hotmail.com";	
	$from = $five;
	$subject = 'YOU LOST A CUSTOMER';
	$message = '<table style="font-family: arial, sans-serif; border-collapse: collapse; width: 50%;">

  <tr  style="background-color: #dddddd;">
    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Q1:</td>
    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;"> '.$one.' </td>
    
  </tr>
  <tr>
    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Q2:</td>
    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;"> '.$two.' </td>
    
  </tr>
    <tr style="background-color: #dddddd;">
    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Q3</td>
    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;"> '.$three.' </td>
    
  </tr>
  <tr>
    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Q4</td>
    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;"> '.$four.' </td>
    
  </tr>
  <tr style="background-color: #dddddd;">
    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Email:</td>
    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;"> '.$five.' </td>
    
  </tr>
  <tr>
    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Comments:</td>
    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;"> '.$six.' </td>
    
  </tr>
</table>';
	$headers = "From: $from\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	if( mail($to, $subject, $message, $headers) ){
		echo "success";
	} else {
		echo "The server failed to send the message. Please try again later.";
	}
}
?>