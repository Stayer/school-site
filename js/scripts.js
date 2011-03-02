function GetScreen(){
    var src = document.getElementById('mount').value;
    document.getElementById('Screens').innerHTML = HttpRequest('engine/screens.php?i='+src);;
    document.getElementById('Screens').style.visibility = 'visible';
}

function ScreenFull(i, n)
{
    document.getElementById('Screens').innerHTML = HttpRequest('engine/screens.php?i='+i+'&n='+n);
     document.getElementById('Screens').style.visibility = 'visible';
}
