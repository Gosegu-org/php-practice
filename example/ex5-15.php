﻿<?php

echo "<B> ※ 문자열의 길이와 아스키코드 값의 반환 함수 </B> <br>";
echo "---------------------------------------------------- <br>";

$a = "안녕하세요.";
echo "Q. 제시된 문자열 :  <B> {$a} </B> <br>";

$str1 = strlen($a);   // 문자열을 길이를 반환
echo " A. 문자열의 길이 : <B> {$str1} </B> <br>";
echo "---------------------------------------------------- <br>";

$b = 'B';
echo "Q. 제시된 알파벳 :  <B> {$b} </B> <br>";

$str2 = ord($b);   // 문자의 아스키코드 값 반환
echo " A. {$b}의 아스키코드 값 : <B> {$str2} </B> <br>";
echo "---------------------------------------------------- <br>";

?>