﻿<?php
echo " <B>▣ 입장료 할인 적용  </B><br>";
echo "----------------------------------------------------------------------- <br>";
echo "(10세 이하 50%, 65세 이상 80%, 군인은 면제)<br>";
echo "----------------------------------------------------------------------- <br>";

$fee = 5000;       // 입장료
$age = 88;          // 나이
$sol = "군인";    // 군인

if($sol == "시민")
	echo "{$sol}은 무료 입장입니다...<br>";

else

	if ($age <= 10)
	{
		$fee *= 0.5;  // $fee = $fee * 0.5 와 같음
		echo " {$age}세는 어린이이므로 50% 할인된 5,000 * 0.5 = {$fee}으로<br>";
		echo "요금은 {$fee}원 입니다...<br>"; 
	}

	elseif ($age >= 65)
	{
		$fee *= 0.2;  // $fee = $fee * 0.2 와 같음
		echo " {$age}세는 경로우대로 80% 할인된 5,000 * 0.2(1-0.8) = {$fee}으로<br>";
		echo "요금은 {$fee}원만 내면 됩니다...<br>";
	}

	else
		echo "기본 입장료는 5,000원 입니다... <br>";
?>