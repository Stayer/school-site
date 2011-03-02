<?
error_reporting(0);
include"config.php";

header("Content-type: text/html; charset=windows-1251");
extract($_GET,EXTR_OVERWRITE);
extract($_POST,EXTR_OVERWRITE);
  ob_start();
date_default_timezone_set('UTC');

function switchConnection($key, $db_type)
  {
    global $realm_db, $CurrentConnection, $CurrentDB;
if($db_type == 'realmd')
      {

        mysql_connect($realm_db['addr'], $realm_db['user'], $realm_db['pass']) or die("Unable to connect to SQL host: ".mysql_error());
        mysql_select_db($realm_db['name']) or die("Unable to connect to Realm SQL database: ".mysql_error());

     }
  mysql_query("SET CHARACTER SET cp1251");
  mysql_query("SET NAMES 'cp1251'");
 }

 function dbquery($query) {
	$result = @mysql_query($query);
	if (!$result) {
		echo mysql_error();
		return false;
	} else {
		return $result;
	}
}

function dbcount($field,$table,$conditions="") {
	$cond = ($conditions ? " WHERE ".$conditions : "");
	$result = @mysql_query("SELECT Count".$field." FROM ".$table.$cond);
	if (!$result) {
		echo mysql_error();
		return false;
	} else {
		$rows = mysql_result($result, 0);
		return $rows;
	}
}

function dbresult($query, $row) {
	$result = @mysql_result($query, $row);
	if (!$result) {
		echo mysql_error();
		return false;
	} else {
		return $result;
	}
}

function dbrows($query) {
	$result = @mysql_num_rows($query);
	return $result;
}

function dbarray($query) {
	$result = @mysql_fetch_assoc($query);
	if (!$result) {
		echo mysql_error();
		return false;
	} else {
		return $result;
	}
}

function dbarraynum($query) {
	$result = @mysql_fetch_row($query);
	if (!$result) {
		echo mysql_error();
		return false;
	} else {
		return $result;
	}
}

function dbconnect($db_host, $db_user, $db_pass, $db_name) {
  $db_connect = @mysql_connect($db_host, $db_user, $db_pass);
	$db_select = @mysql_select_db($db_name);
 if (!$db_connect) {
		die("<div style='font-family:Verdana;font-size:11px;text-align:center;'><b>Unable to establish connection to MySQL</b><br>".mysql_errno()." : ".mysql_error()."</div>");
	} elseif (!$db_select) {
		die("<div style='font-family:Verdana;font-size:11px;text-align:center;'><b>Unable to select MySQL database</b><br>".mysql_errno()." : ".mysql_error()."</div>");
	}
}

   session_start();
  if (!empty($_SESSION['id'])) {
	$id = isNum($_SESSION['id']) ? $_SESSION['id'] : "0";
	//echo $id;
	$pass = (preg_match("/^[0-9a-z]{40}$/", $_SESSION['pass']) ? $_SESSION['pass'] : "");
   switchConnection(1,"realmd");
	//echo $pass;
	$result = dbquery("SELECT * FROM account WHERE id='$id' AND sha_pass_hash='$pass'");
	if (dbrows($result) != 0) {
  $datag= dbarray($result);
  $glob_name=$datag['username'];
  $cp_login=true;
  $ac_id=$id;

$acc_mail = dbquery("SELECT count(*)FROM account WHERE email='$datag[email]'");
$acc_mail=mysql_result ($acc_mail,0);
   unset($id,$pass);
	} else {
    unset($id,$pass);
		redirect("$site_url");
	}
}elseif($_GET['p']!=""){
      redirect("$site_url"); exit;
		 }

  function stripinput($text) {
	if (QUOTES_GPC) $text = stripslashes($text);
	$search = array("\"", "'", "\\", '\"', "\'", "<", ">", "&nbsp;");
	$replace = array("&quot;", "&#39;", "&#92;", "&quot;", "&#39;", "&lt;", "&gt;", " ");
	$text = str_replace($search, $replace, $text);
	return $text;
}
function redirect($location, $type="header") {
	if ($type == "header") {
		header("Location: ".$location);
	} else {
		echo "<script type='text/javascript'>document.location.href='".$location."'</script>\n";
	}
}
function isNum($value) {
	return (preg_match("/^[0-9]+$/", $value));
}

 function isLetr($value) {
	return (preg_match("/^[a-z|A-Z|a-|íž¿í¾­Þ+$/", $value));
}


function send_mail($username,$email,$pass="",$user_code="",$type="sendpass",$subject="",$message="") {
 global $admin_email,$site_name,$email_subject_sendpass,$email_body_sendpass,$site_url,$admin_name,$email_body_sendmail;
  require_once ("phpmailer/mail.php"); 
 if($type=="sendpass"){
                $email_body_sendpass = str_replace("[DATE]", date("Y-m-d H:i:s",time()), $email_body_sendpass);
                $email_body_sendpass = str_replace("[USERNAME]", $username, $email_body_sendpass);
								$email_body_sendpass = str_replace("[EMAIL]", $email, $email_body_sendpass);
                $email_body_sendpass = str_replace("[USERPASS]", $pass, $email_body_sendpass);
                $email_body_sendpass = str_replace("[USERCODE]", $user_code, $email_body_sendpass);
                $email_body_sendpass = str_replace("[REMOTE_ADDR]", $_SERVER['REMOTE_ADDR'], $email_body_sendpass);
                $email_body_sendpass = str_replace("[SITE_URL]", $site_url, $email_body_sendpass);

                $msg = array();
								$msg['from_email'] = $admin_email;
								$msg['from_name'] = $site_name;
								$msg['to_email'] = $email;
								$msg['to_name'] = $username;
								$msg['subject'] = $email_subject_sendpass;
								$msg['body'] = $email_body_sendpass;
								$mail = new mail();
								$mail->send($msg);
              }

   if($type=="sendmail"){
   
                $email_body_sendmail = str_replace("[USERNAME]", $username, $email_body_sendmail);
                $email_body_sendmail = str_replace("[MESSAGE]", $message, $email_body_sendmail);
                $email_body_sendmail = str_replace("[REMOTE_ADDR]", $_SERVER['REMOTE_ADDR'], $email_body_sendmail);
                $email_body_sendmail = str_replace("[SITE_URL]", $site_url, $email_body_sendmail);
                
                $msg = array();
								$msg['from_email'] = $email;
								$msg['from_name'] = $username;
								$msg['to_email'] = $admin_email;
								$msg['to_name'] = $admin_name;
								$msg['subject'] = $subject;
								$msg['body'] = $email_body_sendmail;
								$mail = new mail();
								$mail->send($msg);
              }
                           }
?>
