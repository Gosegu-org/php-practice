﻿<?php
echo "<B> ※ 배열을 분리하는 exlode( )함수 사용  </B> <br>";
echo "----------------------------------------------------------------- <br>";
$str = "노트북 / 데스크탑  / 네비게이션 / PDP / MP3";
$a = explode("/" , $str);       // 분리문자 " / " 를 사용
echo " ■ \$string = \"노트북 / 데스크탑  / 네비게이션 / PDP / MP3\"<br>";
echo "----------------------------------------------------------------- <br>";
echo " ▼ explode( ) 함수 : <b>분리문자 \" / \"를 사용한 결과 </b><br><br>";
for($c = 0; $c < 5; $c++)
echo "[ " . $a[$c] . "] ";
echo "<br>----------------------------------------------------------------- ";
?>