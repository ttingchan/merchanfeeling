<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Contact</title>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/styles1.css" rel="stylesheet" type="text/css" />
        <link rel="icon" href="image/merchanfeeling.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="image/merchanfeeling.ico" type="image/x-icon" />
        <script src="js/modernizr.custom.js"></script>
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>">
        <script src="js/modernizr.custom.js"></script>
        <script src="js/profileRep.js"></script>
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
            <div id="Lower">
                <div class="createSide">
                    <div><b>Create</b></div>
                    <div class="button">New Contact</div>
                </div>
                <div class="Main">
                    <form method="get" class="create">

                        <div><h2>Create a Contact</h2></div>
                        <table class="detail">
                            <tr>
                                <td class="tdl">First Name</td>
                                <td><input class="text1" type="text" name="comName" placehoder="input a name"/></td>
                            </tr>

                            <tr>
                                <td class="tdl">Last Name</td>
                                <td><input class="text1" type="text" name="comName" placehoder="input a name"/></td>
                            </tr>

                            <tr>
                                <td class="tdl">Department</td>
                                <td><input class="text1" type="text" name="parCom" /></td>
                            </tr>

                            <tr>
                                <td class="tdl">Tel</td>
                                <td><input class="text1" type="text" name="comCountry" /></td>
                            </tr>

                            <tr>
                                <td class="tdl">Mobile</td>
                                <td><input class="text1" type="text" name="comCountry" /></td>
                            </tr>

                            <tr>
                                <td class="tdl">Email</td>
                                <td><input class="text1" type="text" name="comCity"/></td>
                            </tr>

                            <tr>
                                <td class="tdl">Twitter</td>
                                <td><input class="text1" type="text" name="comZip"/></td>
                            </tr>

                            <tr>
                                <td class="tdl">Skype</td>
                                <td><input class="text1" type="text" name="comAdd"/></td>
                            </tr>
                            <tr>
                                <td class="tdl">Description</td>
                                <td><textarea></textarea></td>
                            </tr>
                        </table>
                        <div>
                            <div class="button inline"  name="save" value="save">Save</div>
                            <div class="button inline" name="cancel" value="cancel">Cancel</div>
                        </div> 

                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

