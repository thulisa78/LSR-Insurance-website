<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    
    // Email details
    $to = "tulisa.wasa@gmail.com";
    $subject = "New Quote Request";
    $message = "
    <html>
    <head>
        <title>New Quote Request</title>
    </head>
    <body>
        <h2>Quote Request Details</h2>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Phone Number:</strong> {$number}</p>
        <p><strong>Email:</strong> {$email}</p>
    </body>
    </html>
    ";
    
    // Headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: <{$email}>" . "\r\n";
    
    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Your quote request has been sent successfully!";
    } else {
        echo "There was an error sending your request. Please try again.";
    }
}
?>
