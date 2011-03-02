<script type="text/javascript">
function countspeedandbns() {
 var mount = document.getElementById('mount');
	var speed = document.getElementById('speed');
	var bns4mount = document.getElementById('bonusesformount');
	if (mount.value != '') {

    <?
    switchConnection(1,"realmd");
          $result = dbquery("SELECT * FROM cp_items where `type`='mount' ")or die("eror") ;
       while($data=dbarray($result)){
             switchConnection(1,"world");
            $mname = dbquery("SELECT * FROM item_template where entry='$data[item]' ")or die("eror") ;
             $mount=dbarray($mname);

	echo"	if (mount.value == '$mount[entry]') {speed.value = '$data[speed]%'; bns4mount.value = '$data[price] бонусов';} ";

 }
     ?>
  } else {
		speed.value = '';
		bns4mount.value = '';
	}
}
function countslotsandbns() {
	var bag = document.getElementById('bag');
	var slots = document.getElementById('slots');
	var bns4bags = document.getElementById('bonusesforbag');
	if (bag.value != '') {
      <?
     switchConnection(1,"realmd");
          $result = dbquery("SELECT * FROM cp_items where `type`='bag' ")or die("eror") ;
       while($data=dbarray($result)){
             switchConnection(1,"world");
            $bname = dbquery("SELECT * FROM item_template where entry='$data[item]' ")or die("eror") ;
             $bag=dbarray($bname);

  echo" if (bag.value == '$bag[entry]') {slots.value = '$bag[ContainerSlots]';bns4bags.value ='$data[price] бонусов';} ";

                   }
       ?>
	} else {
		slots.value = '';
		bns4bags.value = '';
	}
}
function getlinkandbns() {

	var fun = document.getElementById('funitem');
	var bns4fun = document.getElementById('bonusesforfun');
	if (fun.value != '') {
     <?
   switchConnection(1,"realmd");
          $result = dbquery("SELECT * FROM cp_items where `type`='fun' ")or die("eror") ;
       while($data=dbarray($result)){
             switchConnection(1,"world");
            $fname = dbquery("SELECT * FROM item_template where entry='$data[item]' ")or die("eror") ;
             $fun=dbarray($fname);

  echo" if (fun.value == '$fun[entry]') {bns4fun.value = '$data[price] бонусов';}";
                }
	  ?>
  } else {
		bns4fun.value = '';
	}
}
function getweapandbns()
{

	var weapon = document.getElementById('weaponitem');
	var bns4weapon = document.getElementById('bonusesforweapon');
	if (weapon.value != '') {
     <?
   switchConnection(1,"realmd");
          $result = dbquery("SELECT * FROM cp_items where `type`='weapon' ")or die("eror") ;
       while($data=dbarray($result)){
             switchConnection(1,"world");
            $wname = dbquery("SELECT * FROM item_template where entry='$data[item]' ")or die("eror") ;
             $weapon=dbarray($wname);

  echo" if (weapon.value == '$weapon[entry]') {bns4weapon.value = '$data[price] бонусов';}";
                }
	  ?>
  } else {
		bns4weapon.value = '';
	}
}

function getsetandbns() {

	var set = document.getElementById('itemset');
	var count = document.getElementById('itemcount');
	var bns4set = document.getElementById('bonusesforset');
	if (set.value != '') {
     <?
   switchConnection(1,"realmd");
          $result = dbquery("SELECT * FROM cp_items where `type`='itemset' ")or die("eror") ;
         switchConnection(1,"world");
      while($data=dbarray($result)){
            $sname = dbquery("SELECT * FROM item_template where itemset='$data[item]' ")or die("eror") ;
             $count=dbrows($sname);
           echo"if (set.value == '$data[item]') {count.value = '$count'; bns4set.value = '$data[price] бонусов'; document.getElementById('itemslist').innerHTML ='<center>";
             while($set=dbarray($sname)){
         echo"<a href=$wowheadlink$set[entry]>".stripinput($set[name])."</a><br><br>";

                                        }

  echo"</center>';}";
                }
	  ?>
  } else {
		bns4set.value = '';
		set.value = '';
		count.value = '';
		document.getElementById('itemslist').innerHTML ='';
	}
}
function ShardsToGold()
{
 	var realm = document.getElementById('realmList');
  <?
  foreach ($SendGoldPerRealmRate as $i => $value) {
 echo" if (realm.value == '".$i."') {var goldrate = ".$value.";}";
	                                  }
	?>
	document.getElementById('shards').value = Math.ceil(document.getElementById('gold').value * goldrate )+' бонусов';
}



</script>
<?error_reporting(0);if($wowhead)echo $wowheadjs;?>
    <td id="news" align="left" valign="top" rowspan="2">


  <table width="640" cellpadding="0" cellspacing="0">
  


  <tr><td colspan="2" class="topbr"></td></tr>
  <tr class="newstitletr"><td class="title"><img src="templates/<?echo $cp_template ?>/images/strel.jpg" alt="" />
  &nbsp; Услуги за бонусы </td><td align="right" class="date"></td></tr>
  <tr><td colspan="2" class="newsborder"></td></tr>
  <tr><td colspan="2" class="newstop"></td></tr>
  <tr><td class="text" colspan="2">
	<p><table width="100%" border=0>
		<tr>

			<td width="30%" align="center"><b>Выберите реалм:</b></td>
			<td width="20%" align="left">
      <select name="realm" id="realmList" class="select" onchange="javascript:changeRealm();" style="width: 150px;">
<?
 foreach ($world_db as $i => $value) {
        echo"<option value=$value[0]>$i</option>";
                                                          }


?>
      </select>
      </td>
			<td width="30%" align="center"><b>Выберите действие:</b></td>
			<td width="20%" align="left">
      <select name="wasteType" id="wasteList" class="select" onchange="javascript:changeWaste();" style="width: 150px;">
      <option value="">Выберите действие...</option>
      <?
       foreach ($bns_uslugi as $u => $value) {
        echo"<option value=$u>$local[$u]</option>";
                                                          }
       ?>
      </select>
      </td>

		</tr>
		<tr>
			<td colspan="4" align="center" height="25"></td>
		</tr>
		<tr>
			<td colspan="4"><div id='ServiceInput'></div></td>
		</tr>
	</table></p>
