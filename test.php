<?  

include_once ( 'inc/setLan.php' );   

$domain  =  'test' ;                     //域名，可以任意取个有意义的名字，不过要跟相应的.mo文件的文件名相同（不包括扩展名）。

bindtextdomain ( $domain ,  "locale/" ); //设置某个域的mo文件路径    

bind_textdomain_codeset($domain ,  'UTF-8' );  //设置mo文件的编码为UTF-8    

textdomain($domain );                    //设置gettext()函数从哪个域去找mo文件    

?>  

<html>  

<head>  

<meta http-equiv="Content-Type"  content= "text/html; charset=utf-8"  />  

<title>title</title>  

</head>  

<body bgcolor="#FFFFFF"  text= "#000000"  link= "#FF9966"  vlink= "#FF9966"  alink= "#FFCC99" >  

<?= gettext ( 'hello world.' ) ?>  

</body>  

</html>