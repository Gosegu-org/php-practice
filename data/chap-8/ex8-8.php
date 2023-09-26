﻿<?php

	echo "<br><h3>■ 테이블에 존재하는 레코드를 하나씩 호출하여 화면에 출력 </h3>";
	echo "<hr>";

	$connect = mysqli_connect ('localhost', 'root', '123456');   
	mysqli_select_db ($connect, 'study_db');          // 질의 수행

	/* ---------- 한글 깨짐 방지 코드 -----------------*/ 
	
	mysqli_query($connect, "set session character_set_connection=utf8;");		 
	mysqli_query($connect, "set session character_set_results=utf8;");		 
	mysqli_query($connect, "set session character_set_client=utf8;");	

	$sql = "select *from guest";                      // 테이블 검색 질의
	$result = mysqli_query ($connect, $sql);          // 질의 수행
	$count = mysqli_num_fields ($result);             // 필드의 개수 구하기
	
	echo "<B> ● 테이블 이름 : guest </B><br><br>";
	
?>

<table width='600' border='2' bordercolor='blue' cellpadding='10'>
	<tr>
		<td bgcolor='#FFFF00' align='center'><B> 아이디 </B></td> 
		<td bgcolor='#FFFF00' align='center'><B> 성명 </B></td> 
		<td bgcolor='#FFFF00' align='center'><B> 성별 </B></td> 
		<td bgcolor='#FFFF00' align='center'><B> 나이 </B></td> 
		<td bgcolor='#FFFF00' align='center'><B> 포인트 </B></td> 
		<td bgcolor='#FFFF00' align='center'><B> 이메일 </B></td>
	</tr>	

<?php

	while ($rows=mysqli_fetch_row($result))     // 레코드의 개수만큼 반복
	{
		echo "<tr>";
		for ($a = 0; $a < $count; $a++)          // 필드의 수만큼 반복
		{
			echo "<td> $rows[$a] </td>";
		}
		echo "</tr>";
	}

	?>

</table><br>

<?php

	$row_count = mysqli_num_rows($result);    // 레코드 개수 구하기
	echo "● 전체 레코드의 수 : <B>[ {$row_count} 개 ] </B>";
	mysqli_close($connect);   
	echo " <hr> >> mysql 접속이 종료되었습니다  !!! ";

?>