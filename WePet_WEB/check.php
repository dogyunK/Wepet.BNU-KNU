<?php
    $conn = mysqli_connect('localhost', 'root', '111111', 'userinfo');

    $userType = $_POST['userType'];
    $phonenumber = $_POST['phonenumber'];
	$idString = null;

    if( $userType == 'dol' ){
		$sql = "SELECT * FROM 돌보미 WHERE phonenumber = {$phonenumber}";
		$userTypeMsg = '돌보미';
    }
    else if( $userType == 'mat' ){
		$sql = "SELECT * FROM 맡기미 WHERE phonenumber = {$phonenumber}";
		$userTypeMsg = '맡기미';
    }

	// 조회 전화번호와 매칭된 사람의 정보
	$result = mysqli_query($conn, $sql);
	//테이블 행 값 가져오기
	while( $row = mysqli_fetch_array($result) ){
		$idString = $row['id'];
		$name = $row['name'];
		$phonenumber1 = $row['phonenumber'];
		$date1 = $row['date1'];
		$date2 = $row['date2'];
		$area1 = $row['area1'];
		$area2 = $row['area2'];
		$addrex = $row['addrex'];
		$Condition = $row['userCondition'];
		$requierment = $row['requierment'];

		$code = $row['code'];
		$accept = $row['accept'];
	}

	if( $idString === null){
		$list = "<h2>일치하는 정보가 없습니다</h2>";
	}
	else{
		$list = 
			"
			<div>
				<a href='조회하기_신청함.php?id=$idString/$userType'> 신청한 매칭 </a>
				<a href='조회하기_신청받음.php?id=$idString/$userType'> 신청받은 매칭</a>
			</div>
				<h2>{$userTypeMsg}입니다.</h2>
				<p>{$phonenumber}로 등록된 정보입니다.</p>
				<p>이름 : {$name}</p>
				<p>날짜 : {$date1} ~ {$date2}</p>
				<p>지역 : {$area1} {$area2} {$addrex}</p>
				<p>조건</br>{$Condition}</p>
				<p>요구사항</br>{$requierment}</p>
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


			<?=$list?>

			<div>
				<a href="main.php"> 돌아가기</a>
				<a href="조회하기.php"> 다시 조회하기</a>
			</div>

		</div>

	</div>
</body>
</html>