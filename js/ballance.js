function EnterKey()
{
	document.getElementById('BallanceInputb').innerHTML = "<br><input type='text' id='key1' class='inp' size=2 maxlength=3> - <input type='text' id='key2' class='inp' size=2 maxlength=3> - <input type='text' id='key3' class='inp' size=2 maxlength=3> - <input type='text' id='key4' class='inp' size=2 maxlength=3><br><a href='#Shards' onClick='EnteredKey()'>����������</a>";
   document.getElementById('BallanceInputb').style.visibility = 'visible';
}
function EnterKey2()
{
	document.getElementById('BallanceInput').innerHTML = "<br><font color=#d4bea6><input type='text' id='key1' class='inp' size=2 maxlength=3> - <input type='text' id='key2' class='inp' size=2 maxlength=3> - <input type='text' id='key3' class='inp' size=2 maxlength=3> - <input type='text' id='key4' class='inp' size=1 maxlength=1></font><br><a href='#Shards' onClick='EnteredKey2()'>����������</a>";
   document.getElementById('BallanceInput').style.visibility = 'visible';

}

var nowDate = new Date();
var nowTime = nowDate.getTime();
var startTime = 0;

function EnteredKey(){
	var nowDate = new Date();
	var nowTime = nowDate.getTime();
	
	if(startTime == 0 || nowTime-startTime > 5000){
		var key = document.getElementById('key1').value + document.getElementById('key2').value + document.getElementById('key3').value + document.getElementById('key4').value;
		if(key.length != 12)
		   document.getElementById('BallanceInputb').innerHTML = "<font color=#f25f5f><b>������ PIN-���� �������. �� ���������� ������(�).<br><a href='#Shards' onClick='EnterKey()'>������ �����</a>";
		else {
	 	   document.getElementById('BallanceInputb').innerHTML = HttpRequest('engine/ballance.php?key='+key);
	 	   if( document.getElementById('BasketInput').innerHTML != '���� ��������� ��� �� ����������.' )
	 	      window.location.href = 'cp/?p=6';
		}
		startTime = nowTime;
	} else {
      var sec = 5 - Math.floor((nowTime-startTime)/1000);
		if(sec < 6 && sec > 1) var mes = '������';
		if(sec == 1) var mes = '�������';
		if(sec == 0) var mes = '������';
		document.getElementById('BallanceInputb').innerHTML = '<font color=#f25f5f><b>����������, ��������� '+sec+' '+mes+'.';
	}
}
function EnteredKey2(){
	var nowDate = new Date();
	var nowTime = nowDate.getTime();

	if(startTime == 0 || nowTime-startTime > 5000){
		var key = document.getElementById('key1').value + document.getElementById('key2').value + document.getElementById('key3').value + document.getElementById('key4').value;
		if(key.length != 10)
		   document.getElementById('BallanceInput').innerHTML = "<font color=#f25f5f><b>������ ����� �������. �� ���������� ������(�).</font></b><br><a href='#����������' onClick='EnterKey2()'>������ �����</a>";
		else {
	 	   document.getElementById('BallanceInput').innerHTML = HttpRequest('engine/ballance.php?key2='+key);
	 	   if( document.getElementById('BasketInput').innerHTML != '���� ��������� ��� �� ����������.' )
	 	      window.location.href = 'cp/?p=6';
		}
		startTime = nowTime;
	} else {
      var sec = 5 - Math.floor((nowTime-startTime)/1000);
		if(sec < 6 && sec > 1) var mes = '������';
		if(sec == 1) var mes = '�������';
		if(sec == 0) var mes = '������';
		document.getElementById('BallanceInput').innerHTML = '<font color=#f25f5f><b>����������, ��������� '+sec+' '+mes+'.';
	}
}


