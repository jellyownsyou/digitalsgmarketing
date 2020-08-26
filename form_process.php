<?php

if(isset($_POST['submit'])) {
    
    $email = $_POST['email'];
    $to = "samo.goljat1@gmail.com";
//    $subject = $_POST['country'];
    $subject = "To je subject";
    $text = $_POST['subject'];
    $headers = "From: {$email}";
        
    mail($to,$subject,$text);
    header("Location: ./domov.html");
    
}
?>
