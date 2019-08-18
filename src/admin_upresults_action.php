<?php 
include 'dbconfig.php';
$conn = new mysqli($host, $username, $password, $dbname);
$id = $_GET['id'];
$name = $_POST['name'];
$branch = $_POST['branch'];
$semester = $_POST['semester'];
$sql = "UPDATE `student` SET `name`='$name',`branch`='$branch',`semester`='$semester' WHERE `rno`='$id'";
$result = $conn->query($sql);
echo 'The Student Information With =';
echo $id;
echo 'Was Updated';
?>