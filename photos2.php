<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "xhtml11.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Highslide JS</title> 
 
<!--
	1 ) Reference to the files containing the JavaScript and CSS.
	These files must be located on your server.
--> 
 
<script type="text/javascript" src="../highslide/highslide-full.js"></script> 
<link rel="stylesheet" type="text/css" href="../highslide/highslide.css" /> 
<!--[if lt IE 7]>
<link rel="stylesheet" type="text/css" href="../highslide/highslide-ie6.css" />
<![endif]--> 
 
 
 
<!--
    2) Optionally override the settings defined at the top
    of the highslide.js file. The parameter hs.graphicsDir is important!
    Add the slideshow and do some adaptations to this example.
--> 
 
<script type="text/javascript"> 
//<![CDATA[
hs.graphicsDir = '../highslide/graphics/';
hs.transitions = ['expand', 'crossfade'];
hs.restoreCursor = null;
hs.lang.restoreTitle = 'Click for next image';
 
// Add the slideshow providing the controlbar and the thumbstrip
hs.addSlideshow({
	//slideshowGroup: 'group1',
	interval: 5000,
	repeat: true,
	useControls: true,
	overlayOptions: {
		position: 'bottom right',
		offsetY: 50
	},
	thumbstrip: {
		position: 'above',
		mode: 'horizontal',
		relativeTo: 'expander'
	}
});
 
// Options for the in-page items
var inPageOptions = {
	//slideshowGroup: 'group1',
	outlineType: null,
	allowSizeReduction: false,
	wrapperClassName: 'in-page controls-in-heading',
	thumbnailId: 'gallery-area',
	useBox: true,
	width: 600,
	height: 400,
	targetX: 'gallery-area 10px',
	targetY: 'gallery-area 10px',
	captionEval: 'this.a.title',
	numberPosition: 'caption'
}
 
// Open the first thumb on page load
hs.addEventListener(window, 'load', function() {
	document.getElementById('thumb1').onclick();
});
 
// Cancel the default action for image click and do next instead
hs.Expander.prototype.onImageClick = function() {
	if (/in-page/.test(this.wrapper.className))	return hs.next();
}
 
// Under no circumstances should the static popup be closed
hs.Expander.prototype.onBeforeClose = function() {
	if (/in-page/.test(this.wrapper.className))	return false;
}
// ... nor dragged
hs.Expander.prototype.onDrag = function() {
	if (/in-page/.test(this.wrapper.className))	return false;
}
 
// Keep the position after window resize
hs.addEventListener(window, 'resize', function() {
	var i, exp;
	hs.getPageSize();
 
	for (i = 0; i < hs.expanders.length; i++) {
		exp = hs.expanders[i];
		if (exp) {
			var x = exp.x,
				y = exp.y;
 
			// get new thumb positions
			exp.tpos = hs.getPosition(exp.el);
			x.calcThumb();
			y.calcThumb();
 
			// calculate new popup position
		 	x.pos = x.tpos - x.cb + x.tb;
			x.scroll = hs.page.scrollLeft;
			x.clientSize = hs.page.width;
			y.pos = y.tpos - y.cb + y.tb;
			y.scroll = hs.page.scrollTop;
			y.clientSize = hs.page.height;
			exp.justify(x, true);
			exp.justify(y, true);
 
			// set new left and top to wrapper and outline
			exp.moveTo(x.pos, y.pos);
		}
	}
});
//]]>
</script> 
 
<!--
	3) Modify some of the styles
--> 
<style type="text/css"> 
	.highslide-image {
		border: 1px solid black;
	}
	.highslide-controls {
		width: 90px !important;
	}
	.highslide-controls .highslide-close {
		display: none;
	}
	.highslide-caption {
		padding: .5em 0;
	}
</style> 
 
</head> 
 
<body> 
 
<!--
	4)	Div where the gallery appears
--> 
 
<div id="gallery-area" style="width: 620px; height: 520px; margin: 0 auto; border: 1px solid silver"> 
 
<!--
	5)	Put all the thumbnails inside a hidden div where Highslide can index them to
		create the slideshow.
--> 
 
<div class="hidden-container"> 
<!--
	6) This is how you mark up the thumbnail images with an anchor tag around it.
	The anchor's href attribute defines the URL of the full-size image. Given the captionEval
	option is set to 'this.a.title', the caption is grabbed from the title attribute of
	the anchor.
--> 
 
 <a id="thumb1" class='highslide' href='./images/albums/test/1.jpg'
			onclick="return hs.expand(this, inPageOptions)" title="Two cabins"> 
		<img src='./images/albums/test/1.jpg' alt=''/></a> 
<? for ($i=1; $i<=$result['img_count']; $i++)
{echo "<a class='highslide' href="; echo $site_url; echo"images/albums/$result[folder]/$i.jpg onclick='return hs.expand(this, inPageOptions)'> <img src="; echo $site_url; echo"images/albums/$result[folder]/$i.jpg alt=''/></a>";}
?>
 
</div> 
 
</div> 
 
</body> 
</html>