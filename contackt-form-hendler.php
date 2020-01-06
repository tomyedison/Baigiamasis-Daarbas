<?php
    if (isset($_POST['submit'])) {
        
    $name = $_POST['name'];
    $submit = $_POST['submit'];
    $mailForm = $_POST['email'];
    $message = $_POST['message'];
        

    $mailTo = 'kiyahaj981@fxmail.ws';
    $header = "Form: ".$mailForm;
    $txt = "you have reaceved messege ".$name.".\n\n".$message;
        
    mail($mailTo, $submit, $txt, $header);
    header("Location: contakt.html?mailsend");
    }
echo ('Jūsų žinutė buvo išsiųsta.');
?>