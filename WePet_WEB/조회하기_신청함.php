<?php
    $conn = mysqli_connect('localhost', 'root', '111111', 'userinfo');

    $url = getenv("QUERY_STRING");	//웹주소에서 정보 가져오기
	$idString = preg_replace("/[^0-9]*/s", "", $url);	//문자열에서 숫자만 추출하기
    $name = null;

    if( stristr( $url, 'dol' ) ){
		$userType = 'dol';
		$sql = "SELECT * FROM 돌보미 WHERE id={$idString}";
	}
	if( stristr( $url, 'mat') ){
		$userType = 'mat';
		$sql = "SELECT * FROM 맡기미 WHERE id={$idString}";
	}

    $result = mysqli_query($conn, $sql);

	// 조회자의 정보
	while( $row = mysqli_fetch_array($result) ){
        $user = $row['name'];
        $accept = $row['accept'];
		$phonenumber = $row['phonenumber'];
    }

    // 가져온 조회자의 폰번호로 매칭이 있나 확인
    if( stristr( $url, 'dol' ) ){
		$sql = "SELECT * FROM 맡기미 WHERE code = {$phonenumber}";
	}
	if( stristr( $url, 'mat') ){
		$sql = "SELECT * FROM 돌보미 WHERE code = {$phonenumber}";
    }

    $result = mysqli_query($conn, $sql);

    // 상대방의 정보
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
        $accept2 = $row['accept'];
    }

    if( $name === null){ // 등록된 정보가 없을 때
        $list = "<h2>신청한 매칭 정보가 없습니다</h2>
        <a href='main_dol.php?dol'>매칭 찾아보기</a></br>";
	}
	else{   // 등록된 정보가 있을 때( 매칭 신청을 했을 때 )

        if( $accept2 == 1 ){
            $accept = '매칭되었습니다.';
            $list = 
			"
				<h1><b>{$user}</b>님과 매칭된 상대</h1>
				<p>이름 : {$name}</p>
				<p>날짜 : {$date1} ~ {$date2}</p>
				<p>지역 : {$area1} {$area2} {$addrex}</p>
				<p>조건</br>{$Condition}</p>
				<p>요구사항</br>{$requierment}</p>
                <h2><b>{$accept}</b></h2>
                <h2><b>연락처 : {$phonenumber1}</b></h2>
			";
        }
        else if( $accept2 == 0 ){
            $accept = '상대방의 수락 대기중';
            $list = 
			"
				<h1><b>{$user}</b>님과 매칭을 대기중인 상대</h1>
				<p>이름 : {$name}</p>
				<p>날짜 : {$date1} ~ {$date2}</p>
				<p>지역 : {$area1} {$area2} {$addrex}</p>
				<p>조건</br>{$Condition}</p>
				<p>요구사항</br>{$requierment}</p>
				<h2><b>{$accept}</b></h2>
			";
        }
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
			
            <?=$list;?>
			
    
			<a href="main.php"> 돌아가기</a>
			<a href="조회하기.php"> 다시 조회하기</a>
		</div>
	</div>
</body>
</html>