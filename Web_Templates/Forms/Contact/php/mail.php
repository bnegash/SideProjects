

<?php
use PHPMailer\PHPMail
// Check if the form was submitted using the Post method
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Include the necessary validation files
    require_once("includes/validation.php");    // Validation Functions

    // Initialize variables to store form data and validation errors
    $name = $email = $message = "";
    $name_err = $email_err = $message_err = "";

    // Process form data
    if(isset($_POST["submit"])){

        // Validate form fields
        $name_err = validate_name($name);
        $email_err = validate_email($email);
        $message_err = validate_msg($message);

        // Check if there are no validation errors
        if(empty($name_err) && empty($email_err) && empty($message_err)){
            // Send an email notification to the desired recipient
            $emailTo = "bnegash16@gmail.com";
            $subject = "Contact Form Submission Test";
            $headers = 'From: $email';

            // Compose the email message
            $email_msg = 'Name: $name\n';
            $email_msg .= 'Email: $email\n';
            $email_msg .= 'Message:\n$message';

            // Send the email
            if(mail($emailTo,$subject,$message,$headers)){
                echo 'The mail was sent successfully.';
            }else{
                echo 'Mail was not delievered successfully.';
            }

            // Redirect the user to a success.php page after successful submission
        }
    }
}
?>




