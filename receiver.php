<?php

// echo"The form was sent by: " . $_POST['name'] ."</br>";
// echo"The subject is: " . $_POST['subject'] ."</br>";
// echo"The email is from: " . $_POST['mail'] ."</br>";
// echo"The message is: " . $_POST['message'];



if(isset($_POST['submit'])) {

    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
    $mailFrom = isset($_POST['mail']) ? $_POST['mail'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    echo "The form was sent by: " . $name . "</br>";
    echo "The subject is: " . $subject . "</br>";
    echo "The email is from: " . $mailFrom . "</br>";
    echo "The message is: " . $message;

    $mailTo = "woodbrom@kean.edu";
    $headers = "From: ". $mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: http://eve.kean.edu/~woodbrom/websiteProjects/receiver.php?mainsend");

   
}
?>
