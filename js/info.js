function ChangeGame()
{
	HttpRequest('engine/changegame.php');
	window.location.href = '?p=14';
}


function ChangePass()
{
    document.getElementById('InfoInput').style.visibility = 'visible';
	document.getElementById('InfoInput').innerHTML = "<font color=#f25f5f><b>Внимание! Пароль должен содержать не менее 6 символов!</b></font><br><br>Старый пароль: <input id='old_pass' class='inp' size='15' type='password'><br><br> Новый пароль : <input id='new_pass' class='inp' size='15' type='password'><br><br> Повтор пароля: <input id='new_pass2' size='15' class='inp' type='password'><br><br><b><a href='#pass' onClick='ChangePass2()'>Продолжить</a></b>";
}

function ChangePass2()
{
  var old_pass  = document.getElementById('old_pass').value;
  var new_pass  = document.getElementById('new_pass').value;
  var new_pass2 = document.getElementById('new_pass2').value;
  
  document.getElementById('InfoInput').innerHTML = HttpRequest('engine/changepass.php?old='+old_pass+'&new='+new_pass+'&new2='+new_pass2);

}

function lock(){
	if (!window.confirm('Вы точно хотите закрыть аккаунт, после чего он будет доступлен только с последнего IP ? Да/Нет?'))return false;
	document.getElementById('InfoInput').innerHTML = HttpRequest('engine/lock.php?do=1');
	document.getElementById('InfoInput').style.visibility = 'visible';
 window.location.href = '?p=1';
}

function unlock(){
	if (!window.confirm('Вы точно хотите открыть аккаунт, после чего он будет доступлен с любого IP ? Да/Нет?'))return false;
	document.getElementById('InfoInput').innerHTML = HttpRequest('engine/lock.php?do=0');
	document.getElementById('InfoInput').style.visibility = 'visible';
 window.location.href = '?p=1';
}

function Stat(dat)
{
    document.getElementById('InfoInput').style.visibility = 'visible';
	document.getElementById('InfoInput').innerHTML = HttpRequest('engine/stat.php?dat='+dat);
}
