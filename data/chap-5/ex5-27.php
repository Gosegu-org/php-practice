﻿<?php
  echo "<B> ※ 입력한 ID 유효성 검사 </B> <br>";
  echo "------------------------------------------------------------------------ <br>";
  $id = "Ncs_8500";
  echo " > 신청한 ID ... <b> \"{$id}\" </b> <br>";
  echo "------------------------------------------------------------------------ <br>";
  if(preg_match("'^[A-Za-z0-9_]+$'", $id))
  {
	  echo "> 신청한 아이디 [{$id}]은(는) 사용할 수 있는 ID 입니다. <br> "; 
	  echo "> 좋은 아이디를 신청하셨습니다... <br> ";
  }
  else
  {
	  echo "> 신청한 아이디 [{$id}]은(는) 지원하지 않는 형식입니다. <br> ";
	  echo "> 아이디는 대/소문자 알파벳과 숫자, 언더바(_)만 허용됩니다. <br> ";
  }
  echo "------------------------------------------------------------------------ <br>";
?>