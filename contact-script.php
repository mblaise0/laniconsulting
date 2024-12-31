
<!-- 
    Project: laniconsulting.ng
    Author: alaid_technologies Ltd.
    Created on: 2024-09-07
    Description: Developed for Lani consulting. Lani Consulting, based in Nigeria, is a premier consulting firm dedicated to providing innovative and strategic 
    solutions to businesses across diverse industries. As trusted advisors, we specialize in transforming challenges into opportunities,
     driving sustainable growth, and fostering enduring client relationships. .
-->

<?php
session_start();
session_regenerate_id(true);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$webEmail = "info@laniconsulting.ng";    //enter the web email address
$webEmailPassword = "0%2WKkl_V307";        //enter the web email address password
$myPersonalEmail = "info@laniconsulting.ng";  //enter email address where you want to recieve the contact form email

require './phpmailer/src/Exception.php';
require './phpmailer/src/PHPMailer.php';
require './phpmailer/src/SMTP.php';


/*
 * captcha with phpmaster account
*/

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $org = $_POST['organization'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $visitor_name = $_POST['name'];

    $mail = new PHPMailer(true);

    $mail->SMTPDebug = 0;

    $mail->Host = 'jofaye.com';   //this should be the domain
    $mail->SMTPAuth = true;
    $mail->Username = $webEmail;
    $mail->Password = $webEmailPassword;
    $mail->SMTPSecure = 'tls';
    $mail->Port = 465;    //check information from server email Outgoing server port

    $mail->setFrom($webEmail, 'Contact-page');
    $mail->addAddress($myPersonalEmail);
    $mail->addReplyTo($_POST['email'], $_POST['name']);

    $mail->isHTML(true);
    $mail->Subject = $_POST['subject'];
    $mail->Body = "<p>$message</p><p><strong>$visitor_name</strong><br/><em>Organization: $org</em></p>";

    if (isset($_POST['g-recaptcha-response'])) {
        $token = $_POST['g-recaptcha-response'];
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = array(
            'secret' => 'enter-secret-password',
            'response' => $token
        );

        $options = array(
            'http' => array(
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
            )
        );

        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $response = json_decode($result);

        if ($response->success && $response->score >= 0.5) {
            // echo json_encode(array('success' => true, "msg"=>"You are not a robot!", "response"=>$response));
            try {
                $mail->send();
                // echo 'Your message was sent successfully!';
                $_SESSION['success'] = "Your message was sent successfully!";
                echo "<script>window.location='./contact.php'</script>";
            } catch (Exception $e) {
                // echo "Your message could not be sent! PHPMailer Error: {$mail->ErrorInfo}";
                $_SESSION['success'] = "Your message could not be sent! PHPMailer Error: {$mail->ErrorInfo}";
                echo "<script>window.location='./contact.php'</script>";
            }
        } else {

            echo json_encode(array('success' => false, "msg" => "You are a robot!", "response" => $response));
        }
    }
}
