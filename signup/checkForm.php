<?php
        session_start();
        
        $jsonObj = array("otp"=>"", "reg"=>"", "etc"=>"");

        require("db.php");
        if(isset($_POST["otp"])){
            if(isset($_SESSION["otp"]) && ($_SESSION["otp"] === $_POST["otp"])){
                unset($_SESSION["otp"]);

                $ssql =  $conn->prepare("INSERT INTO user (emailID, pwd, username) VALUES (?, ?, ?)");
                $ssql->bind_param("sss",$emailID,$pwd,$username);
                
                $emailID = $_SESSION["userID"];
                $pwd = $_SESSION["pwd"];
                $username = $_SESSION["username"];
                
                if($ssql->execute()){
    
                    $jsonObj["reg"] = "1"; //registration success
                    $jsonObj["etc"] = "1"; //redirect
                }
                else $jsonObj["reg"] = "0"; //Email ID already exist
            }
            else{
                $jsonObj["reg"] = "2"; // Wrong OTP
            }
            unset($_SESSION["userID"]);
            unset($_SESSION["pwd"]);
            unset($_SESSION["username"]);
        }
        else if(isset($_POST["username"]) && isset($_POST["userID"]) && isset($_POST["pwd"])){
            //require("send_mail.php");
            $_SESSION["userID"] = $_POST["userID"];
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["pwd"] = $_POST["pwd"];
            
            $otp = strval(random_int(100000,999999));
            $_SESSION["otp"] = "1111";//$otp;
            //$mail->AddAddress($_SESSION["userID"], $_SESSION["username"]);
            //$mail->Subject = $otp .'-OTP for verification';
            //$mail->Body    = 'OTP: '. $otp;
            //$mail->Body = '<div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
            //<div style="margin:50px auto;width:70%;padding:20px 0">
            //    <div style="border-bottom:1px solid #eee">
            //     <a href="" style="font-size:1.4em;color: #00466a;text-decoration:none;font-weight:600">Your Brand</a>
            //     </div>
            //     <p>Use the following OTP to complete your Sign Up procedures.</p>
            //     <h2 style="background: #00466a;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;">'.$otp.'</h2>
            // </div>
            // </div>';

            // if(!$mail->Send()) {
            if(!true) {
                $jsonObj["otp"] = "0"; //OTP cannot send
                var_dump($mail);
            } else {
                $jsonObj["otp"] = "1"; // OTP sent
            }
        }
        echo json_encode($jsonObj);;
?>