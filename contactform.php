<?php
if(isset($_POST['submit'])){
    $to = "joyceswopearts@gmail.com";



    $name = $_POST['name'];
    $email= $_POST['email'];
    $subject= $_POST['subject'];
    $headers = 'From: '.$email . "\r\n";


    $subject = "name : ".$name. "\r\n" .
            "Message : " . $subject;
    if(mail($to, $subject, $headers)){
        echo "Mail Sent!";
    }else{
         echo "Failed To Send Mail";
    }
}

?>