<?php
	include 'process_dol_info.php';

	$sql = "SELECT * FROM 돌보미";
	
	$result = mysqli_query($conn, $sql);
	$list = '';

	while($row = mysqli_fetch_array($result) ){
		$list = $list."<li><a href='page_mat_list.php?id={$row['dolID']}'>{$row['name']}</a></li>";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>맡기미 - 위펫_비앤비</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/styles.css">
	<script src = "js/jquery-3.5.1.js"></script>
</head>
<body>
	<div id="navbar">
    	<a id="logo" href="main.php">
      		<img src="images/logo.png" height="50">
    	</a>
 	</div>
 	<div class="match_c_form">
 		<h1>등록된 매칭 목록</h1>
		
		<?=$list;?>
		

 		<a href="page_mat_new.php"> 선택하기</a>
	</div>
</body>
</html>
