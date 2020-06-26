<?php
    $conn = mysqli_connect('localhost', 'root', '111111', 'userinfo');

    $url = getenv("QUERY_STRING");	//웹주소에서 정보 가져오기
	$idString = preg_replace("/[^0-9]*/s", "", $url);	//문자열에서 숫자만 추출하기
    $accept = 0;



    if( stristr( $url, 'dol' ) ){
        $userType = 'dol';
		$sql = "SELECT * FROM 돌보미 WHERE id={$idString}";
	}
	if( stristr( $url, 'mat' ) ) {
        $userType = 'mat';
		$sql = "SELECT * FROM 맡기미 WHERE id={$idString}";
	}

	$result = mysqli_query($conn, $sql);

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

    echo $idString;

    if( stristr( $url, 'dol' ) ){
        $sql = "UPDATE 돌보미 SET accept = '1' WHERE id = {$idString}";	
        $sql2 = "UPDATE 맡기미 SEt accept = '1' WHERE phonenumber = {$code}";
	}
	if( stristr( $url, 'mat') ){
        $sql = "UPDATE 맡기미 SET accept = '1' WHERE id = {$idString}";	
        $sql2 = "UPDATE 돌보미 SEt accept = '1' WHERE phonenumber = {$code}";
	}

    $result = mysqli_query($conn, $sql);
    $result = mysqli_query($conn, $sql2);
  
    
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
	
			<h1>매칭을 수락했습니다.</h1>

			<a href="main.php"> 돌아가기</a>
		</div>
	</div>
</body>
</html>