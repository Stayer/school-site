<script type="text/javascript" language="JavaScript"> 
  function myimageClick(img) {
    if(img.isBigImage) {
      img.src = "pic250x200.jpg";
      img.isBigImage = false;
    } else {
      img.src = "pic500x400.jpg";
      img.isBigImage = true;
    } 
    img.removeAttribute("height");
    img.removeAttribute("width"); 
  } 
</script>