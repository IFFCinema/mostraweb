<?php
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$symbian =  strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");
?>
<?php
if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian == true):
 echo('<script type="text/javascript">
 window.location.replace("./responsive/index.html");
 </script>');
?>
<?php else : ?>
  echo('<script type="text/javascript">
  window.location.replace("./home/index.html");
  </script>');
<?php endif; ?>
