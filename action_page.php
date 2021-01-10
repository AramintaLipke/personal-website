<?php

if (isset($_POST['Submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mailFrom = $_POST['emailaddress'];
    $subject = $_POST['subject'];

    $mailTo = "aramintalipke@outlook.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved an email from".$fname.".\n\n".$subject;

    mail($mailTo, $subject, $txt, $headers);
    header("Location:index.html?mailsend");
}