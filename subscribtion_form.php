<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the email is set and not empty
    if (isset($_POST["email"]) && !empty($_POST["email"])) {
        $email = $_POST["email"];

        // You can add additional validation and processing logic here

        // Example: Save the email to a file (replace with your logic)
        $file = 'subscribers.txt';
        file_put_contents($file, $email . PHP_EOL, FILE_APPEND);

        // You can redirect the user to a thank-you page or display a success message
        echo "Thank you for subscribing!";
    } else {
        // Handle case where email is not set or empty
        echo "Error: Email is required.";
    }
} else {
    // If the form is not submitted, redirect the user to the form page
    header("Location: index.html");
    exit;
}
?>
