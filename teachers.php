<td id="news" align="left" valign="top" rowspan="2">
 <table width="640" cellpadding="0" cellspacing="0">
  
  <tr><td colspan="2" class="topbr"></td></tr>
  <tr class="newstitletr"><td class="title"><img src="templates/<?echo $site_template ?>/images/strel.jpg" alt="" />
  &nbsp;Учителя </td><td align="right" class="date"></td></tr>
  <tr><td colspan="2" class="newsborder"></td></tr>
  <tr><td colspan="2" class="newstop"></td></tr>
  <tr><td class="text" colspan="2">
             <table width = '100%' cellspacing = '0' cellpadding = '0' border = '0' class = "tbl">
<?
	switchConnection(1, "realmd");
if (!isset($_GET['t'])) {
	$result=dbquery("SELECT * FROM site_teach_profile order by id desc") or die("eror");
echo "<table width=90%>";
        if (dbrows($result) != 0)
            {
while ($data=dbarray($result))
                {
                echo "<tr>
    <td width=60%><a href= './?s=teacher&t=$data[id]'>$data[name] $data[secondname]</a> </td><td width=20%> $data[science] </td><td width=10%>LOL</td>
    </tr>";
                }
}
echo "</table>";
}
else {	
        $t = $_GET['t'];
        $query= "SELECT * FROM site_teach_profile WHERE id=$t";
        $result= dbquery($query);
        $result= dbarray($result);
if (isset($result['id'])){
        include "./engine/profile.php";
if ($result[blog_enable]=1) {
        include "./engine/blog.php";
}
}
else echo "Такой страницы не существует!";
	}
 ?>
<br><br />

<A HREF="javascript:history.back()" onMouseOver="window.status='Назад';return true">Назад</A>
                </table>
    </table>