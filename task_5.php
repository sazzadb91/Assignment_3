<?php
function passMaking($chars) 
{
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numeric = '0123456789';
    $special = '!@#$%^&*()_+';
    $allChars = $lowercase . $uppercase .$numeric . $special;
  return substr(str_shuffle($allChars), 0, $chars);
}
  echo passMaking(8)."\n";
?>
