<style>
.uploadimg{
    width: 800px;
    height: 500px;
    background-color: white;
    border-style: none;
    margin-left: 200px;
    margin-top: 100px;
}

.photoTxt{
    font-weight: bold;
    font-size: x-large;
    width: 800px;
    text-align: left;
    border-bottom: 1px dotted rgb(83,35,113);
}
span{
    font-weight: bold;
    font-size: x-large;
    text-align: center;
    color: rgb(83,35,113);
}
.photoZone{
    margin-top: 30px;
    border: 4px dashed rgba(83,35,113,0.6);
    width: 600px;
    height: 380px;
    margin-left: 100px;
}
.forImg{
    padding-left: 120px;
}

.imageButton{
    display: block;
    height: 40px;
    width: 300px;
    font-size: 20px;
}

div img{
    background-image: url(image/window-close.png);
    width: 20px;
    height: 20px;
    float: right;
    margin-top: -7px;
}
.imageFile{
    
}
</style>
<?php 
    require 'international/localization.php';
?>
<div class="uploadimg">
    <div>
        <table>
            <tr>
                <td height="40" weight="800">
                    <div class="photoTxt">
                        <span><?php echo _("Select Photo"); ?></span>
                        <img class="winClose" src="image/window-close.png"/>
                    </div>
                </td>
            </tr>
            <tr>
                <td rowspan="12">
                    <div class="photoZone">
                        <table>
                            <tr>
                                <td class="forImg" >
                                    <span>Choose your photo here</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="forImg">
                                    <form name="imgUp"> 
                                        <input type="file" name="picpath" id="picpath" style="display:none;" onChange="document.imgUp.path.value=this.value"> 
                                        <input type="button" class="imageButton" value="Select a photo from computer" onclick="document.imgUp.picpath.click()"> 
                                    </form>                                   
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>
