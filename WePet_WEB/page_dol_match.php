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
 	<div class="match_s_form">
 		<h1>돌보미 정보 입력</h1>
 		<form name="dol_info" action="test.php" method="POST">

 				<input type="text" name="name" class="text-field_1 nameInput" placeholder="이름">
				<input type="password" name="password" class="text-field_1 passwordInput" placeholder="비밀번호">
				<input type="submit" value="입력">

 		</form>
 		<a href="page_dol_list.php" class = "next"> 입력</a>
	</div>

	<!--데이터 입력 검사-->
	<script src = "js/match.js"></script>
</body>
</html>
 