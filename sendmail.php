<div id='content'>
<?error_reporting(0);
 if (isset($_POST['submit']) && isset($_POST['subject']) && isset($_POST['message'])){
  if(strlen($_POST['message'])>7 && strlen($_POST['message'])<1000){
        $message=stripinput($_POST['message']);
 if (isset($_FILES["screen"]) && is_uploaded_file($_FILES["screen"]["tmp_name"]) && $_FILES["screen"]["error"] == 0) {
    $photo_types = array(".gif",".jpg",".jpeg",".png",".bmp");
     $screen = $_FILES["screen"]["name"];
    $photo_ext = strtolower(strrchr($screen,"."));
   if(in_array($photo_ext, $photo_types)){
              if ($_FILES["screen"]["size"] < 2000000){
               $screen_id = $_FILES["screen"]["name"];
               $save_path = "upload/".$ac_id."_".$_FILES["screen"]["name"];
     @move_uploaded_file($_FILES["screen"]["tmp_name"],$save_path);
       $message.="<br><br>Screenshot<br>$cp_url$save_path<br>";
                                                           }

                                          }
}
    $result = dbquery("SELECT email,username FROM account WHERE id='$ac_id' limit 1");
      	if (dbrows($result) != 0) {
           $data = dbarray($result);
    send_mail(''.$data['username'].'',''.$data['email'].'',0,0,'sendmail',''.stripinput($_POST['subject']).'',''.$message.'');

   echo'<h2>������ '.$admin_name.'`�</h2><p><div class="log_error">��������� ������� ����������</div></p>';
                                  }
                                             }else echo'<h2>��������� �� ������</h2>
	<p><div class="log_error">�� ��������� ������������ ���� ����� ��� ��������� ������� �������</div><br><a href="?p=18">��������� �������</a></p>
';
                                                  }else{


echo'<h2>�������� '.$admin_name.'`�</h2>
	<p>
	<form name="sendmail" method="post" enctype="multipart/form-data">
		<table border="0" cellpadding="0" cellspacing="0" class="tbl" width="100%">
             <tr>
               <td colspan="2">���������, ������������ ����� ��� �����, ������������ �� '.$admin_email.'. ��������� �� ������������� � "������� ��������� � ������������� �������". ����� �� �������� �� ����������� �����, ����� ������� ������ � ������ ������ ��������.</td>
             </tr>
             <tr height="25">
               <td colspan="2"></td>
             </tr>
             <tr>
               <td align="right" width="40%">���� ���������<span class="red">*</span>:</td>
               <td width="60%"><input name="subject" type="text" class="inp" size="15" style="width: 300px;"></td>
             </tr>
             <tr>
               <td align="right">���������� ��������:</td>
               <td><input name="screen" type="file" size="15" style="width: 300px;"></td>
             </tr>
             <tr>
               <td align="right">���������<span class="red">*</span>:</td>
               <td><textarea rows="10" cols="40" name="message" class="inp" style="width: 300px;" wrap="hard"></textarea></td>
             </tr>
             <tr>
               <td></td>
               <td align="center"><label><input type="submit" name="submit" class="submit" value="���������" alt="���������" title="���������" style="width: 200px;"></label></td>
             </tr>
             <tr>
             	<td></td>
             	<td align="left"><span class="red">*</span> ����, ���������� ������� �����������.</td>
             </tr>
           </table>
	</form></p>
';      }
?>

