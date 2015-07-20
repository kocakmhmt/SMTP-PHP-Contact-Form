<?php
session_start();

$font = "arial.ttf"; 
$width = "84";
$height = "22";
$hane = "6";

function rastgele($text) {
    $mevcut = "abcdefghjkmnprstuxvyz23456789ABCDEFGHJKMNPRSTUXVYZ";
    $salla = '';
	for($i=0;$i<$text;$i++) {
    $salla .= $mevcut{rand(0,48)}; }
    return $salla; 
}
   
$metin = rastgele($hane);


$resim_yaz=imagecreate($width,$height);
imagecolorallocate($resim_yaz, 255, 255, 255);

$text_renk = imagecolorallocate($resim_yaz, 255, 165, 0);
$bg1 = imagecolorallocate($resim_yaz, 244, 244, 244);
$bg2 = imagecolorallocate($resim_yaz, 227, 239, 253);
$bg3 = imagecolorallocate($resim_yaz, 207, 244, 204);
	
header('Content-type: image/png');
imagettftext($resim_yaz, 26, -4, 4, 25, $bg1, $font, $metin);
imagettftext($resim_yaz, 30, -7, 0, 15, $bg2, $font, $metin);

for( $i=0; $i<($width*$height)/400; $i++ ) {
    imageline($resim_yaz, mt_rand(0,$width), mt_rand(0,$height), mt_rand(0,$width), mt_rand(0,$height), $bg3);  
}

imagettftext($resim_yaz, 14, 3, 7, 17, $text_renk, $font, $metin);
imagepng($resim_yaz);
imagedestroy($resim_yaz);

$_SESSION['guvenlikKodu'] = $metin;
?>