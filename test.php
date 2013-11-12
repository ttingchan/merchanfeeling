<?php require ("international/localization.php"); ?>

<html>
<head>
<title>PHP-gettext dropin example</title>
</head>
<body>

<?php
print "<p>";
foreach($supported_locales as $l) {
	print "[<a href=\"?lang=$l\">$l</a>] ";
}
print "</p>\n";
?>

<hr />

<?php
// using PHP-gettext
print "<pre>";
print _("This is how the story goes.\n\n");
/*
for ($number=6; $number>=0; $number--) {
  print sprintf(T_ngettext("%d pig went to the market\n", 
			  "%d pigs went to the market\n", $number), 
		 $number );
}*/
echo _("tingting a des ");
echo "\n";
echo "\$locale = ".$locale;
if(isset($_GET['lang'])) {echo "\$GETLANG = ".$_GET["lang"]."\n";}
print "</pre>\n";
?>

<hr />
<p>&laquo; <a href="./">back</a></p>
</body>
</html>
