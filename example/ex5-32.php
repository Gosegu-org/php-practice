﻿<?php
    $start = mktime(7, 00, 15, 1, 1, 2000);
    $std1 = date("Y-m-d일 H:i:s 부터", $start);
    $end = mktime(23, 59, 55, 12, 31, 2030);
    $std2 = date("Y-m-d일 H:i:s 까지", $end);
    $count =  $end - $start ;
    $total1 = intval($count / 86400);
    $total2 = intval(($count % 86400) / 3600);
    echo "<B> ※ mktime( )함수와 date( )함수의 사용 </B> <br>";
    echo "-------------------------------------------------------------- <br>";
    echo "■ 시작일 : {$std1} <br>";
    echo "-------------------------------------------------------------- <br>";
    echo "■ 종료일 : {$std2} <br>";
    echo "-------------------------------------------------------------- <br>";
    echo " 시작일부터 종료일까지<b> {$count}초</b>가 경과되었으며 <br>";
    echo " 날짜로 환산하면 <b>{$total1}일 {$total2}시간</b>이 경과되었습니다. <br>";
  ?>