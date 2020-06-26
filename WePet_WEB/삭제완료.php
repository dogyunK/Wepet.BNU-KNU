<?php
	$conn = mysqli_connect('localhost', 'root', '111111', 'userinfo');

	$url = getenv("QUERY_STRING");	//웹주소에서 정보 가져오기
	$idString = preg_replace("/[^0-9]*/s", "", $url);	//문자열에서 숫자만 추출하기
	$phonenumber = $_POST['phonenumber'];

	if( stristr( $url, 'dol' ) ){
		$userType = 'dol';
		$sql = "DELETE FROM 돌보미 WHERE phonenumber = '{$phonenumber}'";
	}
	if( stristr( $url, 'mat') ){
		$userType = 'mat';
		$sql = "DELETE FROM 맡기미 WHERE phonenumber = '{$phonenumber}'";
	}

    $result = mysqli_query($conn, $sql);
    
    /*
    if( $result === false ){
        echo '오류발생 <a href="page_dol_new.php">돌아가기</a>';
        echo mysqli_error($conn);
    }
    else{
        echo '성공';
    }
    */
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
				삭제되었습니다.
			</h2>

			<a href="main_<?php echo $userType;?>.php?<?php echo $userType;?>">돌아가기</a>
		</div>
	</div>
</body>
</html>