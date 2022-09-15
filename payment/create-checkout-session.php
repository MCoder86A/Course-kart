<?php
session_start();
require '../db.php';
require '../vendor/autoload.php';

\Stripe\Stripe::setApiKey('sk_test_51JUo2LSJe8u1WmfkHQpZC98rze2jK9jKqUF7R6T2KGJCb7qDjOiPnwHFdZhoAnD3hF5NH5NXVkG4LiTlBUTcCnPY00SL1v3ldl');

$stripe = new \Stripe\StripeClient(
  'sk_test_51JUo2LSJe8u1WmfkHQpZC98rze2jK9jKqUF7R6T2KGJCb7qDjOiPnwHFdZhoAnD3hF5NH5NXVkG4LiTlBUTcCnPY00SL1v3ldl'
);

header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://127.0.0.1/Pjct/Course-kart/payment/public';

$price = ["c1"=>"price_1JVsgtSJe8u1Wmfk8g1x2wFX",
          "c2"=>"price_1JVsiASJe8u1Wmfkh3j3TDSf"
        ];
$CourseID = [
  "c1"=>"C_101",
  "c2"=>"C_102"
];
// -----if _GET req does not match with CourseID then show error ---------
if(isset($_GET["cid"])){
  if(!array_key_exists($_GET["cid"], $CourseID)){
    echo "Link is broken";
    exit();
  }
}
else{
  echo "Link is broken";
  exit();
}
if(!$_SESSION["userinfo"]["userinfo"]["isLog"]===true ? true : false){
  exit();
}
//----------Retrieve StripeCusID if assosciated ---------
$resu = $conn->prepare('SELECT * FROM user WHERE emailID = ?');
$resu->bind_param("s", $_SESSION["userinfo"]["userinfo"]["emailid"]);
$resu->execute();
$resu = $resu->get_result();
$row = $resu->fetch_assoc();

if($row["StripeCusID"]==null){
  $StripeCusResponse = $stripe->customers->create([
    
  ]);
  $StripeCusID = $StripeCusResponse["id"];
  $resu = $conn->prepare('UPDATE user SET StripeCusID = ? WHERE emailID = ?');
  $resu->bind_param("ss",$StripeCusID, $row["emailID"]);
  $resu->execute();

}
else{ //<<<<----if StripeCusID found----
  $StripeCusID = $row["StripeCusID"];
  // -----------Checking incomplete Stripe SESSION if exist ---------
  $resu = $conn->prepare('SELECT * FROM payment WHERE StripeCusID = ? AND CourseID = ? AND expires > CURRENT_TIMESTAMP');
  $resu->bind_param("ss",$StripeCusID, $CourseID[$_GET["cid"]]);
  $resu->execute();
  $resu = $resu->get_result();
  if($resu->num_rows>0){
    while($row = $resu->fetch_assoc()){
      switch ($row["Sucess"]) {
        case 'SUCC':
          echo 'already a stud';
          exit();
          break;
        case 'INCO':
          //-------Check status via API and store pi if status is paid-----------
          $StripePIIDStat =  $stripe->paymentIntents->retrieve(
            $row["StripePIID"],
            []
          );
          $StripePIIDStat = $StripePIIDStat["status"];
          switch ($StripePIIDStat) {
            case 'succeeded':
              //------make it student if not exist-------
              $studresu = $conn->prepare('SELECT emailID FROM students where emailID = ? AND CourseID = ? AND expires > CURRENT_TIMESTAMP');
              $studresu->bind_param("ss", $_SESSION["userinfo"]["userinfo"]["emailid"], $CourseID[$_GET["cid"]]);
              $studresu->execute();
              $studresu = $studresu->get_result();
              if($studresu->num_rows==0){
                $res = $conn->query('SELECT DATE_ADD(CURRENT_TIMESTAMP, INTERVAL 6 month) AS Sdate');
                $date = $res->fetch_assoc();
                $date = $date["Sdate"];
                $email = $_SESSION["userinfo"]["userinfo"]["emailid"];
                $cid = $CourseID[$_GET["cid"]];

                $studresu = $conn->prepare('INSERT INTO students (emailID, expires, CourseID) VALUES (? , ? , ?)');
                $studresu->bind_param("sss", $email, $date, $cid);
                $studresu->execute();

                $Sucess = "SUCC";
                $studresu = $conn->prepare('UPDATE payment SET Sucess = ? WHERE StripePIID = ?');
                $studresu->bind_param("ss", $Sucess, $row["StripePIID"]);
                $studresu->execute();
              }
              
              echo "Your payment is already completed you are now ready to attend class";
              exit();
              break;
            
            case 'processing':
              echo "Processing the payment wait for some time";
              exit();
              break;

            case 'canceled':
              // -----Delete the StripePIID------
              $studresu = $conn->prepare('DELETE FROM payment WHERE StripePIID = ?');
              $studresu->bind_param("s", $row["StripePIID"]);
              $studresu->execute();
              break;
            
            default:
              # code...
              break;
          }
          break;

        default:
          # code...
          break;
      }
    }
  }
}


if(isset($_GET["cid"])){
  $checkout_session = \Stripe\Checkout\Session::create([
    'line_items' => [[
      'price' => $price[$_GET["cid"]],
      'quantity' => 1,
    ]],
    'payment_method_types' => [
      'card',
    ],
    'mode' => 'payment',
    'success_url' => $YOUR_DOMAIN . '/success.php?cid='.$_GET["cid"],
    'cancel_url' => $YOUR_DOMAIN . '/cancel.php?cid='.$_GET["cid"],
    'customer' => $StripeCusID
  ]);
  
  header("HTTP/1.1 303 See Other");
  header("Location: " . $checkout_session->url);
}

$res = $conn->query('SELECT DATE_ADD(CURRENT_TIMESTAMP, INTERVAL 6 month) AS Sdate');
$date = $res->fetch_assoc();
$date = $date["Sdate"];
$Sucess = "INCO";
$resu = $conn->prepare('INSERT INTO payment (StripeCusID, StripePIID, Sucess, CourseID, expires) VALUES (?, ?, ?, ?, ?)');
$resu->bind_param("sssss", $StripeCusID, $checkout_session["payment_intent"], $Sucess, $CourseID[$_GET["cid"]], $date);
$resu->execute();


$conn->close();
?>