<?
################################################################################
#                          UTF8 <-> WIN1251 CONVERTER                          #
################################################################################
#                                                                              #
#        Email     : define@rwx.ru                                             #
#        Last Mod. : 14.09.2005                                                #
#        Copyright : Zinochkin A. V. :: Exenial Group [dev.rwx.ru]             #
#                                                                              #
################################################################################
#          Please leave the copyright notice intact. Thank You.                #
################################################################################

$chars = array(
  # upper case letters
  '208144' => chr(192), '208145' => chr(193), '208146' => chr(194),
  '208147' => chr(195), '208148' => chr(196), '208149' => chr(197),
  '208129' => chr(168), '208150' => chr(198), '208151' => chr(199),
  '208152' => chr(200), '208153' => chr(201), '208154' => chr(202),
  '208155' => chr(203), '208156' => chr(204), '208157' => chr(205),
  '208158' => chr(206), '208159' => chr(207), '208160' => chr(208),
  '208161' => chr(209), '208162' => chr(210), '208163' => chr(211),
  '208164' => chr(212), '208165' => chr(213), '208166' => chr(214),
  '208167' => chr(215), '208168' => chr(216), '208169' => chr(217),
  '208170' => chr(218), '208171' => chr(219), '208172' => chr(220),
  '208173' => chr(221), '208174' => chr(222), '208175' => chr(223),
  # lower case letters
  '208176' => chr(224), '208177' => chr(225), '208178' => chr(226),
  '208179' => chr(227), '208180' => chr(228), '208181' => chr(229),
  '209145' => chr(184), '208182' => chr(230), '208183' => chr(231),
  '208184' => chr(232), '208185' => chr(233), '208186' => chr(234),
  '208187' => chr(235), '208188' => chr(236), '208189' => chr(237),
  '208190' => chr(238), '208191' => chr(239), '209128' => chr(240),
  '209129' => chr(241), '209130' => chr(242), '209131' => chr(243),  
  '209132' => chr(244), '209133' => chr(245), '209134' => chr(246),
  '209135' => chr(247), '209136' => chr(248), '209137' => chr(249),
  '209138' => chr(250), '209139' => chr(251), '209140' => chr(252),
  '209141' => chr(253), '209142' => chr(254), '209143' => chr(255)
);

function utf8_to_win1251($str)
{
  global $chars;
  $len = strlen($str);
  $temp = '';

  for($i=0;$i<$len;$i++) {
    $chcode = ord($str[$i]);
    while($i<$len-1 && $chcode!=208 && $chcode!=209) { # skip not utf8 chars
      $temp.=$str[$i];
      $chcode = ord($str[++$i]);
    }
    if($i<$len-1) {
      $key = (string) $chcode.ord($str[++$i]);
      if(isset($chars[$key])) { # if after 208 or 209 correct char (exist as key in $chars)
	$temp.= $chars[$key];
      } else $temp.=$str[$i];
    } else $temp.=$str[$i];
  }
  return($temp);
}

function win2151_to_utf8($str)
{
  global $chars;
  $chars = array_flip($chars);
  $len = strlen($str);
  $temp = '';
  
  for($i=0;$i<$len;$i++) {
    if(isset($chars[$str[$i]])) {
    $key = (string) $chars[$str[$i]];
    $chs = chr($key[0].$key[1].$key[2]).chr($key[3].$key[4].$key[5]);
    $temp.=$chs;
    } else $temp.=$str[$i];
  }
  $chars = array_flip($chars);
  return($temp);
}
?>