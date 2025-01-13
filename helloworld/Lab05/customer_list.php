<?php
//– เชื่อมต่อ Database
$host = "localhost";
$mysqli = new mysqli($host,
    "root","",
    "restaurant");

//– การตั้งค่าภาษา รองรับภาษาไทย
$mysqli->set_charset("utf8");


//– Query ข้อมูล
$sql = "SELECT * FROM customers ";
$query = $mysqli->query($sql);

// while( $row = $query->fetch_assoc() ) {
//     var_dump($row);
//     echo"<br>";
// }
$rows = $query->fetch_all();
var_dump($rows);


$query->close();

//– ตัดหรือปิดการเชื่อมต่อ Database
$mysqli->close();