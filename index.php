<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Merchanfeeling</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/styles1.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="image/merchanfeeling.ico" type="image/x-icon" />
<link rel="shortcut icon" href="image/merchanfeeling.ico" type="image/x-icon" />
</head>
<body>
    <?php
        session_start();
        require ("international/localization.php");
    ?>
    <div>
        <?php
            include 'layout/lanBar.php';
        ?>
        
        <table class="loginPanel">
            <?php
                if(isset($_SESSION['logState']))
                {
                    if($_SESSION['logState'] != 1)
                    {
                        ?>
            <tr>
                <td width ="300px" colspan="3" style="text-align: center;">
                    <div class="failLog">
                        <?php
                            if($_SESSION['logState'] == 0)
                                echo _("incorrect user mail or password.");
                            else if($_SESSION['logState'] == 2)
                                echo _("empty user mail.");
                            if($_SESSION['logState'] == 3)
                                echo _("empty password.");
                        ?>
                    </div>
                </td>
            </tr>
            <?php
                    }
                }
            ?>
            <tr >
                <td width ="300px" colspan="3" style="text-align: center;">
                   <div id="cerceve">
                       <div class="login">
                            <div class="text" style="float:left"><?php echo _("Login Form"); ?></div>
                       </div>
                       <div class="formbody">
                            <form action="function/login.php?action=login" method="post">
                            <input type="text" name="username" placeholder=<?php echo _("Username"); ?> class="text" style="background:url(image/username.png) no-repeat;" />
                            <input type="password" name="password" placeholder="••••••••••••" class="text" style="background:url(image/password.png) no-repeat;" />
                            <input type="submit" value=<?php echo _("Sign in"); ?> class="submit" style="background-color:  #532371" />
                            <a href="PasswordFound.php"><?php echo _("Forget your password?") ?></a> 
                            </form>
                       </div>
                   </div>  
                </td>
                <td></td>
            </tr>
        </table>     
    </div>
</body>
</html>
