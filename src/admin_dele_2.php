<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>


<head>
<title>Admin Student Deletion</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
<style media="all" type="text/css">@import "css/all.css";</style>
</head>
<body>
<?php
session_start();
include 'dbconfig.php';
@$u=$_SESSION["user"];
if($u!="admin")
{
	echo '<div id="box"><label>Un-Auhtorised Access</label></div>';
}
else
{
	$conn = new mysqli($host, $username, $password, $dbname);
	$id = $_POST['id'];
	$sql = "SELECT `rno`,`name`,`branch`,`semester` FROM `student` WHERE `rno`='$id'";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
		echo '
<div id="main">
<div id="header">
<a href="index.php" class="logo"><img src="img/logos.gif" width="501" height="50" alt=""/></a>
<ul id="top-navigation">
<li><span><span><a href="admin_das.php">Options</a></span></span></li>
<li><span><span><a href="admin_insert.php">Student Insertion</a></span></span></li>
<li class="active"><span><span><a href="admin_dele.php">Student Deletion</a></span></span></li>
<li><span><span><a href="admin_upda.php">Student Updates</a></span></span></li>
<li><span><span><a href="index.php">Logout</a></span></span></li>
</ul>
</div>
<div id="middle">
<div id="left-column">

</div>
<div id="center-column">
<br>
<table class="listing form" cellpadding="0" cellspacing="0">
<tr>
	<th class="full">SEARCH RESULT</th>
</th>
</tr>
<tr>
	<td><label>Register No :</label></td>
	<td><label>'.  $row["rno"] ; echo '</label></td>
</tr>
<tr>
	<td><label>Name :</label></td>
	<td><label>'.  $row["name"] ; echo '</label></td>
</tr>
<tr>
	<td><label>Branch :</label></td>
	<td><label>'.  $row["branch"] ; echo '</label></td>
</tr>
<tr>
	<td><label>Semester :</label></td>
	<td><label>'.  $row["semester"] ;echo '</label></td>
</tr>
<tr>
	<td></td>
	<form action="admin_dele_action.php?id='.  $row["rno"] ;echo '" method="POST">
	<td><input type="submit" name="submit" value="DELETE"></td>
	</form>
</tr>
</table>';
		 }
} else {
    echo "No Data Inside Database<br>";
}
}
?>
</body>
</html>