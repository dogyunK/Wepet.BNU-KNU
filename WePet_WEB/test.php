<?php

$name = $_POST['name'];
$password = $_POST['password'];

// db에 접속
$conn = mysqli_connect('localhost', 'root', '111111', 'userinfo');

// db에 보낼 sql문
$sql = " INSERT INTO 돌보미 (name, password) VALUES('{$name}', '{$password}') ";

// db로 sql문 실행
$result = mysqli_query($conn, $sql);

if( $result === false ){
    echo '오류발생 <a href="page_dol_match.php">돌아가기</a>';
    echo mysqli_error($conn);
}
else{
    echo '성공 <a href="page_dol_match.php">돌아가기</a>';
}

?>