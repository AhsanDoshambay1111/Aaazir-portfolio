<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "ajdashti5@gmail.com"; // Replace with your Gmail address
    $subject = "Form Submission";
    $messageBody = "First Name: $firstName\nLast Name: $lastName\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $messageBody)) {
        echo "Message sent successfully.";
    } else {
        echo "Message could not be sent.";
    }
}
?>
