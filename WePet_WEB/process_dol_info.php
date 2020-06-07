<?php

$name = $_POST['name'];
$password = $_POST['password'];
$phonenumber = $_POST['phonenumber'];
$date1 = $_POST['date_start'];
$date2 = $_POST['date_end'];
$addr = $_POST['addr'];
$addrex = $_POST['addrex'];
$dolCondition = $_POST['dolCondition'];
$requierment = $_POST['requierment'];

// db에 접속
$conn = mysqli_connect('localhost', 'root', '111111', 'userinfo');

// db에 보낼 sql문
$sql = "INSERT INTO 돌보미 (name, password, phone, date1, date2, addr, addrex, dolCondition, requierment) VALUES(
            '{$name}',
            '{$password}',
            '{$phonenumber}',
            '{$date1}',
            '{$date2}',
            '{$addr}',
            '{$addrex}',
            '{$dolCondition}',
            '{$requierment}'
        )
";

// db로 sql문 실행
$result = mysqli_query($conn, $sql);

if( $result === false ){
    echo '오류발생 <a href="page_dol_new.php">돌아가기</a>';
    echo mysqli_error($conn);
}
else{
    echo '등록성공';
}

?>