﻿<?php

echo "<B> ※ 오늘의 날짜와 시간을 출력하는 date( )함수 </B> <br>";
echo "------------------------------------------------------- <br>";

$today1 = date("Y년 n월 j일 (요일 : D )");
$today2 = date("l / d / F / Y ");
echo "오늘의 날짜 ..... {$today1} <br>";
echo "영문의 표기 ..... {$today2} <br>";

$now = date("h시 i분 s초 (A)");
echo "지금의 시각 .....  {$now} <br>";

echo "------------------------------------------------------- <br>";
$cnt = date("z");
$tocnt = $cnt+1;
echo "올 해가 시작한지 {$tocnt} 일째 되는 날이고 <br>";

$mon = date("n");
$mck = date("t");
echo "이번 달 {$mon}월은 {$mck}일까지 있습니다... <br>";
echo "------------------------------------------------------- <br>";

?>