
<?php
$uploaddir ="imgs/uploadimg/";
$type=array("jpg","bmp","png","jpeg");
$path ="model/";

function fileext($filename)
{
    return substr(strrchr($filename, '.'), 1);
}

function random($length)
{
    $hash='CR-';
    $chars='ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz';
    $max = strlen($chars)-1;
    mt_srand((double)  microtime()*100000);
    for($i=0;$i <$length;$i++)
    {
        $hash.=$chars[mt_rand(0, $max)];
    }
    return $hash;
}


//$a=  strtolower(fileext($_FILES['image']['name']));
/*if(in_array($a, $type))
{
    $filename =  explode(".", $_FILES['image']['name']);

do
{*/
 $filename =  explode(".", $_FILES['image']['name']);
    $filename[0]=random(10);
    $name=  implode(".", $filename);
    $uploadfile=$uploaddir.$name;


//}while(file_exists($uploadfile));
if(move_uploaded_file($_FILES['image']['tmp_name'], "../$uploadfile"))
{
}
else
{
    echo'not move.';
}
    
/*}
else
    {
        
    }*/
?>
