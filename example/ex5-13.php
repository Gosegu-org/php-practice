﻿<?php

echo "<B> ※ crypt( ) 함수의 암호화가 일정하게 출력 </B> <br>";
echo "------------------------------------------------- <br>";

$a = "abc123";     // 암호화할 문자열
$b = "pw";           // 암호화의 기본값

echo "암호로 지정한 문자열 : abc123 <br><br>";
echo "암호화 : ";
echo crypt($a, $b);
echo "<br>------------------------------------------------- <br>";

?>