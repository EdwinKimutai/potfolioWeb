<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are set
    if (
        isset($_POST["full_name"]) &&
        isset($_POST["email"]) &&
        isset($_POST["subject"]) &&
        isset($_POST["message"])
    ) {
        // Collect form data
        $full_name = $_POST["full_name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        // You can add additional validation and processing logic here

        // Example: Sending an email (replace with your email logic)
        $to = "your@example.com";
        $subject = "New Contact Form Submission";
        $message_body = "Full Name: $full_name\nEmail: $email\nSubject: $subject\nMessage: $message";
        $headers = "From: $email";

        mail($to, $subject, $message_body, $headers);

        // You can redirect the user to a thank-you page or display a success message
        echo "Thank you for your submission!";
    } else {
        // Handle case where not all required fields are set
        echo "Error: Missing required form fields.";
    }
} else {
    // If the form is not submitted, redirect the user to the form page
    header("Location: index.html");
    exit;
}
?>
