<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">   
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="js/activities.js"></script>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>">
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
        <div id="CreateCom">
                <div><b>Create</b></div>
                <a href="#"><div class="button">New Contact</div></a>
        </div>
        <div class="comContent">
                       
            <div>
                <form id="Comfilter" name="Comfilter" method="post">
                    <div>
                        <div class="inline">
                            <b>Keyword:</b>
                            <input type="text" name="keywords" class="text1">
                        </div>
                        <a href="#"><div class="button inline">Apply</div></a>
                        <a href="#"><div class="button inline flip">Advanced</div></a>
                    </div>
                    
                    <div class="collapse1">
                        <div class="box1">
                            <div><input type="checkbox" id="param-1"><label for="param-1"><b>All Contacts</b></label></div>
                            <div><input type="checkbox" id="param-1-1"><label for="param-1-1">My Contacts</label></div>
                            <div><input type="checkbox" id="param-1-2"><label for="param-1-2">New this week</label></div>
                            <div><input type="checkbox" id="param-1-3"><label for="param-1-3">New last week</label></div>
                        </div>           
                    </div>
                </form>
            </div>
            
            <div class="comMain">
                <div><a href="#"><div class="button"><b>Delete</b></div></a></div>
                
                <table id="company" class="List">
                    <tr>
                        <th width="65"></th>
                        <th><input type="checkbox" name="check0"></th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>E-mail</th>
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td><input type="checkbox" name="record1"></td>
                        <td>Pierre</td>
                        <td>076091111</td>
                        <td>tting@gmail.com</td>
                    </tr>                   
                </table>                                
            </div>
        </div>       
    </body>

