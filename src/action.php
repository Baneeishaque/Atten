<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
<title>Public Percentage View</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
<style media="all" type="text/css">@import "../css/all.css";</style>
</head>
<body>
<div id="main">
<div id="header">
<a href="index.html" class="logo"><img src="../img/logos.gif" width="501" height="50" alt=""/></a>
<br><br><br>
<ul id="top-navigation">
    <li><span><span><a href="index.php">Login</a></span></span></li>
<li><span><span><a href="pub_view.php">View Attendance</a></span></span></li>
<li class="active"><span><span><a href="pub_per_view.php">View Percentage</a></span></span></li>

</ul>
</div>
<div id="middle">
<div id="left-column">

</div>
<div id="center-column">
<table class="listing form" cellpadding="0" cellspacing="0">
<tr>
	<th class="full">VIEW PERCENTAGE</th>
</th>
<table class="listing form" cellpadding="0" cellspacing="0">
<tr>
	<th class="full">SEARCH RESULT</th>
</th>
<tr>
	<th class="full">Register No</th>
	<th class="full">Name </th>
	<th class="full">Percentage</th>
</tr>

<?php
	include 'dbconfig.php';
	$conn = new mysqli($host, $username, $password, $dbname);
	$b=$_POST['branch'];
	$s=$_POST['semester'];
	$select = "SELECT  `name`, `rno` FROM `student` WHERE `branch`='$b' and `semester`='$s'";
	$answer = $conn->query($select);
	while($row = $answer->fetch_assoc())
	{
		$rno=$row["rno"];
		echo '<tr>
		<td>'.$row["rno"].'</td>
	<td>'.$row["name"].'</td>';
	$select2 = "SELECT DISTINCT `date` FROM `attendence_p` WHERE `branch`='$b' and `sem`='$s'";
	$answer2 = $conn->query($select2);
	//echo $answer2->num_rows;
	
	$select3 = "SELECT `no` FROM `attendence_p` WHERE `branch`='$b' AND `sem`='$s' AND `rno`='$rno' AND `p1`='PRE'";
	$answer3 = $conn->query($select3);
	//echo $answer3->num_rows;
	
	echo '<td>'.($answer3->num_rows/$answer2->num_rows).'%</td></tr>';
		
	}
	

?>
	

</table>
		

</body>

</html>
