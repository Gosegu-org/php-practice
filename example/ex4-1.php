﻿<?php
echo " <B>▣ 어린이(10세이하)의 입장료 50% 할인 </B><br>";
echo "----------------------------------------------- <br>";

$fee = 5000;     // 입장료
$age = 8;         // 나이

if ($age <= 10)
{
	$fee *= 0.5;  // $fee = $fee * 0.5 와 같음
	echo " {$age}세는 어린이이므로 50% 할인된 <br> 요금 {$fee}원 입니다...<br>";
}

echo "기본 입장료는 5,000원 입니다... <br>";
?>