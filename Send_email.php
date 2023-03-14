<?php
if (isset($_POST['submit_form'])) {
    $to = "acnahmmacher@gmail.com"; 
    $subject = "New message from " . $_POST['name'];
    $message = $_POST['message'];
    $headers = "From: " . $_POST['email'] . "\r\n" .
               "Reply-To: " . $_POST['email'] . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    mail($to, $subject, $message, $headers);
}
?>
