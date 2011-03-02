    <td id="news" align="left" valign="top" rowspan="2">


  <table width="640" cellpadding="0" cellspacing="0">
  


  <tr><td colspan="2" class="topbr"></td></tr>
  <tr class="newstitletr"><td class="title"><img src="templates/<?echo $cp_template ?>/images/strel.jpg" alt="" />
  &nbsp; История личного кабинета</td><td align="right" class="date"></td></tr>
  <tr><td colspan="2" class="newsborder"></td></tr>
  <tr><td colspan="2" class="newstop"></td></tr>
  <tr><td class="text" colspan="2">
    <table width = '100%'>
        <td valign = 'top'>
            <form action = "" method = "post" style = "text-align: left">
                <input type = "hidden" name = "p" value = "events"/>

                <table><tr><td class = 'backbox_text'>
                        </td></tr>

                    <tr><td class = 'backbox_text'>


                            <?error_reporting(0);

                                $result=dbquery("SELECT * FROM cp_history WHERE acid =$ac_id ") or die("eror");
                                if (dbrows($result) > 20)
                                    {
                                    echo'<small>Страница:&nbsp;<select name="page" onchange="this.form.submit()" class="select" style="width: 45px;">>';
                                    for ($i=1; $i <= ceil(dbrows($result) / 20); $i++)
                                        {
                                        if ($_POST['page'] == $i)
                                            echo "<option value=$i selected>$i</option>";
                                        else
                                            echo "<option value=$i >$i</option>";
                                        }

                                    echo '</select>';
                                    }
                            ?>

                        </td></tr></table>
            </form>

            <table width = '100%' cellspacing = '4' cellpadding = '0' border = '0' class = 'text'>
                <tr height = "24" class = "tr">
                    <td align = "center" width = '20%'><b>Дата</b></td>

                    <td align = "center" width = '57%'><b>Действие</b></td>

                    <td align = "center" width = '20%'><b>IP адрес</b></td>
                </tr>

                <?
                    if (!$_POST['page'])
                        $p=0;
                    else
                        $p=($_POST['page'] - 1) * 20;

                    $result=dbquery("SELECT * FROM cp_history WHERE acid =$ac_id order by id desc limit $p,20  ") or die("eror");

                    if (dbrows($result) != 0)
                        {
                        while ($data=dbarray($result))
                            {
                            echo"<tr>
        <td align='center'  class='backbox_1'>$data[date]</td>
        <td align='left' class='backbox_1'>$data[com]</td>
        <td align='center'  class='backbox_1'>$data[ip]</td>
        </tr> ";
                            }
                        }
                    else echo "<tr>
        <td colspan=3 align='center'  class='backbox_1'>У вас пока нет истории личного кабинета</td>
        </tr> ";
                ?>

            </table>

            <br><div id = 'BasketInput' class = 'backbox' style = 'visibility: hidden; color:black;' align = 'center'
                value = 'ghjgh'></div>
        </td></table>
