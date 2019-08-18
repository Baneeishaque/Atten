<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
<title>View Attendance</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
<style media="all" type="text/css">@import "../css/all.css";</style>
</head>
<body>
<?php
session_start();
include 'dbconfig.php';
@$u=$_SESSION["user"];
if($u!="staff")
{
	echo '<div id="box"><label>Un-Auhtorised Access</label></div>';
}
else
{	
	
	
    // output data of each row
    
		echo '
		
<div id="main">
<div id="header">
    <a href="index.html" class="logo"><img src="../img/logos.gif" width="501" height="50" alt=""/></a>
<ul id="top-navigation">
<li><span><span><a href="user_das.php">Options</a></span></span></li>
<li><span><span><a href="user_attend.php">Take Attendance</a></span></span></li>
<li class="active"><span><span><a href="user_view.php">View Attendance</a></span></span></li>
<li><span><span><a href="index.php">Logout</a></span></span></li>
</ul>
</div>
<div id="middle">
<div id="left-column">

</div>
<div id="center-column">
<table class="listing form" cellpadding="0" cellspacing="0">
<tr>
	<th class="full">VIEW ATTENDANCE</th>
</th>
<table class="listing form" cellpadding="0" cellspacing="0">
<tr>
	<th class="full">SEARCH RESULT</th>
</th>
<tr>
	<th class="full">Register No</th>
	<th class="full">Name </th>
	<th class="full">Pre/Absc </th>
</tr>';
$conn = new mysqli($host, $username, $password, $dbname);
	$date = $_POST['date'];
	$branch = $_POST['branch'];
	$semester = $_POST['semester'];
	$sql1 = "SELECT `name` FROM `student` WHERE `rno`=''";
	$result2 = $conn->query($sql1);
	
	
	$sql = "SELECT `student`.`name`,`attendence`.`date`, `attendence`.`branch`, `attendence`.`semester`, `attendence`.`register no`, `attendence`.`presence` FROM `attendence`,`student` WHERE `attendence`.`date`='$date' AND `attendence`.`branch`='$branch' AND `attendence`.`semester`='$semester' AND `student`.`rno`=`attendence`.`register no` ";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
	echo '
<tr>
	
	<td>'. $row["register no"]; echo'</td>
	<td>'. $row["name"]; echo '</td>
	<td>'. $row["presence"]; echo '</td>
</tr>';
}
} else {
    echo "No Data ";
}
}	
?>	
</table>

</body>

</html>


