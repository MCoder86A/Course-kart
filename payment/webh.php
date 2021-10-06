<?php

    require '../vendor/autoload.php';
    require("../db.php");
    $ssql =  $conn->prepare("INSERT INTO cus_payments (msg) VALUES (?)");
        $ssql->bind_param("s",$msg);
        $sd = $event->data->object;
        $msg = "HI";
        $ssql->execute();
    
// $endpoint_secret = 'whsec_fWNeuU9LJyrUmk64RhlLM96admzYpWzZ';

// $payload = @file_get_contents('php://input');
// $sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];
// $event = null;

// try {
//   $event = \Stripe\Webhook::constructEvent(
//     $payload, $sig_header, $endpoint_secret
//   );
// } catch(\UnexpectedValueException $e) {
//   http_response_code(400);
//   exit();
// } catch(\Stripe\Exception\SignatureVerificationException $e) {
//   http_response_code(400);
//   exit();
// }
//         // $ssql =  $conn->prepare("INSERT INTO cus_payments (msg) VALUES (?)");
//         // $ssql->bind_param("s",$msg);
//         // $msg = $event->type;
//         // $ssql->execute();
// // Handle the event
// switch ($event->type) {
//   case 'payment_intent.succeeded':
//         $paymentIntent = $event->data->object;
//         // $ssql =  $conn->prepare("INSERT INTO cus_payments (msg) VALUES (?)");
//         // $ssql->bind_param("s",$msg);
//         // $msg = "Himan";
//         // $ssql->execute();
//   default:
//     echo 'Received unknown event type ' . $event->type;
//     $paymentIntent = $event->data->object;
        
// }
//         $ssql =  $conn->prepare("INSERT INTO cus_payments (msg) VALUES (?)");
//         $ssql->bind_param("s",$msg);
//         $sd = $event->data->object;
//         $msg = "HI";
//         $ssql->execute();

// http_response_code(200);
?>
