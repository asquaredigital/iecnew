<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // Script accessed directly without form submission
    $response = array('message' => 'Invalid request.');
    echo json_encode($response);
    exit;
}

// Get form data
$u_name = $_POST['u_name'];
$u_email = $_POST['u_email'];
$c_Name = $_POST['c_Name'];
$pname = $_POST['pname'];

// Set up email headers
// Set up email headers
$headers = "From: iecfabchem.com" . "\r\n" .
           "Reply-To: $u_email" . "\r\n" ;

// Set up email content
$subject = 'Product Enquiry Form the Website';
$message = "Name: $u_name\nEmail: $u_email\nEnquired Product: $pname\nCompany Name: $c_Name\n";
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (mail('elavarasan5193@gmail.com', $subject, $message, $headers)) {
    // Email sent successfully
    $response = array('message' => 'Email sent successfully!');
    echo json_encode($response);
} else {
    // Failed to send email
    $response = array('message' => 'Failed to send email.');
    echo json_encode($response);
    echo "Error: " . error_get_last()['message'];
}
?>

