<?php
	$conn = mysqli_connect('localhost', 'root', '111111', 'userinfo');

	$userType = getenv("QUERY_STRING");

	$sql = "SELECT * FROM 돌보미";
	
	$result = mysqli_query($conn, $sql);
	$list = '';

	while($row = mysqli_fetch_array($result) ){
		$list = $list.
			"<li>
				<a href='정보보기.php?id={$row['id']}/{$userType}'> {$row['name']} </a>
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
				돌보미 게시판
			</h2>

			<div>
				<a href="등록하기.php"> 등록하기</a>
				<a href="조회하기.php"> 조회하기</a>
			</div>

			<div>
				<a href="main_dol.php?dol">돌보미 게시판</a>
				<a href="main_mat.php?mat">맡기미 게시판</a>
			</div>

			<p> 등록된 돌보미 목록 </p>
            <?=$list;?>
		</div>
	</div>
</body>
</html>
