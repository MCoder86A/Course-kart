<?php
    session_start();
    if(isset($_SESSION["userinfo"])){
        unset($_SESSION["userinfo"]);
    }
?>