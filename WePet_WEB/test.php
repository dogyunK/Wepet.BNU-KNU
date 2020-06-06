<?php


$conn = mysqli_connect('localhost', 'root', '111111', 'userinfo');

$sql = "
    INSERT INTO 돌보미
        (name, password)
        VALUES(
            '{$_POST['name']}',
            '{$_POST['password']}'
        )
";

$result = mysqli_query($conn, $sql);

if( $result === false ){
    echo '오류발생';
    error_log(mysqli_error($conn));
}
else{
    echo '성공 <a href="page_dol_match.php">돌아가기</a>';
}

?>