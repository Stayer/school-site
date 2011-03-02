<script type="text/javascript" src="./highslide/highslide-full.js"></script> 
<link rel="stylesheet" type="text/css" href="./highslide/highslide.css" /> 
<td id="news" align="left" valign="top" rowspan="2">
<table width="640" cellpadding="0" cellspacing="0">
<?
	$album = $_GET['album'];
	switchConnection(1, "realmd");
	$result=dbquery("SELECT * FROM site_albums where id=$album") or die("eror");
	$result=dbarray($result);
?>
<tr><td colspan="2" class="topbr"></td></tr>
<tr class="newstitletr"><td class="title"><img src="templates/<?echo $site_template ?>/images/strel.jpg" alt="" />&nbsp; Альбом - <? echo $result[title] ?> </td><td align="right" class="date"></td></tr>
<tr><td colspan="2" class="newsborder"></td></tr>
<tr><td colspan="2" class="newstop"></td></tr>
<tr><td class="text" colspan="2">
<table width = '100%' cellspacing = '0' cellpadding = '0' border = '0' class = "tbl">
<p><h2><? echo $result[title] ?></h2></p>
<p><table width=85%><tr><td width=80%>Дата: <? echo $result[date] ?></td><td>От кого: <? echo $result[name] ?></td></tr></table></p><br><br>
<table width=95%><?echo $result[full_text] ?></table>
<br><br>

<script type="text/javascript">
hs.graphicsDir = './highslide/graphics/';
hs.align = 'center';
hs.transitions = ['expand', 'crossfade'];
hs.fadeInOut = true;
hs.dimmingOpacity = 0.8;
hs.outlineType = 'rounded-white';
hs.captionEval = 'this.thumb.alt';
hs.marginBottom = 105; // make room for the thumbstrip and the controls
hs.numberPosition = 'caption';

// Add the slideshow providing the controlbar and the thumbstrip
hs.addSlideshow({
	//slideshowGroup: 'group1',
	interval: 5000,
	repeat: false,
	useControls: true,
	overlayOptions: {
		className: 'text-controls',
		position: 'bottom center',
		relativeTo: 'viewport',
		offsetY: -60
	},
	thumbstrip: {
		position: 'bottom center',
		mode: 'horizontal',
		relativeTo: 'viewport'
	}
});
</script>

<div class="highslide-gallery" style="width: 600px; margin: auto">
 <a id="thumb1" class='highslide' href='./images/albums/test/1.jpg'
			onclick="return hs.expand(this, inPageOptions)" title="Two cabins"> 
		<img src='./images/albums/test/1.jpg' alt=''/></a> 
<? for ($i=1; $i<=$result['img_count']; $i++)
{echo "<a class='highslide' href="; echo $site_url; echo"images/albums/$result[folder]/$i.jpg onclick='return hs.expand(this, inPageOptions)'> <img src="; echo $site_url; echo"images/albums/$result[folder]/$i.jpg alt=''/></a>";}
?>
</div> 
 
</table>
</table>
</table>