<head><script src="<? echo $site_url ?>js/jquery.js" type="text/javascript"></script><head>
<?
include "js/menu.js";
if(!$cp_register)$register_url; else $register_url=$site_url."?s=register";

echo'
<body>   
<div id="multi-derevo">
<ul>

	<li><span><a href="./index.php">�������</a></span></li>
	<li><span><a href="?s=news">�������</a></span></li>
	<li><span><a href="?s=docs&id=passport">�������</a></span></li>
	<li><span><a href="#5" title="">�����������</a></span>
		<ul>
		<li><span><a href="?s=teacher" title="��� �������">��� �������</a></span></li>
		<li><span><a href="#1" title="�������������">�������������</a></span></li>
		<li><span><a href="#11" title="��������� �����">��������� �����</a></span></li>
		<li><span><a href="#111">������� �����</a></span></li></ul></li>
	<li><span><a href="?s=teacher&t=1">�������� </a></span></li>
	<li><span><a href="?s=docs&id=parents">���������</a></span></li>
	<li><span><a href="?s=docs&id=student">��������</a></span></li>
	<li><span><a href="#doc" title="������������">����</a></span>
		<ul>
		<li><span><a href="?s=docs&id=nsot" title="����� ������� ������ �����">����</a></span></li>
		<li><span><a href="?s=docs&id=npf" title="����������� ��������� ��������������">���</a></span></li>
		<li><span><a href="#65" title="������� ������ �������� �����������">����</a></span>
			<ul>
			<li><span><a href="?s=docs&id=soko_kriterii" title="������� ������ �������� �����������">����</a></span></li>
			<li><span><a href="?s=docs&id=spravkakpmo" title="������� � ����������� �������� ����������">����������</a></span></li>
			</ul>
		</li>
		<li><span><a href="#1" title="������������ ������� � ���������� ������">������������ �������</a></span>
			<ul>
			<li><span><a href="?s=docs&id=prikaz373" title="������">������ 373</a></span></li>
			<li><span><a href="?s=docs&id=sovetuchrejdeniya">����� ����������</a></span></li>
			<li><span><a href="docs/publdokl2010-3.htm" title="6.12.2010">��������� ����� 2010 �.</a></span></li>
			</ul>
		</li>
		</ul>
	</li>
	<li><span><a href="?s=photos">�������</a></span></li>
	<li><span><a href="?s=login">�����</a></span></li>
</ul>
</div>';
                      ?>
   <td width="2%" rowspan="2"></td>
<tr><td class="button" id="b14a" valign="top"></td></tr>	