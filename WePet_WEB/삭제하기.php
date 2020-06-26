<?php
	$conn = mysqli_connect('localhost', 'root', '111111', 'userinfo');

	$url = getenv("QUERY_STRING");	//웹주소에서 정보 가져오기
	$idString = preg_replace("/[^0-9]*/s", "", $url);	//문자열에서 숫자만 추출하기

	if( stristr( $url, 'dol' ) ){
		$userType = 'dol';
	}
	if( stristr( $url, 'mat') ){
		$userType = 'mat';
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
				삭제 : 등록한 전화번호를 입력하세요.
			</h2>

			<form action="삭제완료.php?id=<?php echo $idString;?>/<?php echo $userType;?>" method="POST">
				<input type="text" name="phonenumber" class="text-field_1 numberInput" placeholder="연락처">
				<input type="submit" class="submit-btn" value="삭제"></br>
			</form>
		
            <a href="정보보기.php?id=<?php echo $idString;?>/<?php echo $userType;?>">취소</a>

		</div>
	</div>

</body>
</html>