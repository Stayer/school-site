<? 
	echo "<br><p align=center><hr width=100% ></p>";
       $query= "SELECT * FROM site_teach_blog WHERE teach_id=$t order by id desc";
       $result1= dbquery($query);
        if (dbrows($result1) != 0)
            {
            echo "<h2><br><font color=#01b2f1>Блог учителя</font></h2><br><br>";
            while ($data=dbarray($result1))
                {
                echo "
<table width=96% align=left bgcolor=#33bac0>
<tr>
<td width=60% align=left><font color=#344956 size=3px>&nbsp<b>$data[title]</b></font></td>
<td align=right><font color=#4b9b98><b>$data[date]</b></color></td></tr></table>
<table width=96% align=left>
<tr><td><h4>$data[text]</h></td></tr></table><p>&nbsp</p><p>&nbsp</p><br>";
                }
            }
        else echo "<table><tr>
    <td colspan=2 align=center>Нет записей в блоге</td>
    </tr></table>";
?>