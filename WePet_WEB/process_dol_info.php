<?php

$name = $_POST['name'];
$phonenumber = $_POST['phonenumber'];
$area1 = $_POST['sim_addr'];
$area2 = $_POST['sim_addrex'];
$date1 = $_POST['date_start'];
$date2 = $_POST['date_end'];
$addr = $_POST['addr'];
$addrex = $_POST['addrex'];
$dolCondition = $_POST['dolCondition'];
$requierment = $_POST['requier'];

// db에 접속
$conn = mysqli_connect('localhost', 'root', '111111', 'userinfo');

// db에 보낼 sql문
$sql = "INSERT INTO 돌보미 (name, phone, date1, date2, area1, area2, addr, addrex, dolCondition, requierment) VALUES(
            '{$name}', '{$phonenumber}',
            '{$date1}', '{$date2}',
            '{$area1}', '{$area2}',
            '{$addr}', '{$addrex}',
            '{$dolCondition}', '{$requierment}'
        )
";

// db로 sql문 실행
if( $name != NULL && $phonenumber != NULL && $area1 != NULL && $area2 != NULL && $date1 != NULL && $date2 != NULL && $addr != NULL && $addrex != NULL && $dolCondition != NULL && $requierment != NULL){

    $result = mysqli_query($conn, $sql);

    if( $result === false ){
        echo '오류발생 <a href="main.php">돌아가기</a>';
    }
    else{
        echo '등록성공';
    }

}




?>