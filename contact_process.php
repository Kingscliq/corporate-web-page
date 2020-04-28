<?php
if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email'])
 && isset($_POST['subject']) && isset($_POST['message'])){
     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $email = $_POST['email'];
     $message = $_POST['message'];
 }
 if (!empty($fname) && !empty($lname) && !empty($email) && !empty($message)){
     $to = '';
     $subject = $_POST['subject'];
     $body = $message;
     $headers = 'From:'. $email;
if (@mail($to, $body, $subject, $headers)){
echo "Have a nice day";
}else{
    echo "please try again later";
}
     } else{
         echo "sorry an error occured, please ensure you fill out all fields...........";
     }
?>