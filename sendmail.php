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
        $firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
        $lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
        $budget = filter_input(INPUT_POST, 'budget', FILTER_SANITIZE_STRING);
        $projectTimeline = filter_input(INPUT_POST, 'projectTimeline', FILTER_SANITIZE_STRING);
        $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);

        $to = "lllevybbwalya@outlook.com"; 
        $subject = "New Contact Form Submission";
        $body = "First Name: {$firstName}\nLast Name: {$lastName}\nEmail: {$email}\nPhone: {$phone}\nBudget: {$budget}\nProject Timeline: {$projectTimeline}\nDescription: {$description}";
        $headers = "From: {$email}";

        if (mail($to, $subject, $body, $headers)) {
            echo "Message sent successfully!";
        } else {
            echo "Failed to send message.";
        }
    }
}else{
    echo "Failed to send message.";}
?>