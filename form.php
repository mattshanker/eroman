<?php
if(isset($_POST['submit'])){
    $to = $_POST['email']; // this is your Email address
    $from = $_POST['emilio@emilioroman.com']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "E-Book Download Link";
    //$subject2 = "Copy of your form submission";
    $message = "Hello, " . $first_name . " " . $last_name . " here is your download link:" . "https://drive.google.com/file/d/0B2r7gJPnpnPjZWRYaGVuelFZUm8/view?usp=sharing" ". Thank you for reading!";
    //$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    //$headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ".";
         }
         ?>



//https://drive.google.com/file/d/0B2r7gJPnpnPjZWRYaGVuelFZUm8/view?usp=sharing
