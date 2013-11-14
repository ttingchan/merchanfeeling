<iframe src="./uploadimg.php"></iframe>
<table class="headerBar" >
        <tr>
            <td class="logobar" style="width: 860px;">
                <a href="Homepage.php?lang=<?php echo ($_SESSION['lang']); ?>" ><image  class="logo" src="image/logo1-1.png"/></a>  
            </td>
            <td style="width: 80px;" align="center" style="margin-right: 10px;">
                <div class="settings"><a href="#"><?php echo _("settings");?></a></div>
            </td>
            <td style="width: 60px;" align="right" style="margin-right: 5px;"> 
                <div class="profileRep">
                    <a herf="#" ><image class="profile" src="image/profile.png"/></a>
                </div>
                <div class="showRep">
                    <table>
                        <tr>
                            <td width="80px">
                                <div>
                                    <a class="profileLink" >
                                    <image class="image" src="./image/profile.png">
                                    <div class="changeImage"><span>change</span></div>
                                    </a>
                                </div>
                            </td>
                            
                            <td class="profileInfo" width="200px">
                                <a href="#"><p><?php echo $_SESSION['username']; ?></p></a>
                                <p><?php echo (empty($_SESSION['mail']) ? "null" : $_SESSION['mail']); ?></p>
                                <a href="./function/login.php?action=logout"><?php echo _("Logout"); ?></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>       

<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
