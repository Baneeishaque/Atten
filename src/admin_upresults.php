<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Admin Student Updation</title>
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
<a href="index.html" class="logo"><img src="img/logos.gif" width="501" height="50" alt=""/></a>
<ul id="top-navigation">
<li class="active"><span><span>Options</span></span></li>
<li><span><span><a href="admin_insert.php">Student Insertion</a></span></span></li>
<li><span><span><a href="admin_dele.php">Student Deletion</a></span></span></li>
<li><span><span><a href="admin_upda.php">Student Updates</a></span></span></li>
<li><span><span><a href="index.php">Logout</a></span></span></li>
</ul>
</div>
<div id="middle">
<div id="left-column">

</div>
<div id="center-column">
<table class="listing form" cellpadding="0" cellspacing="0">
<tr>
	<th class="full">UPDATE THIS STUDENT DETAIL</th>
</th>
</tr>
<tr>
	<form action="admin_upresults_action.php?id='.  $row["rno"] ; echo'" method="POST">
	<td><label>Register No :</label></td>
	<td>'.  $row["rno"] ; echo'</td>
</tr>
<tr>
	<td><label>Name :</label></td>
	<td><input value="' .  $row["name"] ;echo'" name="name" type="text"></td>
</tr>
<tr>
	<td><label>Branch :</label></td>
	<td>
	<select name="branch" value="'.  $row["branch"] ; echo' name="branch"">
  <option value="Computer">Computer</option>
  <option value="Civil">Civil</option>
  <option value="Mechanic">Mechanic</option>
  <option value="Auto-mobile">Auto-mobile</option>
  <option value="Electrical">Electrical</option>
  <option value="Electronics">Electronics</option>
	</select>
	</td>
</tr>
<tr>
	<td><label>Semester :</label></td>
	<td>
	<select name="semester" value="'.  $row["semester"] ; echo' name="semester"">
  <option value="Semester 1">Semester 1</option>
  <option value="Semester 2">Semester 2</option>
  <option value="Semester 3">Semester 3</option>
  <option value="Semester 4">Semester 4</option>
  <option value="Semester 5">Semester 5</option>
  <option value="Semester 6">Semester 6</option>
	</select>
	</td>
</tr>
<tr>
	<td></td>
	<td><input type="submit" value="UPDATE STD"></td>
	</form>
</tr>
</table>';

	 }
} else {
    echo "No Data ";
}
}
?>
</body>


</html>
