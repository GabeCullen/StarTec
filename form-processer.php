<?php  
 
if(isset($_POST['submit'])) {
 $mailto = "gcullen97@gmail.com";  //My email address
 $fromEmail = "gcullen97@gmail.com";
 //getting customer data
 $name = $_POST['name']; //getting customer name
 $phone = $_POST['phone']; //getting customer Phome number
 $quantity = $_POST['quantity']; //getting quantity
 $colour = $_POST['colour']; //getting colour
 $subject = 'contact form'; 
 $subject2 = "Confirmation: Message was submitted successfully | HMA WebDesign"; // For customer confirmation
 
 //Email body I will receive
 $message = "Name: " . $name . "\n"
 . "Phone Number: " . $number . "\n"
 . "Quantity: " . $quantity . "\n"
 . "Colour: " . $colour . "\n\n"
 . "Message: " . "\n" . $_POST['message'];
 
 //Message for client confirmation
 $message2 = "Dear" . $name . "\n"
 . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
 . "You submitted the following message: " . "\n" . $_POST['message'] . "\n\n"
 . "Regards," . "\n" . "- HMA WebDesign";
 
 //Email headers
 $headers = "From: " . $fromEmail; // Client email, I will receive
 $headers2 = "From: " . $mailto; // This will receive client
 
 //PHP mailer function
 
  $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
  $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client
 
  //Checking if Mails sent successfully
 
  if ($result1 && $result2) {
    $success = "Your Message was sent Successfully!";
  } else {
    $failed = "Sorry! Message was not sent, Try again Later.";
  }
 
} else {
    echo "error... you need to submit a form!";
} 
 
?>
