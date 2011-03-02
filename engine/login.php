<?
	include"../core.php";

	if (isset($_GET['login']))
	{
		session_set_cookie_params("time()+300", "/");
		session_start ();
	
		$user_name = preg_replace(array("/\=/","/\#/","/\sOR\s/"), "", stripinput($_GET['login']));
		$user_pass=sha1(strtoupper($user_name).":".strtoupper($_GET['pass']));
	
		switchConnection(1,"realmd");
		
		$result = dbquery("SELECT id FROM account WHERE username='$user_name' AND sha_pass_hash='$user_pass'");
		if (dbrows($result) != 0)
		{
			$data = dbarray($result);
				$_SESSION['id'] = $data['id']; $_SESSION['pass'] = $user_pass;
		       	echo "Загрузка...";
		}
		else
			echo "Данные, которые Вы ввели, неверны.";
	}
?>
