﻿<?php
echo "<B> ♣ do~while문을 이용한 1부터 10까지의 합  </B><br>";
echo "-------------------------------------------------- <br>";
$a = 1;                 // 초기값 선언
$sum = 0;             // 누적합 변수 선언

do     // 조건
{
	echo $a." 까지 누적합 ";
	$sum += $a;    // $sum = $sum + $a 와 같음
	$a ++;            
	echo " = {$sum} <br>";
} while($a <= 10);  // 뒤에 세미콜론(;)이 붙음에 주의

echo "------------------------------------------------- <br>";
echo " ▶ 1부터 10까지의 합 ..... {$sum} <br> ";
echo "------------------------------------------------- ";
?>