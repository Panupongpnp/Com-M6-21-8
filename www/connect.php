<?php
$connect = new mysqli('localhost', 'root', '', 'classicmodels');

if ($connect->connect_error) {
die("เชือมต่อฐานข้อมูลไม่ได้: " . $connect->connect_error);
}
?>