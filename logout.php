<?
 function redirect($location, $type="header") {
	if ($type == "header") {
		header("Location: ".$location);
	} else {
		echo "<script type='text/javascript'>document.location.href='".$location."'</script>\n";
	}
}
session_start();
session_destroy();

redirect("index.php");


?>
