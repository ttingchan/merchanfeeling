<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">   
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="image/merchanfeeling.ico" type="image/x-icon" />
<link rel="shortcut icon" href="image/merchanfeeling.ico" type="image/x-icon" />
</head>
    <body>
       <?php
       include 'layout/header.php';
       include 'layout/navigationBar.php';
        ?> 
        <div id="CreateCom">
            
                <div><b>Create</b></div>
                <a href="#"><div class="button">New a Contact</div></a>
                <a href="#"><div class="button">New a Call</div></a>
                <a href="#"><div class="button">New a Task</div></a>               
        </div>
        <div class="comContent">
            <div class="operation">
                <div class="button inline">Return</div>
                <div class="button inline">Delete</div>
                <div class="button inline">Edit</div>
                <div class="button inline">Setting</div>
            </div>
            
            <div class="comMain">           
                <table id="company" class="List">
                    <tr>
                        <th colspan="2">Pierre</th>
                    </tr>

                    <tr>
                        <td>
                            <div>
                                <div class="conPro">
                                    <a href="#"><image class="contactProfile" src="image/profile.png"/></a>
                                </div>
                                <div class="conInfo">
                                    <table>
                                        <tr>
                                            <td>Contact Owner:</td>
                                            <td>Chan</td>
                                        </tr>
                                        <tr>
                                            <td>Email:</td>
                                            <td>tting@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td>Phone:</td>
                                            <td>076091111</td>
                                        </tr>
                                        <tr>
                                            <td>Mobile:</td>
                                            <td>0760922222</td>
                                        </tr>
                                        <tr>
                                            <td>Department</td>
                                            <td>HR</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td><b>Service</b> </td>
                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <th>Service</th>
                                    <th>Sub-service</th>
                                    <th>Content</th>
                                </tr>
                                <tr>
                                    <td>The Studio</td>
                                    <td>Concept Store</td>
                                    <td>a online concept e-store</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                    <tr>
                        <td><b>Note</b></td>
                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td colspan="2">
                                        <div class="note">
                                            <p>A small note</p>
                                            <p><a href="#">Li Meng</a> | 16/09/2013 06:00 AM</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <form>
                                        <td>
                                            <textarea placehoder="add a note"></textarea>
                                        </td>
                                        <td>
                                            <input type="button" value="add a note"/>
                                        </td>
                                    </form>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td><b>Activities</b></td>
                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Time</th>
                                </tr>
                                
                                <tr>
                                    <td>for the service price</td>
                                    <td>Meeting</td>
                                    <td>2013-10-01 10:00</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2"><b>Email List</b></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <table class="information">
                                <tr>
                                    <th width="250px">Subject</th>
                                    <th width="250px">Content</th>
                                    <th width="100px">Time</th>
                                    <th>Sender</th>
                                    <th>Receiver</th>
                                </tr>
                                
                                <tr>
                                    <td>for the service price</td>
                                    <td>
                                        <p>we will have a meeting at 10:00am</p>
                                    </td>
                                    <td>2013-09-28 11:30am</td>
                                    <td>chan</td>
                                    <td>Pierre</td>
                                </tr>                               
                            </table>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>&nbsp;</td>
                    </tr>

                </table> 
            </div>
        </div>
    </body>
