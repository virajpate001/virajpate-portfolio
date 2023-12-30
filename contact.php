<?php
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $services = $_POST["services"];
    $message = $_POST["message"];

    // Basic validation
    if (empty($name) || empty($email) || empty($services) || empty($message)) {
        echo "<p style='color: red;'>All fields are required</p>";
    } else {
        // Send email (you may need to configure your server for this to work)
        $to = "virajpate27@gmal.com"; // Replace with your email address
        $subject = "New Contact Form Submission";
        $headers = "From: $email";

        // You can customize the email content as needed
        $emailContent = "Name: $name\nEmail: $email\nServices: $services\nMessage: $message";

        // Send the email
        mail($to, $subject, $emailContent, $headers);
        header("Location: thank_you.html");
        exit();
    }
?>
