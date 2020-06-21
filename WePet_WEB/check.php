<?php
    $conn = mysqli_connect('localhost', 'root', '111111', 'userinfo');

    $userType = $_POST['userType'];
    $phonenumber = $_POST['phonenumber'];


    if( $userType == 'dol' ){
        $sql = "SELECT * FROM 돌보미";
    }
    else if( $userType == 'mat' ){
        $sql = "SELECT * FROM 맡기미";
    }

    
	$result = mysqli_query($conn, $sql);
	$list = '';


    // 테이블에서 일치하는 전화번호의 행을 다 불러와야함.
	while($row = mysqli_fetch_array($result) ){
        $list = $list.
            "<li>
                <a href='page_mat_list.php?id={$row['dolID']}'> {$row['name']} </a>
            </li>";
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
				요청하신 정보입니다.
			</h2>

            <?=$list;?>

			<a href="main.php"> 돌아가기</a>
			<a href="조회하기.php"> 다시 조회하기</a>
		</div>
	</div>
</body>
</html>