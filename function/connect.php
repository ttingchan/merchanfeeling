<?php
        /*
        $dbms='mysql';
        $host='localhost';
        $dbName='freetime';
        $dsn="$dbms:host=$host;dbName=$dbName";

        try
        {
            $dbh = new PDO($dsn,"root","");
        }  catch (PDOException $e)
        {
            die("Error!:".$e->getMessage()."");
        }
        */
            $db = mysql_connect("localhost","root","")
                    or die("fail to connect to the database");
            
            $sel=mysql_select_db("merchanfeeling",$db)
            or die("can't connect to the freetime".mysql_error());
           mysql_query("set character set 'gbk'");
           mysql_query("set names 'gbk'"); 

?>
