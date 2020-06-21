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
	<div class="match_c_form">
 	 <h1>조회하실 분의 연락처를 입력하십시오.</h1>
 	 <form name="dol_info" action="check.php" method="POST">


 		 <input type="text" name="phonenumber" class="text-field_1 numberInput" placeholder="연락처 입력">

 		 <input type="submit" class="submit-btn" value="검색">
 	 </form>
 	 <!--<a href="page_dol_new_2.php" class="next"> 다음</a>-->
  </div>
</body>
</html>
