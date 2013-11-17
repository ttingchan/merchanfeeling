<table style="background-color: #532371;" class="naviTable">
        <tr style="height: 40px;">
            <td style="width: 550px;">
                <a href="Homepage.php?lang=<?php echo $_SESSION['lang']; ?>" class="navi"> <?php echo _('Home');?>  </a>
                <a href="ListCompany.php" class="navi"> <?php echo _('Company');?> </a>
                <a href="ListContact.php" class="navi"> <?php echo _('Contact');?>  </a>
                <a href="__showactivities.php" class="navi"> <?php echo _('Activity');?>  </a>
            </td>
            <td style="width: 450px;" align="right">
                <div class="searchdiv" >
                    <div id="searchTool" class="searchTool">
                        <form align="right">
                            <span class="choose" hoverable="true">
                            <span class="chooseList"><?php echo _('all');?></span>
                            <div class="choosePop">
                                <ul>
                                    <li><a href="#" value="0"><?php echo _('all');?></a></li>
                                    <li><a href="#" value="1"><?php echo _('company');?></a></li>
                                    <li><a href="#" value="2"><?php echo _('contact');?> </a></li>
                                    <li><a href="#" value="3"><?php echo _('activity');?> </a></li>
                                </ul>
                            </div>
                            </span>
                            <input class="searchTextInit" placeholder="<?php echo _('Enter your search term...');?> " type="text" value="" name="search" id="search">
                            <input class="searchBtn" type="button" value="<?php echo _('search');?>">
                        </form>
                    </div>
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
