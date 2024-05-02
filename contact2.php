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
$p_number = $_POST['p_number'];
$c_name = $_POST['c_name'];
$msg = $_POST['msg'];

error_reporting( E_ALL );
$to = "marketing@iecfabchem.in";
$subject = "Enquiry Form the Website";
$message = "Name: $u_name\nEmail: $u_email\nPhone Number: $p_number\nCompany Name: $c_name\nMessage: $msg";
$headers = 'From: website@iecfabchem.in' . "\r\n" .
    'Reply-To:' . $u_email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    
if ( mail($to,$subject,$message, $headers))
{
    $response = array('message' => 'Email sent successfully!');
    echo json_encode($response);
}
else {
// Failed to send email
$response = array('message' => 'Failed to send email.');
echo json_encode($response);
echo "Error: " . error_get_last()['message'];
}


?>
