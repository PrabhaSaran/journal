<?php

session_start();

$fontsize = 100;
$letter = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz";

$code = substr(str_shuffle($letter),0,6);

$_SESSION['code'] = $code;

$im = @imagecreatefromjpeg("captcha-white.jpg");

//$im = imagecreatetruecolor('captcha.jpg');

$bg = imagecolorallocate($im,255, 255, 255);

$fg =  imagecolorallocate($im,0, 0, 0);

imagefill($im,0,0, $bg);

imagestring($im,500,65,20,$code,$fg);
header("Cache-Control: no-cache, must-relative");
header('content-type: image/jpeg');
imagejpeg($im);
imagedestroy($im);
?> 
