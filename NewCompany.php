<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Company</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="image/merchanfeeling.ico" type="image/x-icon" />
<link rel="shortcut icon" href="image/merchanfeeling.ico" type="image/x-icon" />
<script src="js/modernizr.custom.js"></script>
</head>
<body>
    <?php
       include 'layout/header.php';
       include 'layout/navigationBar.php';
        ?>     
   
    <p>test</p>
    <div class="content">
        <form method="get" class="create">
            <fieldset>
                <legend><b>Create a Company</b></legend>
                <table class="createForm">
                    <tr>
                        <td width="100px" height="40px"><b>Name:</b></td>
                        <td height="40px"><input class="inputForm" type="text" name="comName" placehoder="input a name"/></td>
                    </tr>

                    <tr>
                        <td><b>Parent company:</b></td>
                        <td><input class="inputForm" type="text" name="parCom" /></td>
                    </tr>

                    <tr>
                        <td><b>Country</b></td>
                        <td><input class="inputForm" type="text" name="comCountry" /></td>
                    </tr>

                    <tr>
                        <td><b>City</b></td>
                        <td><input class="inputForm" type="text" name="comCity"/></td>
                    </tr>

                    <tr>
                        <td><b>Zip</b></td>
                        <td><input class="inputForm" type="text" name="comZip"/></td>
                    </tr>

                    <tr>
                        <td><b>Address</b></td>
                        <td><input class="inputForm" type="text" name="comAdd"/></td>
                    </tr>

                    <tr>
                        <td><b>Tel</b></td>
                        <td><input class="inputForm" type="text" name="comTel" /></td>
                    </tr>

                    <tr>
                        <td><b>Website</b></td>
                        <td><input class="inputForm" type="text" name="comWeb"/></td>
                    </tr>

                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <input class="buttonForm" type="button" name="save" value="save" />
                            <input class="buttonForm" type="button" name="cancel" value="cancel" />
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>

</body>
</html>
<?php

?>

