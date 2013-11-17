<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">   
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Personal Info</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/styles1.css" rel="stylesheet" type="text/css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="js/activities.js"></script>
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>">
    <script src="js/activities.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/profileRep.js"></script>
    <link rel="icon" href="image/merchanfeeling.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="image/merchanfeeling.ico" type="image/x-icon" />
</head>
<body>
    <?php
    session_start();
    require 'international/localization.php';
    include 'layout/lanBar.php';
    include 'layout/header.php';
    include 'layout/navigationBar.php';
    ?> 
    <div class="container">

<?php include 'buthow/showPersonal.php' ?>

<?php include 'buthow/End.php' ?>