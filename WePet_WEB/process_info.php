<?php

$userType = $_POST['userType'];

$name = $_POST['name'];
$phonenumber = $_POST['phonenumber'];
$date1 = $_POST['date_start'];
$date2 = $_POST['date_end'];
$area1 = $_POST['sim_addr'];
$area2 = $_POST['sim_addrex'];
$addrex = $_POST['addrex'];
$Condition = $_POST['Condition'];
$requierment = $_POST['requier'];

// db에 접속
$conn = mysqli_connect('localhost', 'root', '111111', 'userinfo');

// db에 보낼 sql문
if( $userType == 'dol'){
    $sql = "INSERT INTO 돌보미 (name, phonenumber, date1, date2, area1, area2, addrex, dolCondition, requierment) VALUES(
            '{$name}', '{$phonenumber}',
            '{$date1}', '{$date2}',
            '{$area1}', '{$area2}', '{$addrex}',
            '{$Condition}', '{$requierment}'
        )
    ";
}
if( $userType == 'mat'){
    $sql = "INSERT INTO 맡기미 (name, phonenumber, date1, date2, area1, area2, addrex, matCondition, requierment) VALUES(
            '{$name}', '{$phonenumber}',
            '{$date1}', '{$date2}',
            '{$area1}', '{$area2}', '{$addrex}',
            '{$Condition}', '{$requierment}'
        )
    ";
}


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