<?
$realm_db = Array(
	'addr' => "127.0.0.1:3306",		// SQL server IP:port this realmd located on
	'user' => "root",			// SQL server login this realmd located on
	'pass' => "vertrigo",			// SQL server pass this realmd located on
	'name' => "develop",			// Realmd DB name
	);

$site_name="���� �7 �.�������";          // ��� �����
$site_url="http://localhost:1010/";   // ����� �����
$register_url="http://localhost:1010/?s=register";  // ����� �������� �����������

$news_count=5;
///////////////////////////////

// Panel style
$site_template = "second";

//����� "��������� ��������������" , "����������� ������"
$admin_name  = "��������� (���� ���������)";
$admin_email = "rodionov12@gmail.com";

//��������� ��������������
$email_body_sendmail = '<p>��������� �������������� �� [USERNAME]</p>
<p>[MESSAGE]</p>
<p>��������� c IP-������: [REMOTE_ADDR]</p>
<p>[SITE_URL]</p>';

//����������� ������, ������ ������
$email_subject_sendpass="����������� ������"; //���� ������

$email_body_sendpass='<p>�����������,  [USERNAME]</p>
<p>[DATE] �� ����������� ������ � ������ �������� c IP-������: [REMOTE_ADDR]</p>
<p>���� �� �� ������ ������ �������, ������ �������������� ������ ������.</p>
<p>��� ����� ������ �����:  [USERPASS]</p>
<p>��� ������������� ������ ������ �� ������ ������ �� ������ ������ : '.$cp_url.'?s=send&code=[USERCODE]</p>
<p>� ���������, ������������� ������� - [SITE_URL]</p>';
///////////////////////////////////////

// Registration in control panel.
$site_register = true;
$level   = 1; // 1=>user

?>
