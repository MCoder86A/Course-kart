<?php
    session_start();
    $isLogin = false;
    if(isset($_SESSION["userinfo"])){
        $isLogin = $_SESSION["userinfo"]["userinfo"]["isLog"]===true ? true : false;
        $username = $_SESSION["userinfo"]["userinfo"]["username"];
    }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="https://mrinmoy01.w3spaces.com/robo_fav.png?version=1" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="./style.css?version=0.0015">

    <title>RoboThon</title>
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
    <script src="./scr.js"></script>
    
</head>

<body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand text-white" href="#">Brand</a>
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
                <?php
                    if($isLogin){
                        $lout_tag = '<div class="logoutSess">
                        <div class="ml-2 welcome d-md-none">Welcome ' . $username .'</div>
                        </div>
                        <div class="mt-3 p_logout">
                            <div class="px-2 py-1 logout">LogOut</div>
                        </div>';
                        echo $lout_tag;
                    }
                ?>

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
        <?php
        
            if($isLogin){
                echo '<div class="dSess d-none d-md-flex">
                <div class="dlogoutSess">
                    <div class="welcome">Welcome ' . $username .'</div>
                </div>
                <div class="p_logout">
                    <div class="px-2 py-1 logout">Logout</div>
                </div>
            </div>';
            }
        ?>
    </nav>



    <div class="fluid-container d-none d-lg-inline">
        <div class="row mx-0 p-0 stick">
            <div class="col mx-0 my-0 p-0">
                <div class="dropdown w-100 h-100 p-0">
                    <button class="drop btn btn-secondary dropdown-toggle w-100 h-100 px-0 py-0" onmouseover=onHov(this)
                        style="box-shadow:none; border: 0px; border-radius: 0px;" type="button" id="dropdownMenuButton1"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown button
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Option1</a>
                        <a class="dropdown-item" href="#">Option2</a>
                        <a class="dropdown-item" href="#">Oprion3</a>
                    </div>
                </div>
            </div>
            <div class="col mx-0 my-0 p-0">
                <div class="dropdown w-100 h-100 p-0">
                    <button class="drop btn btn-secondary dropdown-toggle w-100 h-100 px-0 py-0" onmouseover=onHov(this)
                        style="box-shadow:none; border: 0px; border-radius: 0px;" type="button" id="dropdownMenuButton2"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown button
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Option1</a>
                        <a class="dropdown-item" href="#">Option2</a>
                        <a class="dropdown-item" href="#">Oprion3</a>
                    </div>
                </div>
            </div>
            <div class="col mx-0 my-0 p-0">
                <div class="dropdown w-100 h-100 p-0">
                    <button class="drop btn btn-secondary dropdown-toggle w-100 h-100 px-0 py-0" onmouseover=onHov(this)
                        style="box-shadow:none; border: 0px; border-radius: 0px;" type="button" id="dropdownMenuButton3"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown button
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Option1</a>
                        <a class="dropdown-item" href="#">Option2</a>
                        <a class="dropdown-item" href="#">Oprion3</a>
                    </div>
                </div>
            </div>
            <div class="col mx-0 my-0 p-0">
                <div class="dropdown w-100 h-100 p-0">
                    <button class="drop btn btn-secondary dropdown-toggle w-100 h-100 px-0 py-0" onmouseover=onHov(this)
                        style="box-shadow:none; border: 0px; border-radius: 0px;" type="button" id="dropdownMenuButton4"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown button
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Option1</a>
                        <a class="dropdown-item" href="#">Option2</a>
                        <a class="dropdown-item" href="#">Oprion3</a>
                    </div>
                </div>
            </div>
            <div class="col mx-0 my-0 p-0">
                <div class="dropdown w-100 h-100 p-0">
                    <button class="drop btn btn-secondary dropdown-toggle w-100 h-100 px-0 py-0" onmouseover=onHov(this)
                        style="box-shadow:none; border: 0px; border-radius: 0px;" type="button" id="dropdownMenuButton5"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown button
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Option1</a>
                        <a class="dropdown-item" href="#">Option2</a>
                        <a class="dropdown-item" href="#">Oprion3</a>
                    </div>
                </div>
            </div>
            <div class="col mx-0 my-0 p-0">
                <div class="dropdown w-100 h-100 p-0">
                    <button class="drop btn btn-secondary dropdown-toggle w-100 h-100 px-0 py-0" onmouseover=onHov(this)
                        style="box-shadow:none; border: 0px; border-radius: 0px;" type="button" id="dropdownMenuButton6"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown button
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Option1</a>
                        <a class="dropdown-item" href="#">Option2</a>
                        <a class="dropdown-item" href="#">Oprion3</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="d-none d-sm-block fluid-container sld">
        <div class="ss">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block" src="https://mrinmoy01.w3spaces.com/w1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="https://mrinmoy01.w3spaces.com/w2.jpg" alt="Second slide">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile wallper -->
    <div class="d-sm-none fluid-container Msld">
        <div class="back">
            <div class="box1">
                <img class="i" src="https://mrinmoy01.w3spaces.com/w2.jpg" alt="First slide">
            </div>
            <div class="box2">
                <img class="i" src="https://mrinmoy01.w3spaces.com/w1.jpg" alt="Second slide">
            </div>
        </div>
    </div>
    <!-- <div class="p_msgCongrates">
        <div class="msgCongrates">
                <div class="congrates <?php if($isLogin)echo "p-5"?>">
                    <?php
                        // if($isLogin){
                        //     echo "Hey , ".$_SESSION["userinfo"]["userinfo"]["username"]." Congrates you have been LOGin";
                        // }
                    ?>
                </div>
        </div>
    </div> -->
    <!-- <div class="buycourse">
        <div class="courselist <?php if($isLogin)echo "p-5"?>">
            <?php
                if($isLogin){
                    echo '';
                }
            ?>
        </div>
    </div> -->
    <?php
        $course = '<div class="fluid-container CCou">
            <div class="course">
                <div class="rect">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Zero to hero English course</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Rs 500</h6>
                            <a href="/payment/public/checkout.php?pid=c1">Buy</a>
                        </div>
                    </div>
                </div>

                <div class="rect">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Ultimate English course</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Rs 800</h6>
                            <a href="/payment/public/checkout.php?pid=c2">Buy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
        if($isLogin){
            echo $course;
        }
    ?>

    <div class="login">
        <div class="row d-none d-sm-flex">
            <div class="col px-1">
                <div class="box">
                    <a href="./login">Login</a>
                </div>
            </div>
            <div class="col px-1">
                <div class="box">
                    <a href="./signup">SignUp</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mLog d-sm-none">
        <div class="mLogin">
            <div class="log">
                <div class="box">
                    <a href="./login">Login</a>
                </div>
            </div>
            <div class="sign">
                <div class="box">
                    <a href="./signup">SignUp</a>
                </div>
            </div>
        </div>
    </div>
    <?php
    
        if($isLogin){
            echo '<script>document.getElementsByClassName("login")[0].classList.add("d-none")</script>';
            echo '<script>document.getElementsByClassName("mLogin")[0].classList.add("d-none")</script>';
        }
        if(!$isLogin){
            echo '<script>document.getElementsByClassName("login")[0].classList.remove("d-none")</script>';
            echo '<script>document.getElementsByClassName("mLogin")[0].classList.remove("d-none")</script>';
        }
    ?>
    <div class="container CRev">
        <div class="review">
            <div class="rect">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <img src="https://mrinmoy01.w3spaces.com/face.png" alt="" class="face">
                        <h5 class="card-title">Raghu</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Software Developer</h6>
                        <p class="card-text">Working culture is very good here</p>
                    </div>
                </div>
            </div>

            <div class="rect">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <img src="https://mrinmoy01.w3spaces.com/face.png" alt="" class="face">
                        <h5 class="card-title">Rohit</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Web Developer</h6>
                        <p class="card-text">Follow me if you want to master web development</p>
                    </div>
                </div>
            </div>
            <div class="rect">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <img src="https://mrinmoy01.w3spaces.com/face.png" alt="" class="face">
                        <h5 class="card-title">Vibhav</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Manager</h6>
                        <p class="card-text">Hi this is the best company I have ever joined</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="partner">
        <div class="header">
            <h5>Partner Company</h5>
        </div>
        <div class="container brand pb-5 d-flex justify-content-center">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner d-none d-md-flex">
                    <div class="carousel-item active">
                        <div class="row partner-r">
                            <div class="col-3">
                                <div class="logo">
                                    <img src="https://mrinmoy01.w3spaces.com/f.png" alt="">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="logo">
                                    <img src="https://mrinmoy01.w3spaces.com/a.png" alt="">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="logo">
                                    <img src="https://mrinmoy01.w3spaces.com/g.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row partner-r">
                            <div class="col-3">
                                <div class="logo">
                                    <img src="https://mrinmoy01.w3spaces.com/ap.png" alt="">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="logo">
                                    <img src="https://mrinmoy01.w3spaces.com/android.png" alt="">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="logo">
                                    <img src="https://mrinmoy01.w3spaces.com/n.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FOr Mobile -->
                <div class="mPartner pb-5 pt-1 d-md-none">
                    <div class="rect p-1">
                        <div class="img">
                            <img src="https://mrinmoy01.w3spaces.com/g.png" alt="">
                        </div>
                    </div>
                    <div class="rect p-1">
                        <div class="img">
                            <img src="https://mrinmoy01.w3spaces.com/f.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer" id="footer">
            <div class="list">
                <div><a href="#footer">Contact us</a></div>
                <div><a href="#footer">help</a></div>
                <div><a href="#footer">Product</a></div>
                <div><a href="#footer">Business</a></div>
                <div><a href="#footer">Our Journey</a></div>
            </div>
            <div class="about px-2 py-1">
                <a href="#footer">About us</a>
            </div>
        </div>
    </footer>
</body>


</html>