<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">   
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Company</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="image/merchanfeeling.ico" type="image/x-icon" />
<link rel="shortcut icon" href="image/merchanfeeling.ico" type="image/x-icon" />
</head>
    <body>
       <?php
       include 'layout/header.php';
       include 'layout/navigationBar.php';
       require ("international/localization.php");
        ?> 
        <div id="CreateCom">
            
                <div><b>Create</b></div>
                <a href="#"><div class="button"><?php echo _("New a Contact"); ?> </div></a>
                <a href="#"><div class="button">New a Call</div></a>
                <a href="#"><div class="button">New a Task</div></a>
                <a href="#"><div class="button">New a Call</div></a>
                
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
                        <th colspan="2">L'Oreal</th>
                    </tr>

                    <tr>
                        <td><b>Company Owner:</b> Employee1</td>
                    </tr>

                    <tr>
                        <td><b>Industry:</b> Service</td>
                    </tr>

                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    
                    <tr>
                        <td colspan="2"><b>Company Information</b></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <table class="information">
                                <tr colspan="2">
                                    <td><b>Name</b></td>
                                    <td>L'Oreal</td>
                                    <td><b>Company Owner</b></td>
                                    <td>Employee1</td>                         
                                </tr>
                        </table>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    
                    <tr>
                        <td colspan="2"><b>Branch</b></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <table>
                                <tr>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th>Address</th>
                                </tr>
                                
                                <tr>
                                    <td>France</td>
                                    <td>Paris</td>
                                    <td>Add1</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    
                    <tr>
                        <td colspan="2"><b>Service Information</b></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <table>
                                <tr>
                                    <th>Service Name</th>
                                    <th>Sub-service</th>
                                    <th>Content</th>
                                </tr>
                                
                                <tr>
                                    <td>The studio</td>
                                    <td>Concept Store</td>
                                    <td>a online e-store</td>
                                </tr>
                                
                            </table>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    
                    <tr>
                        <td colspan="2"><b>Note</b></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <table>
                                <tr>
                                    <td colspan="3">
                                        <div class="note">
                                            <p>A small note</p>
                                            <p><a href="#">Li Meng</a> | 16/09/2013 06:00 AM</p>
                                        </div>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td colspan="2">
                                        <form>
                                            <textarea placeholder="Add a note..." class="addNote"></textarea>    
                                        </form>
                                    </td>
                                    <td>
                                        <input type="button" class="sendNote" value="add a note" ></input>                                       
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                </table> 
            </div>
        </div>
    </body>
