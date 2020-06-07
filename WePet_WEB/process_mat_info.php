<?php

$name = $_POST['name'];
$password = $_POST['password'];
$phoneNumber = $_POST['phoneNumber'];
$date1 = $_POST['date_start'];
$date2 = $_POST['date_end'];
$pet1 = $_POST['pet1'];
$pet1_num = $_POST['pet1_num'];
$pet2 = $_POST['pet2'];
$pet2_num = $_POST['pet2_num'];

// db에 접속
$conn = mysqli_connect('localhost', 'root', '111111', 'userinfo');

// db에 보낼 sql문
$sql = "INSERT INTO 맡기미 (name, password, phone, date1, date2, pet1, pet2, petnumber1, petnumber2) VALUES(
            '{$name}',
            '{$password}',
            '{$phoneNumber}',
            '{$date1}',
            '{$date2}',
            '{$pet1}',
            '{$pet2}',
            '{$pet1_num}',
            '{$pet2_num}'
        )
";

// db로 sql문 실행
$result = mysqli_query($conn, $sql);

if( $result === false ){
    echo '오류발생 <a href="page_mat_new.php">돌아가기</a>';
    echo mysqli_error($conn);
}
else{
    echo '등록성공';
}

?>