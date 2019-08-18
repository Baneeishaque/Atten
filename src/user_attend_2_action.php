<?php 
include 'dbconfig.php';
$status = array();
$idarray = array();
for($i=0;$i<$_GET['rows']; $i++)
{
	$a='atten'.$i;
	//echo $_POST[$a];
	if(isset($_POST[$a]))
	{
		array_push($status,$_POST[$a]);
	}
	else
	{
		array_push($status,'ABS');
	}
	
}
//print_r($status);

$id = $_GET['id'];
//echo $id;

$b='-';
do {
	$c = strpos($id,$b);
	//echo $c .'<br>';
	$id = substr($id,$c+1);
	//echo $id.'<br>';
	$sc=strpos($id,$b);
	$n=substr($id,0,$sc);
	//echo $n.'<br>';
	if(!$n=="")
	{
		array_push($idarray,$n);
	}
	
	
}while(strpos($id,$b));

//print_r($idarray);

$conn = new mysqli($host, $username, $password, $dbname);
$date = date("d/m/Y");

for($i=0;$i<sizeof($idarray);$i++)
{
	
	$select = "SELECT  `branch`, `semester` FROM `student` WHERE `rno`='$idarray[$i]'";
	$answer = $conn->query($select);
	$row = $answer->fetch_assoc();
	$branch = $row["branch"];
	$semester = $row["semester"];

	$sql = "INSERT INTO `attendence`(`date`, `branch`, `semester`, `register no`, `presence`) VALUES ('$date','$branch','$semester','$idarray[$i]','$status[$i]')";
	$conn->query($sql);
}

echo 'Attendance Inserted Successfully';
?>