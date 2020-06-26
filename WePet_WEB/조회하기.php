<!DOCTYPE html>
<html>
<head>
	<title>반려동물의 친절한 이웃, 위펫_비앤비</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/styles.css">
	<script src = "js/jquery-3.5.1.js"></script>

	<script type="text/javascript">
		function check_onclick() {
			if (document.dol_info.phonenumber.value == "") {
				alert("전화번호를 입력하지 않았습니다.")
				document.dol_info.phonenumber.focus()
				return false;
			}
			document.dol_info.submit();
		}
	</script>

</head>
<body>
	<div id="navbar">
    	<a id="logo" href="main.php">
      		<img src="images/logo.png" height="50">
    	</a>
 	</div>

	<div class="match_c_form">

 		<h1>본인의 연락처를 입력하십시오.</h1>

 		<form name="dol_info" onsubmit="return check_onclick();" action="check.php" method="POST">

			<label><input type="radio" name="userType" value="dol" checked="checked"> 돌보미 </label>
			<label><input type="radio" name="userType" value="mat"> 맡기미 </label>

			<input type="text" name="phonenumber" class="text-field_1 numberInput" placeholder="연락처">

			<input type="submit"  onclick="check_onclick()" class="submit-btn" value="검색">
		</form>

	</div>
</body>
</html>