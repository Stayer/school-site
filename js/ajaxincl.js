function HttpRequest(url)
{
	createLoadingBar();
	var pageRequest = false //variable to hold ajax object

	if (window.XMLHttpRequest) // non-IE
		pageRequest = new XMLHttpRequest();
	else if (window.ActiveXObject) // IE
		pageRequest = new ActiveXObject("Microsoft.XMLHTTP");
	else
	{
		alert("Method is not supported. Use \"Save and return\".");
		return;
	}

	if (pageRequest)
	{
		pageRequest.open('GET', url, false) //get page synchronously
		pageRequest.send(null)
		destroyLoadingBar();
		if (window.location.href.indexOf("http")==-1 || pageRequest.status==200)
   			return pageRequest.responseText;
	}
}

function setOpacity(element, opacity)
{
	if (navigator.userAgent.indexOf("MSIE") != -1)
	{
		var normalized = Math.round(opacity * 100);
        	element.style.filter = "alpha(opacity=" + normalized + ")";
	}
	else
		element.style.opacity = opacity;
}


function createLoadingBar()
{
	if (typeof window_width == 'undefined')
	{
		var window_width;
		if( typeof( window.innerWidth ) == 'number' )
			window_width = window.innerWidth;
		else if( document.documentElement && document.documentElement.clientWidth )
			window_width = document.documentElement.clientWidth;
		else if( document.body && document.body.clientWidth )
			window_width = document.body.clientWidth;
	}

	window_height = document.body.offsetHeight;

	var left = Math.round(window_width / 2);
	var top = Math.round(window_height / 2);

	var div = document.createElement('lockScreen');
	div.setAttribute('id','lockScreen');
	div.style.position = 'absolute';
	div.style.left = 0;
	div.style.top = 0;
	div.style.width = window_width;
	div.style.height = window_height - top;
	div.style.backgroundColor = '#D4BEA6';
	div.style.paddingTop = top + 'px';
	div.style.zIndex = 2;
	setOpacity(div, 0.5);
	div.innerHTML = '<center><img src="img/ajax-loader.gif" border="0" id="loadingbar"><br><span style="color: #1a1006; font-weight: bold;">Загрузка... Пожалуйста подождите...</span></center>';

	document.body.appendChild(div);
}

function destroyLoadingBar()
{
	var div = document.getElementById('lockScreen');
	document.body.removeChild(div);
}

function CheckLP()
{
	var login = document.getElementById('login').value;
	var password = document.getElementById('pass').value;

	if (login && password)
	{
		document.getElementById('Message').innerHTML = HttpRequest('engine/login.php?login='+login+'&pass='+password);
		if(document.getElementById('Message').innerHTML == 'Загрузка...')
			window.location.href = '?p=6';
		else
			destroyLoadingBar();
                    	
		document.getElementById('pass').value = '';
	}
	else
		document.getElementById('Message').innerHTML = 'Вы не ввели логин или пароль.';

	document.getElementById('Message').style.visibility = 'visible';
}
