
<table>
            <tr>
                <td width ="300px" colspan="3" style="text-align: right;">
                    <div class="show">
                        <a href="?lang=fr_FR"><img src="image/france.jpg" /></a>
                        <a href="?lang=en_US"><img src="image/UK.gif" /></a>
                        <a href="?lang=zh_CN"><img src="image/china.jpg"/></a>
                        <a href="#"><img src="image/italy.gif"/></a>
                       <?php
                        if(isset($_GET['lang']))
                            $_SESSION['lang'] = $_GET['lang'];
                       // echo "\$session['lang']".$_SESSION['lang']."\n";
                       ?>
                    </div>
                </td>
            </tr>
        </table>
<?php
//echo $_GET['lang'];
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
