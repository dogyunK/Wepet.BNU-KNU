<?php

	$conn = mysqli_connect('localhost', 'root', '111111', 'userinfo');

	$phonenumber = $_POST['phonenumber'];

	$url = getenv("QUERY_STRING");	//웹주소에서 정보 가져오기
	$idString = preg_replace("/[^0-9]*/s", "", $url);	//문자열에서 숫자만 추출하기

	echo $idString;
	echo $phonenumber;
	if( stristr( $url, 'dol' ) ){
		$userType = 'dol';
		$sql = "UPDATE 돌보미 SET code = '{$phonenumber}' WHERE id = {$idString}";
	}
	if( stristr( $url, 'mat') ){
		$userType = 'mat';
		$sql = "UPDATE 맡기미 SET code = '{$phonenumber}' WHERE id = {$idString}";
	}

	$result = mysqli_query($conn, $sql);

	if( $result === false ){
		echo '오류발생';
		echo mysqli_error($conn);
	}
	else{
		echo '등록성공';
	}
?>

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
 	<div class="main">
 		<div class="info">
			<h2>
				신청되었습니다.
			</h2>

			<div>
				<a href="main.php"> 돌아가기</a>
			</div>
		</div>
	</div>
</body>
</html>
