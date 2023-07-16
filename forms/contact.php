<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and sanitize input
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);
  
    // Validate input (you can add more validation as per your requirements)
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
      $error_message = "Please fill in all fields.";
    } else {
      // Set up email recipient and headers
      $to = "youx3ssef@gmail.com.com";
      $headers = "From: $name <$email>\r\n";
      $headers .= "Reply-To: $email\r\n";
  
      // Send the email
      if (mail($to, $subject, $message, $headers)) {
        $success_message = "Your message has been sent successfully!";
      } else {
        $error_message = "Oops! Something went wrong. Please try again later.";
      }
    }
  }
?>
