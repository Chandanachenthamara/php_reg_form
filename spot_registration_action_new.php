<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $name = $_POST["name"];
  $dob = $_POST["dob"];
  $email = $_POST["email"];
  $mobile = $_POST["mobile"];
  $qualification = $_POST["qualification"];

  // Validate the form data
  $errors = [];
  if (empty($name)) {
    $errors[] = "Name is required";
  }
  if (empty($dob)) {
    $errors[] = "Date of Birth is required";
  }


  if (empty($email)) {
  $errors[] = "Email is required";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) || !preg_match('/@.+\./', $email)) {
  $errors[] = "Invalid email format";
}

  if (empty($mobile)) {
    $errors[] = "Mobile Number is required";
  } elseif (!is_numeric($mobile)) {
    $errors[] = "Mobile Number must be numeric";
  }
  if (empty($qualification)) {
    $errors[] = "Qualification is required";
  }

  // If there are errors, display them to the user
  if (!empty($errors)) {
    echo "<ul>";
    foreach ($errors as $error) {
      echo "<li>$error</li>";
    }
    echo "</ul>";
  } else {
    // Send the email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $to = "abc@gmail.com";
      $from = "abc@gmail.com";
      $subject = "Sub";
      $mail_body = "body,\n\n";
      $mail_body .= "You have received a new message:\n\n";
      $mail_body .= "Name: $name\nDate of Birth: $dob\nEmail: $email\nMobile Number: $mobile\nQualification: $qualification\n\n";
      $mail_body .= "Thank you for your attention.\n\n";
      $mail_body .= "Best regards,\n";
      $mail_body .= "body";

      $headers = "From: $from\r\n";
      $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

      if (mail($to, $subject, $mail_body, $headers)) {
        // Display thank you message
        echo "<p>Thank you for your enquiry! We will get in touch with you soon.</p>";
      } else {
        echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
      }
    } else {
      echo "<p>Invalid email format. Please enter a valid email address.</p>";
    }
  }
}
?>
