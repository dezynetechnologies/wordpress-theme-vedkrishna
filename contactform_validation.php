<?php
/**
 * Template Name: emailsend Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vedkrishna
 */


if(isset($_POST['email'])) {



// EDIT THE 2 LINES BELOW AS REQUIRED

//$email_to = "dheeraj@dezyne.in";
$email_to = "vedkrishna67@gmail.com";

$email_subject = "Your email subject line";





function died($error) {

    // your error code can go here

    echo "We are very sorry, but there were error(s) found with the form you submitted. ";

    echo "These errors appear below.<br /><br />";

    echo $error."<br /><br />";

    echo "Please go back and fix these errors.<br /><br />";

    die();

}



// validation expected data exists

if(!isset($_POST['fname']) ||

    !isset($_POST['lname']) ||

    !isset($_POST['email']) ||

    !isset($_POST['phone']) ||

    !isset($_POST['comments'])) {

//echo $_POST['lname'];
//echo $_POST['email'];
//echo $_POST['phone'];
//echo $_POST['comments'];

    died('We are sorry, but there appears to be a problem with the form you submitted.');

}



$first_name = $_POST['fname']; // required

$last_name = $_POST['lname']; // required

$email_from = $_POST['email']; // required

$telephone = $_POST['phone']; // not required

$comments = $_POST['comments']; // required



$error_message = "";

$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

if(!preg_match($email_exp,$email_from)) {

$error_message .= 'The Email Address you entered does not appear to be valid.<br />';

}

$string_exp = "/^[A-Za-z .'-]+$/";

if(!preg_match($string_exp,$first_name)) {

$error_message .= 'The First Name you entered does not appear to be valid.<br />';

}

if(!preg_match($string_exp,$last_name)) {

$error_message .= 'The Last Name you entered does not appear to be valid.<br />';

}

if(strlen($comments) < 2) {

$error_message .= 'The Comments you entered do not appear to be valid.<br />';

}

if(strlen($error_message) > 0) {

died($error_message);

}

$email_message = "Form details below.\n\n";



function clean_string($string) {

  $bad = array("content-type","bcc:","to:","cc:","href");

  return str_replace($bad,"",$string);

}



$email_message .= "fname: ".clean_string($first_name)."\n";

$email_message .= "lname: ".clean_string($last_name)."\n";

$email_message .= "email: ".clean_string($email_from)."\n";

$email_message .= "phone: ".clean_string($telephone)."\n";

$email_message .= "comments: ".clean_string($comments)."\n";





// create email headers

$headers = 'From: '.$email_from."\r\n".

'Reply-To: '.$email_from."\r\n" .

'X-Mailer: PHP/' . phpversion();

//@mail($email_to, $email_subject, $email_message, $headers);
if ( wp_mail($email_to,$email_subject,$email_message,$headers) ) {
   echo "The email has been sent!";
   } else {
   echo "The email has failed!";
   }
?>



<!-- include your own success html here -->



Thank you for contacting us. We will be in touch with you very soon.



<?php

}

?>
