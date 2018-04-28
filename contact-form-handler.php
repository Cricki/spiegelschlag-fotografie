<?php
    $name =$_POST["name"];
    $visitor_email = $_POST["email"];
    $message = $_POST["message"];

    $email_from = "info@spiegelschlag-fotografie.de";

    $email_subject = "New Form Submmission";

    $email_body = "Benutzer: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";

    $to = "info@spiegelschlag-fotografie.de";

    $headers = "From: $email_from \r\n";
    $headers = "Reply-To : $visitor_email \r\n";

    mail($to,$email_subject, $email_body,$headers);

    header("Location: contact.php");
?>
