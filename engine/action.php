<?php 
$link = mysql_connect ("localhost","root","vertrigo") or die ("не коннект: " .mysql_error()); 
$link = mysql_select_db ("develop") or die ("не пашеж: " .mysql_error());
$name = ($_POST['name']);
$secondname = ($_POST['secondname']);
$a=mysql_query("SET CHARACTER SET utf8");
$a=mysql_query("SET NAMES 'utf8'");
$upd="INSERT INTO site_teach_profile (name, secondname) VALUES ('$name', '$secondname')";
$result = mysql_query($upd) or die (mysql_error());
echo "Вроде успешно!";
?>