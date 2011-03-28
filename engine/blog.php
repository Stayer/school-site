<? 
	echo "<br><p align=center><hr width=100% ></p>";
       $query= "SELECT * FROM site_teach_blog WHERE teach_id=$t order by id";
       $result1= dbquery($query);
switch ($result[level]) {
case 1:   $gm1="ученика"; break;
case 2:   $gm1="учителя"; break;
case 3:   $gm1="администратора"; break;
case 4:   $gm1="директора"; break;
case 5:   $gm1="Админа сайта"; break;}
        if (dbrows($result1) != 0)
            {
            echo "<h2><br><font color=#01b2f1>Блог $gm1</font></h2><br><br>";
            while ($data=dbarray($result1))
                {
                echo "
<table width=96% align=left bgcolor=#33bac0>
<tr>
<td width=60% align=left><font color=#344956 size=3px>&nbsp<b>$data[title]</b></font></td>
<td align=right><font color=#344956><b>$data[date]</b></color></td></tr></table>
<table width=96% align=left>
<tr><td><h4>$data[text]</h></td></tr></table><p>&nbsp</p><p>&nbsp</p><br>";
                }
            }
?>