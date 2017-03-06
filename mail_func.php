/*************************************** PROGRAM TO PERFORM AUTO MAIL SYSTEM FOR ADMIN **************************************************/

<?php
require 'Email/PHPMailer/PHPMailerAutoload.php';          // INCLUDING REQUIRED PHPMailerAutoload.php file /
$from = $_POST['email'];
$username = $_POST['user'];
$pincode = $_POST['pincode'];
//echo $from." ".$username." ".$pincode;
$mail = new PHPMailer;

$mail->isSMTP();                                           // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                           // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                                  // Enable SMTP authentication
$mail->Username = 'rajabhishanu@gmail.com';             // SMTP username
$mail->Password = 'Xam!deagmail';                      // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                   // TCP port to connect to

$mail->setFrom($from, $username);                   // getting sender's info
$mail->addReplyTo($from, $username);               // adding "reply to" section
$mail->addAddress('rajabhishanu@gmail.com');      // Add a recipient

$mail->isHTML(true);                             // Set email format to HTML

$bodyContent = '<h1>A REQUEST FROM USER TO ADD HOSPITAL FOR  USER REQUESTED PINCODE :</h1>';   //setting html content //
$bodyContent .= $pincode;

$mail->Subject = 'Email for Location update by'." ".$from;                                    // setting email subject //
$mail->Body    = $bodyContent;

                                                // checking mail sent or not //
if(!$mail->send()) {
    echo '<script type="text/javascript"> if(confirm(" MAIL WAS NOT ABLE TO BE SENT , TRY AGAIN LATER")) {window.location="hospital_bed_booking.php";} </script>';
    
} else {
    echo '<script type="text/javascript"> if(confirm(" MAIL SENT TO ADMIN , YOUR REQUEST WILL BE UPDATED SOON")) {window.location="hospital_bed_booking.php";} </script>';
}

?>

