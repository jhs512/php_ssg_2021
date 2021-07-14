<?php
$name = $_GET['name'];
$age = $_GET['age'];

if ( $age < 20 ) {
  echo "denied!";
  exit;
}
?>
<meta charset="UTF-8">
안녕하세요. 저는 <?=$name?>, <?=$age?>살입니다.