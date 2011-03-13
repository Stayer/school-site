<head><script src="<? echo $site_url ?>js/jquery.js" type="text/javascript"></script><head>
<?
include "js/menu.js";
if(!$cp_register)$register_url; else $register_url=$site_url."?s=register";

echo'
<body>   
<div id="multi-derevo">
<ul>

	<li><span><a href="./index.php">Главная</a></span></li>
	<li><span><a href="?s=news">Новости</a></span></li>
	<li><span><a href="?s=docs&id=passport">Паспорт</a></span></li>
	<li><span><a href="#5" title="">Учительская</a></span>
		<ul>
		<li><span><a href="?s=teacher" title="Все учителя">Все учителя</a></span></li>
		<li><span><a href="#1" title="Администрация">Администрация</a></span></li>
		<li><span><a href="#11" title="Начальная школа">Начальная школа</a></span></li>
		<li><span><a href="#111">Старшая школа</a></span></li></ul></li>
	<li><span><a href="?s=teacher&t=1">Директор </a></span></li>
	<li><span><a href="?s=docs&id=parents">Родителям</a></span></li>
	<li><span><a href="?s=docs&id=student">Ученикам</a></span></li>
	<li><span><a href="#doc" title="Документация">КПМО</a></span>
		<ul>
		<li><span><a href="?s=docs&id=nsot" title="Новая система оплаты труда">НСОТ</a></span></li>
		<li><span><a href="?s=docs&id=npf" title="нормативное подушевое финансирование">НПФ</a></span></li>
		<li><span><a href="#65" title="система оценки качества образования">СОКО</a></span>
			<ul>
			<li><span><a href="?s=docs&id=soko_kriterii" title="система оценки качества образования">СОКО</a></span></li>
			<li><span><a href="?s=docs&id=spravkakpmo" title="Справка о результатах итоговой аттестации">Аттестация</a></span></li>
			</ul>
		</li>
		<li><span><a href="#1" title="Общественное участие в управлении школой">Общественное участие</a></span>
			<ul>
			<li><span><a href="?s=docs&id=prikaz373" title="Приказ">Приказ 373</a></span></li>
			<li><span><a href="?s=docs&id=sovetuchrejdeniya">Совет учреждения</a></span></li>
			<li><span><a href="docs/publdokl2010-3.htm" title="6.12.2010">Публичный отчёт 2010 г.</a></span></li>
			</ul>
		</li>
		</ul>
	</li>
	<li><span><a href="?s=photos">Галерея</a></span></li>
	<li><span><a href="?s=login">Войти</a></span></li>
</ul>
</div>';
                      ?>
   <td width="2%" rowspan="2"></td>
<tr><td class="button" id="b14a" valign="top"></td></tr>	