<?php
    session_start();
    require("../../vendor/autoload.php");
    require("../../db.php");
    \Stripe\Stripe::setApiKey('sk_test_51JUo2LSJe8u1WmfkHQpZC98rze2jK9jKqUF7R6T2KGJCb7qDjOiPnwHFdZhoAnD3hF5NH5NXVkG4LiTlBUTcCnPY00SL1v3ldl');
    
    $stripe = new \Stripe\StripeClient(
      'sk_test_51JUo2LSJe8u1WmfkHQpZC98rze2jK9jKqUF7R6T2KGJCb7qDjOiPnwHFdZhoAnD3hF5NH5NXVkG4LiTlBUTcCnPY00SL1v3ldl'
    );
    $CourseID = [
      "c1"=>"C_101",
      "c2"=>"C_102"
    ];
    
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
    
    $resu = $conn->prepare('SELECT * FROM user WHERE emailID = ?');
    $resu->bind_param("s", $_SESSION["userinfo"]["userinfo"]["emailid"]);
    $resu->execute();
    $resu = $resu->get_result();
    $row = $resu->fetch_assoc();

    $StripeCusID = $row["StripeCusID"];
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
                
                echo "You are successfully purchased the course.. Happy Learning";
                exit();
                break;
              
              case 'processing':
                echo "Processing the payment it may require some time";
                exit();
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
    
?>
<html>
<head>
  <title>Thanks for your order!</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <section>
    <p>
      We appreciate your business!
    </p>
  </section>
</body>
</html>