function ChangeGame()
{
	HttpRequest('engine/changegame.php');
	window.location.href = '?p=14';
}


function ChangePass()
{
    document.getElementById('InfoInput').style.visibility = 'visible';
	document.getElementById('InfoInput').innerHTML = "<font color=#f25f5f><b>��������! ������ ������ ��������� �� ����� 6 ��������!</b></font><br><br>������ ������: <input id='old_pass' class='inp' size='15' type='password'><br><br> ����� ������ : <input id='new_pass' class='inp' size='15' type='password'><br><br> ������ ������: <input id='new_pass2' size='15' class='inp' type='password'><br><br><b><a href='#pass' onClick='ChangePass2()'>����������</a></b>";
}

function ChangePass2()
{
  var old_pass  = document.getElementById('old_pass').value;
  var new_pass  = document.getElementById('new_pass').value;
  var new_pass2 = document.getElementById('new_pass2').value;
  
  document.getElementById('InfoInput').innerHTML = HttpRequest('engine/changepass.php?old='+old_pass+'&new='+new_pass+'&new2='+new_pass2);

}

function lock(){
	if (!window.confirm('�� ����� ������ ������� �������, ����� ���� �� ����� ��������� ������ � ���������� IP ? ��/���?'))return false;
	document.getElementById('InfoInput').innerHTML = HttpRequest('engine/lock.php?do=1');
	document.getElementById('InfoInput').style.visibility = 'visible';
 window.location.href = '?p=1';
}

function unlock(){
	if (!window.confirm('�� ����� ������ ������� �������, ����� ���� �� ����� ��������� � ������ IP ? ��/���?'))return false;
	document.getElementById('InfoInput').innerHTML = HttpRequest('engine/lock.php?do=0');
	document.getElementById('InfoInput').style.visibility = 'visible';
 window.location.href = '?p=1';
}

function Stat(dat)
{
    document.getElementById('InfoInput').style.visibility = 'visible';
	document.getElementById('InfoInput').innerHTML = HttpRequest('engine/stat.php?dat='+dat);
}
