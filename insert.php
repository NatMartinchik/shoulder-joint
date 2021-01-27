<?php

$servername = "mysql-***.srv.***.ru";
$username = "***";
$password = "***";
$dbname = "*****";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die (mysqli_error());
$charset = "utf8";
if(!mysqli_set_charset($conn, $charset)){echo "error";}

$lname = $_POST['lname'];
$fname = $_POST['fname'];
$birthday = $_POST['birthday'];
$dropdown = $_POST['dropdown'];
$radio1 = $_POST['radio1'];
$radio2 = $_POST['radio2'];
$radio3 = $_POST['radio3'];
$radio4 = $_POST['radio4'];
$radio5 = $_POST['radio5'];
$radio6 = $_POST['radio6'];
$radio7 = $_POST['radio7'];
$radio8 = $_POST['radio8'];
$radio9 = $_POST['radio9'];
$radio10 = $_POST['radio10'];
$radio11 = $_POST['radio11'];
$radio12 = $_POST['radio12'];
$radio13 = $_POST['radio13'];
$radio14 = $_POST['radio14'];
$radio15 = $_POST['radio15'];
$radio16 = $_POST['radio16'];
$radio17 = $_POST['radio17'];
$radio18 = $_POST['radio18'];
$radio19 = $_POST['radio19'];
$radio20 = $_POST['radio20'];
$radio21 = $_POST['radio21'];
$radio22 = $_POST['radio22'];
$radio23 = $_POST['radio23'];
$radio24 = $_POST['radio24'];
$radio25 = $_POST['radio25'];
$radio26 = $_POST['radio26'];
$slider = $_POST['slider'];


$sql= "INSERT INTO shoulder (lname, fname, birthday, dropdown, radio1, radio2, radio3, radio4, radio5, radio6, radio7, radio8, radio9, radio10, radio11, radio12, radio13, radio14, radio15, radio16, radio17, radio18, radio19, radio20, radio21, radio22, radio23, radio24, radio25, radio26, slider) VALUES ('$lname', '$fname', '$birthday', '$dropdown', '$radio1', '$radio2', '$radio3', '$radio4', '$radio5', '$radio6', '$radio7', '$radio8', '$radio9', '$radio10', '$radio11', '$radio12', '$radio13', '$radio14', '$radio15', '$radio16', '$radio17', '$radio18', '$radio19', '$radio20', '$radio21', '$radio22', '$radio23', '$radio24', '$radio25', '$radio26', '$slider')";
 
$result = mysqli_query($conn,$sql); 
if ($result) {echo "Благодарим Вас за уделенное время! Данные успешно отправлены.";}
else {echo "Ошибка на сервере: данные не были отправлены.";}
header ("refresh:3; url=index.html"); 
?>
