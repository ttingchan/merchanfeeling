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
        <div>
        <div class="ModePart" id="companyPart">
            <div class="spanDiv">
                <a class="modeLink" href="ListCompany.php?lang=<?php echo $_SESSION['lang']; ?>"><?php echo _("Company") ?></a>   
                <img class="comDelete" src="image/delete.png"/>
            </div>
            <div>
                <table>
                    <tr>
                        <td width="180" align="center">
                            <a>
                                <img class="modeImg" src="image/company.jpg"/>
                            </a>
                        </td>
                        <td width="300" align="center">
                            <table>
                                <tr>
                                    <td>
                                        <a class="modeLink" href="NewCompany.php?lang=<?php echo $_SESSION['lang']; ?>"><?php echo _("Create a new company") ?></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="modeLink" href="ListCompany.php?lang=<?php echo $_SESSION['lang']; ?>"><?php echo _("List current company") ?></a>
                                    </td>
                                </tr>
                            </table>                        
                        </td>
                    </tr>
                    <tr>             
                        <td align="right" colspan="2">
                            <a class="modeLink" href="ListCompany.php?lang=<?php echo $_SESSION['lang']; ?>"><?php echo _("more...") ?></a></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="ModePart" id="contactPart">
            <div class="spanDiv">
                <a class="modeLink" href="#"><?php echo _("Contact") ?></a>
                <img class="conDelete" src="image/delete.png"/>
            </div>  
            <div>
                <table>
                    <tr>
                        <td width="180" align="center">
                            <a>
                                <img class="modeImg" src="image/contact.jpg"/>
                            </a>
                        </td>
                        <td width="300" align="center">
                            <table>
                                <tr>
                                    <td>
                                        <a class="modeLink" href="#"><?php echo _("Create a new Contact") ?></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="modeLink" href="#"><?php echo _("List current contacts") ?></a>
                                    </td>
                                </tr>
                            </table>                                             
                        </td>
                    </tr>
                    <tr>             
                        <td align="right" colspan="2">
                            <a class="modeLink" href="#"><?php echo _("more...") ?></a></td>
                    </tr>
                </table>
            </div>
        </div>
        
        <div class="ModePart" id="activityPart">
            <div class="spanDiv">
                <a class="modeLink" href="#"><?php echo _("Activity") ?></a>
                <img class="actDelete" src="image/delete.png"/>
            </div>
            <div>
                <table>
                    <tr>
                        <td width="180" align="center">
                            <a>
                                <img class="modeImg" src="image/activity.jpg"/>
                            </a>
                        </td>
                        <td width="300" align="center">
                            <table>
                                <tr>
                                    <td>
                                        <a class="modeLink" href="#"><?php echo _("Create a new Activity") ?></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="modeLink" href="#"><?php echo _("List current activity") ?></a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>             
                        <td align="right" colspan="2">
                            <a class="modeLink" href="#"><?php echo _("more...") ?></a></td>
                    </tr>
                </table>
            </div>
        </div>
            <div>
                
            </div>
        </div>
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

