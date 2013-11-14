<?php

    session_start();
    require 'connect.php';
    
    if(isset($_GET['action']))
    {
        $action = $_GET['action'];
        if($action == 'login')
        {
            $Username = $_POST['username'];
            $Password = $_POST['password'];
            
            $query = "select * from user where username= '$Username' and password = '$Password'";
            $result=  mysql_fetch_array(mysql_query($query));

            if($result)
            {
               $_SESSION['username'] = $Username;
               $_SESSION['userid'] = $result['ID'];
               $_SESSION['mail'] = $result['Mail'];
               $_SESSION['logState'] = 1;
               header("Location:../Homepage.php?lang=$_SESSION[lang]");
            }
            else
            {
                if(empty($Username))
                {
                    $_SESSION['logState'] = 2;
                }
                else if(empty($Password))
                {
                    $_SESSION['logState'] =3;
                }
                else
                {
                    $_SESSION['logState'] = 0;
                }
                header("Location:../index.php?lang=$_SESSION[lang]");
            }
        }
        else if($action == "logout")
        {
            session_destroy();
            header("Location:../index.php?lang=$_SESSION[lang]");
        }
    }
?>
