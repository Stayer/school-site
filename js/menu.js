<script>
/*<![CDATA[*/
$(document).ready(function () {
$('#multi-derevo li:has("ul")').find('a:first').prepend('<em class="marker"></em>');
$('#multi-derevo li span').click(function () {
$('a.current').removeClass('current'); 
var a = $('a:first',this.parentNode);
a.toggleClass('current');
var li=$(this.parentNode);
if (!li.next().length) {
li.find('ul:first > li').addClass('last');
} 
var ul=$('ul:first',this.parentNode);
if (ul.length) {
ul.slideToggle(300);
var em=$('em:first',this.parentNode);// this = 'li span'
em.toggleClass('open');
 }
});
})
/*]]>*/
</script>