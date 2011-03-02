
function changeWaste(clean) {
  var div = document.getElementById('ServiceInput');
  var waste = document.getElementById('wasteList');
	var realm = document.getElementById('realmList');
	if (clean) {
		div.innerHTML = '';
		waste.value = '';
		document.getElementById('spacing').style.height = '120';
	} else {
		if (waste.value != '') {
		document.getElementById('ServiceInput').innerHTML = HttpRequest('engine/' + waste.value + '.php);
    document.getElementById('ServiceInput').style.visibility = 'visible';
    document.getElementById('spacing').style.height = '0';
    }else {
			div.innerHTML = '';
			document.getElementById('spacing').style.height = '120';
		}

	}
}

function changeRealm() {
	var realm = document.getElementById('realmList');
	changeWaste(true);
}

function dorename() {
	var realm = document.getElementById('realmList');
	var div = document.getElementById('ServiceInput');
	var renamechar = document.getElementById('renamechar');
	document.getElementById('ServiceInput').innerHTML = HttpRequest('engine/dorename.php?realm=' + realm.value + '&guid=' + renamechar.value);
	document.getElementById('spacing').style.height = '0';
}

function dosex() {
	var realm = document.getElementById('realmList');
	var div = document.getElementById('ServiceInput');
	var sexchar = document.getElementById('sexchar');
	document.getElementById('ServiceInput').innerHTML = HttpRequest('engine/dosex.php?realm=' + realm.value + '&guid=' + sexchar.value);
	document.getElementById('spacing').style.height = '0';
}

function dorace() {
	var realm = document.getElementById('realmList');
	var div = document.getElementById('ServiceInput');
	var racechar = document.getElementById('racechar');
	var race = document.getElementById('race');
	document.getElementById('ServiceInput').innerHTML = HttpRequest('engine/dorace.php?realm=' + realm.value + '&guid=' + racechar.value + '&race=' + race.value);
	document.getElementById('spacing').style.height = '0';
}

function doface() {
	var realm = document.getElementById('realmList');
	var div = document.getElementById('ServiceInput');
	var facechar = document.getElementById('facechar');
	var face = document.getElementById('face');
	document.getElementById('ServiceInput').innerHTML = HttpRequest('engine/doface.php?realm=' + realm.value + '&guid=' + facechar.value + '&face=' + face.value);
	document.getElementById('spacing').style.height = '0';
}

function doacc() {
	var realm = document.getElementById('realmList');
	var div = document.getElementById('ServiceInput');
	var accchar = document.getElementById('accchar');
	var acc = document.getElementById('acc');
	document.getElementById('ServiceInput').innerHTML = HttpRequest('engine/doacc.php?realm=' + realm.value + '&guid=' + accchar.value + '&acc=' + acc.value);
	document.getElementById('spacing').style.height = '0';
}

function dogold() {
	var realm = document.getElementById('realmList');
	var div = document.getElementById('ServiceInput');
	var goldchar = document.getElementById('goldchar');
	var gold = document.getElementById('gold');
	document.getElementById('ServiceInput').innerHTML = HttpRequest('engine/dogold.php?realm=' + realm.value + '&guid=' + goldchar.value + '&gold=' + gold.value);
	document.getElementById('spacing').style.height = '0';
}
 function dobag() {
	var realm = document.getElementById('realmList');
	var div = document.getElementById('bonuswaste');
	var bag = document.getElementById('bag');
	var bagtochar = document.getElementById('bagtochar');
	document.getElementById('ServiceInput').innerHTML = HttpRequest('engine/dobag.php?realm=' + realm.value + '&guid=' + bagtochar.value + '&bag=' + bag.value);
	document.getElementById('spacing').style.height = '0';
}
function domount() {
	var realm = document.getElementById('realmList');
	var div = document.getElementById('bonuswaste');
	var mount = document.getElementById('mount');
	var mounttochar = document.getElementById('mounttochar');
	document.getElementById('ServiceInput').innerHTML = HttpRequest('engine/domount.php?realm=' + realm.value + '&guid=' + mounttochar.value + '&mount=' + mount.value);

  document.getElementById('spacing').style.height = '0';
}

 function dofun() {
	var realm = document.getElementById('realmList');
	var div = document.getElementById('bonuswaste');
	var fun = document.getElementById('funitem');
	var funtochar = document.getElementById('funtochar');
document.getElementById('ServiceInput').innerHTML = HttpRequest('engine/dofun.php?realm=' + realm.value + '&guid=' + funtochar.value + '&fun=' + fun.value);

	document.getElementById('spacing').style.height = '0';
}

function doweapon() {
	var realm = document.getElementById('realmList');
	var div = document.getElementById('bonuswaste');
	var weapon = document.getElementById('weaponitem');
	var weapontochar = document.getElementById('weapontochar');
document.getElementById('ServiceInput').innerHTML = HttpRequest('engine/doweapon.php?realm=' + realm.value + '&guid=' + weapontochar.value + '&weapon=' + weapon.value);

	document.getElementById('spacing').style.height = '0';
}
   function donotuse(c) {
	var realm = document.getElementById('realmList');
document.getElementById('ServiceInput').innerHTML = HttpRequest('engine/donotuse.php?realm=' + realm.value + '&guid=' + c);

	document.getElementById('spacing').style.height = '0';
}


 function doshop(a,i) {
	var realm = document.getElementById('realmList');
	var price = document.getElementById('price');
	var buychar = document.getElementById('buychar');
document.getElementById('ServiceInput').innerHTML = HttpRequest('engine/doshop.php?realm=' + realm.value + '&guid=' + buychar.value + '&price=' + price.value + '&do=' + a + '&id=' + i);

	document.getElementById('spacing').style.height = '0';
}

 function doshopg(a,i) {
	var realm = document.getElementById('realmList');
	var price = document.getElementById('gprice');
	var gold = document.getElementById('gold');
	var goldchar = document.getElementById('goldchar');
document.getElementById('ServiceInput').innerHTML = HttpRequest('engine/doshop.php?realm=' + realm.value + '&guid=' + goldchar.value + '&price=' + price.value + '&do=' + a + '&gold=' + gold + '&id=' + i);

	document.getElementById('spacing').style.height = '0';
}

 function doitemset() {
	var realm = document.getElementById('realmList');
	var div = document.getElementById('bonuswaste');
	var set = document.getElementById('itemset');
	var settochar = document.getElementById('settochar');
document.getElementById('ServiceInput').innerHTML = HttpRequest('engine/doitemset.php?realm=' + realm.value + '&guid=' + settochar.value + '&set=' + set.value);

	document.getElementById('spacing').style.height = '0';
}

function showmountpic() {
	var mount = document.getElementById('mount');
	var mountpicdiv = document.getElementById('mountpic');
	if (mount.value != '') {
    document.getElementById('mountpic').innerHTML = HttpRequest('engine/screens.php?i='+mount.value+'&t=m');
	} else {
		mountpicdiv.innerHTML = '';
	}
}
function showfunpic() {
	var fun = document.getElementById('funitem');
	var funpicdiv = document.getElementById('funpic');
	if (fun.value != '') {
    document.getElementById('funpic').innerHTML = HttpRequest('engine/screens.php?i='+fun.value+'&t=f');

  } else {
		funpicdiv.innerHTML = '';
	}
}
function showweaponnpic() {
	var weapon = document.getElementById('weaponitem');
	var weaponpicdiv = document.getElementById('weaponpic');
	if (weapon.value != '') {
    document.getElementById('weaponpic').innerHTML = HttpRequest('engine/screens.php?i='+weapon.value+'&t=f');

  } else {
		funpicdiv.innerHTML = '';
	}
}
function showsetpic() {
	var itemset = document.getElementById('itemset');
	var itemsetpic = document.getElementById('itemsetpic');
	if (itemset.value != '') {
    document.getElementById('itemsetpic').innerHTML = HttpRequest('engine/screens.php?i='+itemset.value+'&t=s');

  } else {
		itemsetpic.innerHTML = '';
	}
}


function advert(){
           document.getElementById('ServiceInput').innerHTML = "Объявление размещается на сайте в бегущей строке и в игровом мире WOW.<br>Объявление содержащие <u>не цензурную лексику</u> будет удалено потраченные Shards не возвращаются.<br>Жизнь объвления <u>24 часа</u> с момента подачи.<br><br><font color=black>Введите текст объявления: (<u>не больше 100 символов</u>)<br></font> <br><input type='text' maxlength=100 id='adv' cols='30' rows='5' ><br><a href='#go' onClick='advertadd(); return false'>Продолжить</a>";
   		   document.getElementById('ServiceInput').style.visibility = 'visible';
                   }

function goshrad(){
           document.getElementById('ServiceInput').innerHTML = "Введите количество Shards, которое хотите передать: <input type='text' id='shards' class='inp' size='10' ><br>Введите аккаунт на который будут переведены Shards: <input type='text' id='accaunt' class='inp' size='10'> <br><a href='#goshards' onClick='sendshard(); return false'>Продолжить</a>";
   		   document.getElementById('ServiceInput').style.visibility = 'visible';
                   }

function votes(){
           document.getElementById('ServiceInput').innerHTML = "<font color=#f25f5f><b>К сожалению, эта услуга ещё не автоматизированна.</b></font><br> Вы можете купить вещи сейчас, написав в ICQ <b>1009583</b> и обсудить это с нашим менеджером.";
   		   document.getElementById('ServiceInput').style.visibility = 'visible';
                   }
                   

                   








