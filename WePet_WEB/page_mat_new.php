<!DOCTYPE html>
<html>
<head>
	<title>맡기미 - 위펫_비앤비</title>
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
    	<a id="logo" href="main.php">
      		<img src="images/logo.png" height="50">
    	</a>
 	</div>

 	<div class="match_c_form">

 		<h1>맡기미 정보</h1>

		<form action="page_mat_new_3.php" method="POST">
 				<input type="text" name="name" class="text-field_1 nameInput" placeholder="성명">

 				<input type="password" name="password" class="text-field_1 passwordInput" placeholder="비밀번호">

 				<input type="text" name="phoneNumber" class="text-field_1 numberInput" placeholder="연락처">

 				<input type="text" name="date_start" class="text-field_date" id="date1" placeholder="시작 날짜">

 				<input type="text" name="date_end" class="text-field_date" id="date2" placeholder="종료 날짜">

				<select name="pet1" class="text-field_2 petTypeInput">
					<option value="-">-</option>
					<option value="소형견">소형견</option>
					<option value="중형견">중형견</option>
					<option value="대형견">대형견</option>
					<option value="고양이">고양이</option>
					<option value="기타">기타</option>
				</select>
				<select name="pet1_num" class="text-field_mari petNumberInput">
					<option value="-">-</option>
					<option value="1">1마리</option>
					<option value="2">2마리</option>
					<option value="3">3마리</option>
					<option value="over4">4+마리</option>
				</select>
				<select name="pet2" class="text-field_2 petTypeInput">
					<option value="-">-</option>
					<option value="소형견">소형견</option>
					<option value="중형견">중형견</option>
					<option value="대형견">대형견</option>
					<option value="고양이">고양이</option>
					<option value="기타">기타</option>
				</select>
				<select name="pet2_num" class="text-field_mari petNumberInput">
					<option value="-">-</option>
					<option value="1">1마리</option>
					<option value="2">2마리</option>
					<option value="3">3마리</option>
					<option value="over4">4+마리</option>
				</select>

				<textarea  name="condition" cols="50" rows="10" class="text-field_3 conditionInput" placeholder="반려동물 정보"></textarea>
				<textarea  name="requier" cols="50" rows="10" class="text-field_3 requirementInput" placeholder="요구 사항"></textarea>	

				<input type="submit" value="다음">
 		</form>
 		<a href="page_mat_new_2.php" class="next"> 다음</a>
	</div>


	<script src = "js/new.js"></script>
</body>
</html>
