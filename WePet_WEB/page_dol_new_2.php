<!DOCTYPE html>
<html>
<head>
	<title>돌보미 - 위펫_비앤비</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/styles.css">
	<script src = "js/jquery-3.5.1.js"></script>
</head>
<body>
	<div id="navbar">
    	<a id="logo" href="page_1.php">
      		<img src="images/logo.png" height="50">
    	</a>
 	</div>
 	<div class="match_c_form">
 		<h1>돌봄조건 & 요구사항</h1>
		<form>
				<textarea  name="condition" cols="50" rows="10" class="text-field_3 conditionInput" placeholder="돌봄 조건"></textarea>
				<textarea  name="requier" cols="50" rows="10" class="text-field_3 requirementInput" placeholder="요구 사항"></textarea>
				<a href="page_dol_new_3.php" class="next"> 제출하기</a>
 		</form>
	</div>

	<!--데이터 입력 검사-->
	<script src="js/new2.js"></script>
</body>
</html>