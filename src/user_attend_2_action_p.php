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

$peroid = $_GET['peroid'];
//echo $peroid;

for($i=0;$i<sizeof($idarray);$i++)
{
	
	$select = "SELECT  `branch`, `semester` FROM `student` WHERE `rno`='$idarray[$i]'";
	$answer = $conn->query($select);
	$row = $answer->fetch_assoc();
	$branch = $row["branch"];
	$semester = $row["semester"];

	$sql = "INSERT INTO `attendance_p`(`date`, `branch`, `sem`, `rno`, `$peroid`) VALUES ('$date','$branch','$semester','$idarray[$i]','$status[$i]')";
        //echo $sql;
	$conn->query($sql);
}

$sql = "SELECT status FROM attendance_p where branch='$branch' AND sem='$semester' AND date='$date'";
//echo $sql."<br/>";
$result = $conn->query($sql);

    $row = $result->fetch_assoc();
        $sta = $row["status"];
        //echo $sta."<br/>";
        $sql = "UPDATE `attendance_p` SET `status`='$sta$peroid' WHERE `date`='$date' AND `branch`='$branch' AND `sem`='$semester'";
        //echo $sql."<br/>";
        $conn->query($sql);
    

echo 'Attendance Inserted Successfully';
header("Refresh : 2,URL= user_das.php");
?>