
<html>
    <head>

        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link rel="icon" href="image/merchanfeeling.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="image/merchanfeeling.ico" type="image/x-icon" />
        <script src="js/modernizr.custom.js"></script>


        <!--       Mine          -->
        <link rel="stylesheet" href="css/styles1.css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="js/activities.js"></script>
    </head>
    <body>

        <table class="header" >
            <tr>
                <td class="logobar" style="width: 860px;">
                    <a href="./Homepage.php"><image  class="logo" src="image/logo1-1.png"/></a>  
                </td>
                <td style="width: 80px;" align="center" style="margin-right: 10px;">
                    <div class="settings"><a href="./__settings.php">settings</a></div>
                </td>
                <td style="width: 60px;" align="right" style="margin-right: 5px;"> 
                    <div><a href="#"><image class="profile" src="image/profile.png"/></a></div>
                </td>
            </tr>
        </table>

        <table style="background-color: #532371;" class="naviTable">
            <tr style="height: 40px;">
                <td style="width: 550px;">
                    <a href="./Homepage.php" class="navi">  Home  </a>
                    <a href="./ListCompany.php" class="navi">  Company  </a>
                    <a href="./ListContact.php" class="navi">  Contact  </a>
                    <a href="./__showactivities.php" class="navi">  Activity  </a>
                </td>
                <td style="width: 450px;" align="right">
                    <div class="searchdiv" >
                        <div id="searchTool" class="searchTool">
                            <form align="right">
                                <span class="choose" hoverable="true">
                                    <span class="chooseList">all</span>
                                    <div class="choosePop">
                                        <ul>
                                            <li><a href="#" value="0">all</a></li>
                                            <li><a href="#" value="1">company</a></li>
                                            <li><a href="#" value="2">contact</a></li>
                                            <li><a href="#" value="3">activity</a></li>
                                        </ul>
                                    </div>
                                </span>
                                <input class="searchTextInit" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
                                <input class="searchBtn" type="button" value="search">
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
        </table>

        <div class="container">
