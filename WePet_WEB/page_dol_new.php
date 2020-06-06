<!DOCTYPE html>
<html>
<head>
	<title>돌보미 - 위펫_비앤비</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="./jquery-ui-1.12.1/jquery-ui.min.css">
	<script src = "js/jquery-3.5.1.js"></script>

	<script src="https://ssl.daumcdn.net/dmaps/map_js_init/postcode.v2.js"></script>

	<script src="./jquery-ui-1.12.1/jquery-ui.min.js"></script>

	<script type="text/javascript">
		$(function(){
			$("#date1, #date2").datepicker({
				dataFormat : 'yy-mm-dd'
			});
		});
	</script>

</head>
<body>
	<div id="navbar">
    	<a id="logo" href="page_1.php">
      		<img src="images/logo.png" height="50">
    	</a>
 	</div>
 	<div class="match_c_form">
 		<h1>돌보미 정보</h1>
		<form>
 				<input type="text" name="name" class="text-field_1 nameInput" placeholder="성명">
 				<input type="password" name="password" class="text-field_1 passwordInput" placeholder="비밀번호">
 				<input type="text" name="number" class="text-field_1 numberInput" placeholder="연락처">
 				<input type="text" name="date_start" class="text-field_date" id="date1" placeholder="시작 날짜">
 				<input type="text" name="date_end" class="text-field_date" id="date2" placeholder="종료 날짜">
				<input type="text" name="addr" class="text-field_1 addrInput" placeholder="돌봄처 주소">
				<input type="text" name="addrex" class="text-field_2 addrexInput"placeholder="상세주소">			
				<button type="button" onclick="openZipSearch()" class="adr-btn">주소검색</button><br>
 		</form>
 		<a href="page_dol_new_2.phps" class="next"> 다음</a>
	</div>

	<!--데이터 입력 검사, 주소 검색-->
	<script src = "js/new.js"></script>
</body>
</html>