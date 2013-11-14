<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home Page</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="image/merchanfeeling.ico" type="image/x-icon" />
<link rel="shortcut icon" href="image/merchanfeeling.ico" type="image/x-icon" />
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>">
<script src="js/modernizr.custom.js"></script>
<script src="js/profileRep.js"></script>
</head>
<body>
   <?php
       session_start();
       require ("international/localization.php");
       include 'layout/lanBar.php';
       include 'layout/header.php';
       include 'layout/navigationBar.php';
        ?> 
    
    <div class="content">
        <div class="companyPart">
            <p>company</p>
            <input type="file" name="image" id="image"  />
        </div>
        <div class="contactPart"></div>
        <div class="activityPart"></div>
        <div></div>
    </div>
    <!--
    <script src="js/classie.js"></script>
    <script src="js/uisearch.js"></script>
    <script>
            new UISearch( document.getElementById( 'Search' ) );
    </script>
    -->
</body>
</html>
<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

