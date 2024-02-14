<?php
        error_reporting( E_ALL );
        $from = "test@iecfabchem.in";
       $to = "iecfabchemwebsite@gmail.com";
        $subject = "PHP Mail Test script";
        $message = "This is a test to check the PHP Mail functionality";
        $headers = "From:" . $from;
        mail($to,$subject,$message, $headers);
        echo "Test email sent";
?>