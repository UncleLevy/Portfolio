<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(
        !empty($_POST['firstName'])
        && !empty($_POST['lastName'])
        && !empty($_POST['email'])
        && !empty($_POST['phone'])
        && !empty($_POST['budget'])
        && !empty($_POST['projectTimeline'])
        && !empty($_POST['description'])
    ){
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $budget = $_POST["budget"];
        $projectTimeline = $_POST["projectTimeline"];
        $description = $_POST["description"];

        $to = "lllevybbwalya@outlook.com"; // Replace with your email address
        $subject = "New Contact Form Submission";
        $body = "First Name: {$firstName}\nLast Name: {$lastName}\nEmail: {$email}\nPhone: {$phone}\nBudget: {$budget}\nProject Timeline: {$projectTimeline}\nDescription: {$description}";
        $headers = "From: {$email}";

        if (mail($to, $subject, $body, $headers)) {
            echo "Message sent successfully!";
        } else {
            echo "Failed to send message.";
        }
    }
}
?>
