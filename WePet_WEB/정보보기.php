<?php
	$conn = mysqli_connect('localhost', 'root', '111111', 'userinfo');

	$url = getenv("QUERY_STRING");	//웹주소에서 정보 가져오기
	$idString = preg_replace("/[^0-9]*/s", "", $url);	//문자열에서 숫자만 추출하기


	if( stristr( $url, 'dol' ) ){
		$userType = 'dol';
		$sql = "SELECT * FROM 돌보미 WHERE id={$idString}";
	}
	if( stristr( $url, 'mat') ){
		$userType = 'mat';
		$sql = "SELECT * FROM 맡기미 WHERE id={$idString}";
	}
	
	
	$result = mysqli_query($conn, $sql);
	$list = '';

	while($row = mysqli_fetch_array($result) ){
        $list = $list.
            "
				<h1>{$row['name']}님의 정보입니다.</h1>
				<p>전화번호 : {$row['phonenumber']}</p>
				<p>날짜 : {$row['date1']} ~ {$row['date2']}</p>
				<p>지역 : {$row['area1']} {$row['area2']} {$row['addrex']}</p>
				<p>기타</br>{$row['userCondition']} {$row['requierment']}</p>
            ";
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
				정보
			</h2>

			<?=$list;?>
			
			<form action="신청완료.php?id=<?php echo $idString;?>/<?php echo $userType;?>" method="POST">
				<input type="text" name="phonenumber" class="text-field_1 numberInput" placeholder="연락처">
				<input type="submit" class="submit-btn" value="이사람과 매칭하기"></br>
				<a href="main_dol.php">돌아가기</a>
			</form>

		</div>
	</div>
</body>
</html>
