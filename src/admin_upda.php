<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Admin Student Updation</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
<style media="all" type="text/css">@import "../css/all.css";</style>
</head>
<body>
<?php
session_start();

@$u=$_SESSION["user"];
if(false)
{
	echo '<div id="box"><label>Un-Auhtorised Access</label></div>';
}
else
{	
echo '
<div id="main">
<div id="header">
<a href="index.html" class="logo"><img src="../img/logos.gif" width="501" height="50" alt=""/></a>
<ul id="top-navigation">
<li><span><span><a href="admin_das.php">Options</a></span></span></li>
<li><span><span><a href="admin_insert.php">Student Insertion</a></span></span></li>
<li><span><span><a href="admin_dele.php">Student Deletion</a></span></span></li>
<li class="active"><span><span><a href="admin_upda.php">Student Updates</a></span></span></li>
<li><span><span><a href="../index.php">Logout</a></span></span></li>
</ul>
</div>
<div id="middle">
<div id="left-column">

</div>
<div id="center-column">
<table class="listing form" cellpadding="0" cellspacing="0">
<tr>
	<th class="full">UPDATE A STUDENT</th>
</th>
</tr>
<tr>
	<form action="admin_upresults.php" method="POST">
	<td><label>Register No :</label></td>
	<td><input type="text" name="id"></td>
</tr>
<tr>
	<td></td>
	<td><input type="submit" name="submit" value="SEARCH"></td>
</tr>
</table>
<br>

<br>
';
}
?>
</body>


</html>
