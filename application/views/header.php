<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>" />		
	<link rel="stylesheet" href="<?php echo base_url("assets/css/font-awesome.min.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/sweetalert.css"); ?>" />
    <script language="Javascript" type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.1.1.min.js"); ?>"></script>
<style>
    .button span {
      cursor: pointer;
      display: inline-block;
      position: relative;
      transition: 0.5s;
    }

    .button span:after {
      content: '»';
      position: absolute;
      opacity: 0;
      top: 0;
      right: -20px;
      transition: 0.5s;
    }
    .darken{
        filter: brightness(50%);
        -webkit-filter: brightness(50%); 
    }
    .jumbotron{
        background-image: url('<?php echo base_url("assets/media/home1.png"); ?>');
        background-size: cover;
    }
    .bg-grey{
        background-color: #f0f0f0;
    }
    /* Add a dark background color with a little bit see-through */ 
    .navbar {
        margin-bottom: 0;
        background-color: #2d2d30;
        border: 0;
        font-size: 11px !important;
        letter-spacing: 4px;
        opacity:0.9;
    }

    /* Add a gray color to all navbar links */
    .navbar li a, .navbar .navbar-brand { 
        color: #d5d5d5 !important;
    }

    /* On hover, the links will turn white */
    .navbar-nav li a:hover {
        color: #fff !important;
    }

    /* The active link */
    .navbar-nav li.active a {
        color: #fff !important;
        background-color:#29292c !important;
    }

    /* Remove border color from the collapsible button */
    .navbar-default .navbar-toggle {
        border-color: transparent;
    }

    /* Dropdown */
    .open .dropdown-toggle {
        color: #fff ;
        background-color: #555 !important;
    }

    /* Dropdown links */
    .dropdown-menu li a {
        color: #000 !important;
    }

    /* On hover, the dropdown links will turn red */
    .dropdown-menu li a:hover {
        background-color: red !important;
    }
    input[type=text]{
        border-radius: 0px;
    }
    input[type=password]{
        border-radius: 0px;
    }
</style>
    
    <link href="https://fonts.googleapis.com/css?family=Dosis|Raleway" rel="stylesheet">

</head>

<body>
<!--NAVBAR-->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">Absensi SMK Telkom Malang</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><i class="fa fa-fw fa-home"></i>BERANDA</a></li>
          <?php
          if(isset($_SESSION['username'])){
           if($_SESSION['username'] == 'admin'){
                echo '<li><a href="/ci/master/home"><i class="fa fa-fw fa-database"></i>MANAJEMEN</a></li>';
                echo '<li><a href="/ci/logout"><i class="fa fa-fw fa-toggle-left"></i>LOGOUT</a></li>';   
            }
            else
                echo '<li><a href="/ci/logout"><i class="fa fa-fw fa-toggle-left"></i>LOGOUT</a></li>';   
          }
          ?>
      </ul>
    </div>
  </div>
</nav>