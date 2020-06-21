<!DOCTYPE html>
<html>
<head>
	<title>반려동물의 친절한 이웃, 위펫_비앤비</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/styles.css">
	<script src = "js/jquery-3.5.1.js"></script>
</head>
<body>
	<div id="navbar">
    	<a id="logo" href="main.php">
      		<img src="images/logo.png" height="50">
    	</a>
 	</div>

	<div class="match_c_form">

 		<h1>본인의 연락처를 입력하십시오.</h1>

 		<form action="check.php" method="POST">

			<label><input type="radio" name="userType" value="dol"> 돌보미 찾기</label>
			<label><input type="radio" name="userType" value="mat"> 맡기미 찾기</label>

			<input type="text" name="phonenumber" class="text-field_1 numberInput" placeholder="연락처">

			<input type="submit" class="submit-btn" value="검색">
		</form>

	</div>
</body>
</html>