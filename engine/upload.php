<FORM ENCTYPE="multipart/form-data" ACTION="upload.php" METHOD="POST">
�����������: <INPUT TYPE="file" NAME="userfile">
<INPUT TYPE="submit" VALUE="���������">
</FORM>

<?php
$path = "";
$max_size = 22200000;

if (!isset($HTTP_POST_FILES['userfile'])) exit;

if (is_uploaded_file($HTTP_POST_FILES['userfile']['tmp_name'])) {

if ($HTTP_POST_FILES['userfile']['size']>$max_size) { echo "���� ������� �������<br>\n"; exit; }
if (($HTTP_POST_FILES['userfile']['type']=="image/gif") || ($HTTP_POST_FILES['userfile']['type']=="image/pjpeg") || ($HTTP_POST_FILES['userfile']['type']=="image/jpeg")) {

if (file_exists($path . $HTTP_POST_FILES['userfile']['name'])) { echo "���� � ����� ������ ��� ����������<br>\n"; exit; }

$res = copy($HTTP_POST_FILES['userfile']['tmp_name'], $path .
$HTTP_POST_FILES['userfile']['name']);
if (!$res) { echo "�������� �� �������!<br>\n"; exit; } else { echo "�������� ������ �������!<br>\n"; }

echo "��� �����: ".$HTTP_POST_FILES['userfile']['name']."<br>\n";
echo "������: ".$HTTP_POST_FILES['userfile']['size']." bytes<br>\n";
echo "���: ".$HTTP_POST_FILES['userfile']['type']."<br>\n";
} else { echo "������������ ������ �����<br>\n"; exit; }
}
?>