<?php
    $var = "c1";
    $CourseID = [
        "c1"=>"C_101",
        "c2"=>"C_102"
    ];

    if(!array_key_exists($var, $CourseID)){
        exit();
    }
    echo "f";
    // require '../db.php';
    // $res = $conn->query('SELECT DATE_ADD(CURRENT_TIMESTAMP, INTERVAL 6 month) AS d');
    // $date = $res->fetch_assoc();
    // $date = $date["d"];
    // $em = "sddddsss@dj.com";
    // $c = "C_101";
    // $studresu = $conn->prepare('INSERT INTO students (emailID, expires, CourseID) VALUES (? , ? , ?)');
    // $studresu->bind_param("sss", $em, $date, $c);
    // $studresu->execute();
    
    
    
    
    // $res = $conn->query('SELECT DATE_ADD(CURRENT_TIMESTAMP, INTERVAL -2 month) AS d');
    // $date = $res->fetch_assoc();
    // $date = $date["d"];
     
    // echo $date;
    // $studresu = $conn->prepare('SELECT * FROM students where CourseID = ? AND  expires > DATE_ADD(CURRENT_TIMESTAMP, INTERVAL 3 month)');
    // $cid = 'C_101';
    // $studresu->bind_param("s", $cid);
    // $studresu->execute();
    // $studresu = $studresu->get_result();
    // if($studresu->num_rows>0){
    //   echo $studresu->num_rows;
    //   while($rw = $studresu->fetch_assoc()){
    //     print_r($rw);
    //   }
    // }
    // $conn->close();
?>