﻿<?php

echo "<B> ※ 인자를 포함하는 hap( )함수와 cha( )함수 정의</B> <br>";
echo "------------------------------------------------------- <br>";

function hap($a, $b)      // hap(인자1, 인자2)함수 정의
{
	$sum = $a + $b;
	echo " 덧셈 연산 : hap(\$a, \$b)함수 ... {$a} + {$b} = {$sum} <br>";
}

function cha($c, $d)      // cha(인자1, 인자2)함수 정의
{
	$sub = $c - $d;
	echo " 뺄셈 연산 : cha(\$c, \$d)함수 ... {$c} - {$d} = {$sub} <br>";
}

hap(10, 20);                // hap($a, $b)함수 호출
cha(300, 123);             // cha($c, $d)함수 호출
echo "------------------------------------------------------- <br>";
hap(569, 783);
cha(35, 158);

?>