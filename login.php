<?php

$email = "test@gmail.com";
$password = "test";

$twitter = true;
$facebook = true;
if ($facebook || $twitter)  {
  echo "ログイン成功";
  die;
}

echo "ログイン失敗";
?>
