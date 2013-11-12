<?php

    session_start();
    require 'connect.php';
    
    
    $Username = $_POST['username'];
    $Password = $_POST['password'];
    
    $query = "select * from user where username= '$Username' and password = '$Password'";
    $result=  mysql_fetch_array(mysql_query($query));
    
    if($result)
    {
       $_SESSION['username'] = $Username;
       $_SESSION['userid'] = $result['ID'];
       header("Location:../Homepage.php?lang=$_SESSION[lang]");
    }
?>
