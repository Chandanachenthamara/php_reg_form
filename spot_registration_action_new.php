<?php
// Check if the form was submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   // Get the form data
//   $name = $_POST["name"];
//   $dob = $_POST["dob"];
//   $email = $_POST["email"];
//   $mobile = $_POST["mobile"];
//   $qualification = $_POST["qualification"];

//   Validate the form data (e.g. check for empty fields)
//   $errors = [];
//   if (empty($name)) {
//     $errors[] = "Name is required";
//   }
//   if (empty($dob)) {
//     $errors[] = "Date of Birth is required";
//   }
//   if (empty($email)) {
//     $errors[] = "Email is required";
//   // } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//   //   $errors[] = "Invalid email format";
//   // }
//   }
//   if (empty($mobile)) {
//     $errors[] = "Mobile Number is required";
//   }
//   if (empty($qualification)) {
//     $errors[] = "Qualification is required";
//   }

//   // If there are errors, display them to the user
//   if (!empty($errors)) {
//     foreach ($errors as $error) {
//       echo "<p>$error</p>";
//     }
//   } else {

//     $to = "chandana.taurus@gmail.com";
//     $subject = "Spot Admission";
//     // Set the mail body content
// $mail_body = "Spot Admission Enquiry From SDSKOCHI,\n\n";
// $mail_body .= "Name: $name\nDate of Birth: $dob\nEmail: $email\nMobile Number: $mobile\nQualification: $qualification\n\n";
// $mail_body .= "Thank you\nhttps://www.sdskochi.com/";

// // Set the email headers
// $headers = "From: sdikochi@gmail.com\r\n";
// $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// // Send the email
// if (mail($to, $subject, $mail_body, $headers)) {
//   // Display thank you message
//   echo "<p>Thank you for registering!</p>";
// } else {
//   echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
// }

//   }
// }




// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   $error_messages = [
//     "name" => "Name is required",
//     "dob" => "Date of Birth is required",
//     "email" => "Email is required",
//     "mobile" => "Mobile Number is required",
//     "qualification" => "Qualification is required",
//   ];
//   $form_data = filter_input_array(INPUT_POST, [
//     "name" => FILTER_SANITIZE_STRING,
//     "dob" => FILTER_SANITIZE_STRING,
//     "email" => FILTER_SANITIZE_EMAIL,
//     "mobile" => FILTER_SANITIZE_STRING,
//     "qualification" => FILTER_SANITIZE_STRING,
//   ]);
//   $errors = [];
//   foreach ($form_data as $key => $value) {
//     if (empty($value)) {
//       $errors[$key] = $error_messages[$key];
//     }
//   }
//   if (!empty($errors)) {
//     foreach ($errors as $error) {
//       echo "<p>$error</p>";
//     }
//   } else {
//     $to = "chandana.taurus@gmail.com";
//     $subject = "Spot Admission";
//     $name = htmlspecialchars($form_data["name"]);
//     $dob = htmlspecialchars($form_data["dob"]);
//     $email = htmlspecialchars($form_data["email"]);
//     $mobile = htmlspecialchars($form_data["mobile"]);
//     $qualification = htmlspecialchars($form_data["qualification"]);
//     $mail_body = "Spot Admission Enquiry From SDSKOCHI,\n\n";
//     $mail_body .= "Name: $name\nDate of Birth: $dob\nEmail: $email\nMobile Number: $mobile\nQualification: $qualification\n\n";
//     $mail_body .= "Thank you\nhttps://www.sdskochi.com/";
//     $headers = "From: sdikochi@gmail.com\r\n";
//     $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
//     if (mail($to, $subject, $mail_body, $headers)) {
//       echo "<p>Thank you for registering!</p>";
//     } else {
//       echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
//     }
//   }
// }





// Check if the form was submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   // Get the form data
//   $name = $_POST["name"];
//   $dob = $_POST["dob"];
//   $email = $_POST["email"];
//   $mobile = $_POST["mobile"];
//   $qualification = $_POST["qualification"];

//   // Validate the form data
//   $errors = [];
//   if (empty($name)) {
//     $errors[] = "Name is required";
//   }
//   if (empty($dob)) {
//     $errors[] = "Date of Birth is required";
//   }
//   if (empty($email)) {
//     $errors[] = "Email is required";
//   } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     $errors[] = "Invalid email format";
//   }
//   if (empty($mobile)) {
//     $errors[] = "Mobile Number is required";
//   } elseif (!is_numeric($mobile)) {
//     $errors[] = "Mobile Number must be numeric";
//   }
//   if (empty($qualification)) {
//     $errors[] = "Qualification is required";
//   }

//   // If there are errors, display them to the user
//   if (!empty($errors)) {
//     echo "<ul>";
//     foreach ($errors as $error) {
//       echo "<li>$error</li>";
//     }
//     echo "</ul>";
//   } else {
//     // Send the email
//     $to = "chandana.taurus@gmail.com";
//     $subject = "Spot Admission Enquiry";
//     $mail_body = "Dear SDSKochi Team,\n\n";
//     $mail_body .= "You have received a new Spot Admission Enquiry from the following user:\n\n";
//     $mail_body .= "Name: $name\nDate of Birth: $dob\nEmail: $email\nMobile Number: $mobile\nQualification: $qualification\n\n";
//     $mail_body .= "Thank you for your attention.\n\n";
//     $mail_body .= "Best regards,\n";
//     $mail_body .= "The SDSKochi Website";

//     $headers = "From: $email\r\n";
//     $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

//     if (mail($to, $subject, $mail_body, $headers)) {
//       // Display thank you message
//       echo "<p>Thank you for your enquiry! We will get in touch with you soon.</p>";
//     } else {
//       echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
//     }
//   }
// }
// 


// <?php
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
  // if (empty($email)) {
  //   $errors[] = "Email is required";
  // } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  //   $errors[] = "Invalid email format";
  // }

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
      $to = "chandana.taurus@gmail.com";
      $from = "sdikochi@gmail.com";
      $subject = "Spot Admission";
      $mail_body = "Spot Admission Enquiry From SDSKOCHI,\n\n";
      $mail_body .= "You have received a new Spot Admission Enquiry from the following user:\n\n";
      $mail_body .= "Name: $name\nDate of Birth: $dob\nEmail: $email\nMobile Number: $mobile\nQualification: $qualification\n\n";
      $mail_body .= "Thank you for your attention.\n\n";
      $mail_body .= "Best regards,\n";
      $mail_body .= "https://www.sdskochi.com/";

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
