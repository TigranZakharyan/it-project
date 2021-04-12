<?php session_start();

if(!isset($_COOKIE['lang'])){

  $lang = "am";

  setcookie("lang",$lang,time()+60*60*24*30);

}else{

  $lang = $_COOKIE['lang'];

}

include($lang.".php");

include("conf/connect.php");

?>

<!DOCTYPE html>

<html lang="en">

<head>

<!-- basic -->

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- mobile metas -->

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="viewport" content="initial-scale=1, maximum-scale=1">

<!-- site metas -->

<title>It.Next - IT Service Responsive Html Theme</title>

<meta name="keywords" content="">

<meta name="description" content="">

<meta name="author" content="">

<!-- site icons -->

<link rel="icon" href="images/fevicon/fevicon.png" type="image/gif" />

<!-- bootstrap css -->

<link rel="stylesheet" href="css/bootstrap.min.css" />

<!-- Site css -->

<link rel="stylesheet" href="css/style.css" />

<!-- responsive css -->

<link rel="stylesheet" href="css/responsive.css" />

<!-- colors css -->

<link rel="stylesheet" href="css/colors1.css" />

<!-- custom css -->

<link rel="stylesheet" href="css/custom.css" />

<!-- wow Animation css -->

<link rel="stylesheet" href="css/animate.css" />

<!-- revolution slider css -->

<link rel="stylesheet" type="text/css" href="revolution/css/settings.css" />

<link rel="stylesheet" type="text/css" href="revolution/css/layers.css" />

<link rel="stylesheet" type="text/css" href="revolution/css/navigation.css" />

<!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

      <![endif]-->

</head>

<body id="default_theme" class="it_service">

<!-- loader -->

<div class="bg_load"> <img class="loader_animation" src="images/loaders/loader_1.png" alt="#" /> </div>

<!-- end loader -->

<!-- header -->

<header id="default_header" class="header_style_1">

  <!-- header top -->

  <div class="header_top">

    <div class="container">

      <div class="row">

        <div class="col-md-8">

        </div>

        <div class="col-md-4 right_section_header_top">

          <div class="float-left">

            <div class="social_icon">

              <ul class="list-inline">

                <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>

                <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>

                <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>

                <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>

                <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>

              </ul>

            </div>

          </div>

          <div class="float-right">

            <div class="make_appo"> 

                <?php if(!isset($_SESSION['user'])){ ?>

                <a class="btn white_btn" href="sign.php"><?=$info['menu2']?></a> </div>

                <?php }else{ ?>

                <?php 

                $url = $_SERVER['PHP_SELF'];

                $arr = explode("/",$url);

                if(end($arr)!='account.php'){ ?>

                <a class="btn white_btn" href="account.php"><?=$info['menu1']?></a>

                <?php } else { ?>

                  <a class="btn white_btn" href="exit.php"><?=$info['menu3']?></a>

                <?php } ?>

                <?php } ?>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

  <!-- end header top -->

  <!-- header bottom -->

  <div class="header_bottom">

    <div class="container">

      <div class="row">

        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">

          <!-- logo start -->

          <div class="logo"> <a href="index.php"><img src="images/logos/it_logo.png" alt="logo" /></a> </div>

          <!-- logo end -->

        </div>

        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">

          <!-- menu start -->

          <div class="menu_side">

            <div id="navbar_menu">

              <ul class="first-ul">

                <li> <a class="active" href="index.php"><?=$info['menu4']?></a> </li>

                <li><a href="about.php"><?=$info['menu5']?></a></li>

                <li><a href="faq.php"><?=$info['menu6']?></a></li>

                <li><a href="contacts.php"><?=$info['menu7']?></a></li>

                <li><a href="chat/index.php">Chat</a></li>

                <li><a href="lang.php?l=am">Հայ</a></li>

                <li><a href="lang.php?l=ru">Рус</a></li>

                <li><a href="lang.php?l=en">Eng</a></li>

              </ul>

            </div>

          </div>

          <!-- menu end -->

        </div>

      </div>

    </div>

  </div>

  <!-- header bottom end -->

</header>

<!-- end header -->