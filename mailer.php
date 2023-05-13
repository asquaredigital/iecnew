<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   // Collect form data
   $name = $_POST['name'];
   $phone = $_POST['u_number'];
   $email = $_POST['email'];
   $companyName = $_POST['c_name'];

   // Set recipient email address
   $recipient = 'elavarasan5193n@gmail.com';

   // Set subject
   $subject = 'Contact Form Submission';

   // Build the email content
   $message = "Name: $name\n";
   $message .= "Phone: $phone\n";
   $message .= "Email: $email\n";
   $message .= "Company Name: $companyName\n";

   // Set headers
   $headers = "From: $name <$email>";

   // Attempt to send the email
   if (mail($recipient, $subject, $message, $headers)) {
      // Email sent successfully
      echo 'Thank you for your submission!';
   } else {
      // Failed to send email
      echo 'Sorry, there was an error sending your message. Please try again later.';
   }
} else {
   // If the request method is not POST, redirect to the index.html page
   header('Location: index.html');
}
?>
