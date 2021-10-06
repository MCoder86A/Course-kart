<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/c9b1a782b4.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="../scr.js"></script>
    <script>
        function vForm(){
            let pwd = document.forms["loginForm"]["pwd"].value;
            if(pwd.length<8){
                document.getElementById("pwd").innerHTML = "Password length must be atleast 8 or greater";
                return false;
            }
            else if(pwd.length>7){
                document.getElementById("pwd").innerHTML = "";
            }
        }
    </script>

    <style>
        * {
            box-sizing: border-box;
            /* border: solid; */
        }

        .nBrand .navbar-nav {
            border: 2px solid rgb(102, 152, 172);
            display: flex;
            height: 2em;
            background-color: rgb(42, 99, 99);
            align-content: center;
            border-radius: 10px;
            flex-wrap: wrap;
        }

        .navlg {
            display: flex;
        }

        .navlg .nav-ite a {
            color: rgb(255, 255, 255) !important;
            font-size: 1.1em;
        }

        .menuBox {
            position: relative;
            width: 100%;
            max-height: 95%;
            overflow-y: scroll;
        }

        .menuBox .navItem {
            width: 100%;
        }

        .CusMenu .navbar-nav {
            height: 85%;
        }

        .CusMenu .card-header {
            border-radius: 0px;
            background-color: rgb(53, 156, 187);
        }

        .CusMenu .subMenu {
            /* border-bottom: 1px solid rgb(43, 126, 151); */
            padding: 0.6em;
            list-style-type: none;
        }

        .CusMenu .card-body {
            padding: 0;
            background-color: rgb(60, 174, 209);
            border-bottom: 1px solid rgb(43, 126, 151);
        }

        .CusMenu .subMenuUL {
            position: relative;
            left: -1em;
        }

        .CusMenu .subMenuUL a {
            color: black;
        }

        .navbar-nav.mNav {
            display: none;
            position: fixed;
            background-color: rgb(53, 156, 187);
            width: 100%;
            z-index: 1;
            top: 2.5em;
            left: 0;
        }

        .navbar {
            background-color: rgb(32, 117, 143, 1);
            height: 3em;
            display: flex;
            align-content: center;
        }

        .loginF {
            padding: 2rem;
            border: 2px solid rgb(37, 149, 184);
            border-radius: 1.5rem;
        }
        .switch{
            font-size: small;
        }
        @media screen and (max-width:768px){
            .loginF{
                border: 0px;
            }
        }
        @media screen and (max-width:768px) {
            .navbar {
                background-color: rgb(53, 156, 187);
                height: 2.5em;
                position: sticky;
                top: 0;
                z-index: 1;
            }

            .navbar-nav {
                top: 2.5em;
            }
        }

        @media screen and (max-width:1000px) {
            .navlg {
                position: relative;
                top: -0.45em;
                padding-right: 0.5em;
                padding-left: 0.5em;
                justify-content: center;
            }

            .navlg .nav-ite a:nth-child(0) {
                padding-right: 0.2em;
            }

            .navlg .nav-ite a:nth-child(1) {
                padding-left: 0.2em;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand text-white" href="../">Brand</a>
        <div class="nBrand d-none d-md-block mr-auto">
            <ul class="navbar-nav">
                <div class="navlg">
                    <li class="nav-ite">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-ite" id="disa">
                        <a class="nav-link" href="#">Disabled</a>
                    </li>
                </div>
            </ul>
        </div>

        <div class="CusMenu d-md-none" id="navbarSupportedContent">

            <div class="menuIcon bars">
                <i class="fas fa-bars fa-2x"></i>
            </div>
            <div class="menuIcon cross">
                <i class="fa fa-times fa-2x" aria-hidden="true">
                </i>
            </div>
            <ul class="navbar-nav mNav h-100">

                <div class="menuBox">
                    <div class="accordion" id="accordionExample">
                        <div class="card border-0">
                            <div class="card-header py-0" id="headingOne">
                                <h5 class="mb-0">
                                    <div class="navItem py-3" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Link to ....
                                    </div>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="subMenuUL">
                                        <li class="subMenu"><a href="#">Phd</a></li>
                                        <li class="subMenu"><a href="#">MBA</a></li>
                                        <li class="subMenu"><a href="#">BTech</a></li>
                                        <li class="subMenu"><a href="#">MCA</a></li>
                                        <li class="subMenu"><a href="#">Msc</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0">
                            <div class="card-header py-0" id="headingTwo">
                                <h5 class="mb-0">
                                    <div class="navItem py-3" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Cetegory
                                    </div>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="subMenuUL">
                                        <li class="subMenu"><a href="#">Phd</a></li>
                                        <li class="subMenu"><a href="#">MBA</a></li>
                                        <li class="subMenu"><a href="#">BTech</a></li>
                                        <li class="subMenu"><a href="#">MCA</a></li>
                                        <li class="subMenu"><a href="#">Msc</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0">
                            <div class="card-header py-0" id="headingThree">
                                <h5 class="mb-0">
                                    <div class="navItem py-3" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Other link
                                    </div>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="subMenuUL">
                                        <li class="subMenu"><a href="#">Phd</a></li>
                                        <li class="subMenu"><a href="#">MBA</a></li>
                                        <li class="subMenu"><a href="#">BTech</a></li>
                                        <li class="subMenu"><a href="#">MCA</a></li>
                                        <li class="subMenu"><a href="#">Msc</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0">
                            <div class="card-header py-0" id="headingFour">
                                <h5 class="mb-0">
                                    <div class="navItem py-3" type="button" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Link to ....
                                    </div>
                                </h5>
                            </div>

                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="subMenuUL">
                                        <li class="subMenu"><a href="#">Phd</a></li>
                                        <li class="subMenu"><a href="#">MBA</a></li>
                                        <li class="subMenu"><a href="#">BTech</a></li>
                                        <li class="subMenu"><a href="#">MCA</a></li>
                                        <li class="subMenu"><a href="#">Msc</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0">
                            <div class="card-header py-0" id="headingFive">
                                <h5 class="mb-0">
                                    <div class="navItem py-3" type="button" data-toggle="collapse"
                                        data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        About
                                    </div>
                                </h5>
                            </div>

                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="subMenuUL">
                                        <li class="subMenu"><a href="#">Phd</a></li>
                                        <li class="subMenu"><a href="#">MBA</a></li>
                                        <li class="subMenu"><a href="#">BTech</a></li>
                                        <li class="subMenu"><a href="#">MCA</a></li>
                                        <li class="subMenu"><a href="#">Msc</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>

        </div>
        <form class="form-inline d-none d-md-block">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>

    <div class="container col-12 col-md-5 col-lg-4 pt-md-5">
        <div class="loginF">
            <form name="loginForm" method="POST" action="./" onsubmit="return vForm()">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="userID" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label for="Password1">Password</label>
                    <div>
                        <input type="password" name="pwd" class="pwdd form-control" id="Password1" placeholder="Password" required>
                        <i class="far fa-eye" id="togglePassword" style="float:right; margin-top:-1.6em;margin-right:0.4em; cursor: pointer;"></i>
                    </div>
                    <div class="mt-1 bg-danger text-white">
                        <div class="pl-2" id="pwd"></div>
                    </div>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <!-- login successfull element -->
                <?php
                    $sTag = '<div class="mb-2 py-2 rounded bg-success text-white">
                    <div class="pl-2" id="loginSuc">Login Successfull</div>
                    </div>';
                    $fTag = '<div class="mb-2 py-2 rounded bg-danger text-white">
                    <div class="pl-2" id="loginSuc">Login Failed</div>
                    </div>';
                    require("db.php"); 
                    if(isset($_POST["userID"])&&isset($_POST["pwd"])){
                        $ssql =  $conn->prepare("SELECT emailID, pwd, username, noOfLogin FROM user WHERE emailID=? AND pwd=?");
                        $ssql->bind_param("ss",$emailID,$pwd);

                        $emailID = $_POST["userID"];
                        $pwd = $_POST["pwd"];
                        
                        $ssql->execute();

                        $result = $ssql->get_result();
                        
                        if($result->num_rows == 1){
                            
                            $row = $result->fetch_assoc();
                            $username = filter_var($row["username"], FILTER_SANITIZE_STRING);
                            $emailid = filter_var($row["emailID"], FILTER_SANITIZE_STRING);
                            
                            $userinfo = ["userinfo"=>["isLog"=>true, "username"=>$username,"emailid"=>$emailid]];
                            $_SESSION["userinfo"] = $userinfo;
                            echo '<script>setTimeout(()=>{window.location = "../"},1000);</script>';
                            echo $sTag;
                            $no_of_login = ++$row["noOfLogin"];
                            $ssql = $conn->prepare("UPDATE user SET noOfLogin=? WHERE emailID = ?");
                            $ssql->bind_param("is", $no_of_login, $row["emailID"]);
                            $ssql->execute();
                        }
                         else {
                            echo $fTag;
                        }
                    }
                ?>
                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
        <div class="row justify-content-center switch pt-2 pb-5">
            Are you new?&nbsp <a href="../signup">Signup</a>
        </div>
    </div>
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#Password1');
    
        togglePassword.addEventListener('click', function (e) {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        this.classList.toggle('fa-eye-slash');
});
    </script>
</body>


</html>