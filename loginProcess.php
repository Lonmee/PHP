<?php
$id = $_POST['id'];
$pwd = $_POST['pwd'];
$mysqli = new mysqli('win.lonmee.com', 'root', 'usbw', 'employee');
if ($mysqli->error) {
    die($mysqli->error);
}
$mysqli->set_charset('utf8');
$sql = "SELECT password, name FROM admin WHERE id=$id;";
$mysqli_result = $mysqli->query($sql);
if ($mysqli_result) {
    $row = $mysqli_result->fetch_assoc();
    if ($row['password'] == md5($pwd)) {
        header('Location: empMain.php?name='.$row['name']);
        exit();
    }
}
header('Location: login.php?errno=1');
$mysqli_result->free();
$mysqli->close();
?>