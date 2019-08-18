<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>


<head>
<title>Take Attendance</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
<style media="all" type="text/css">@import "../css/all.css";</style>
</head>
<body>
<div id="main">
<div id="header">
<a href="index.html" class="logo"><img src="../img/logos.gif" width="501" height="50" alt=""/></a>
<ul id="top-navigation">
<li><span><span><a href="user_das.php">Options</a></span></span></li>
<li class="active"><span><span><a href="user_attend.php">Take Attendance</a></span></span></li>
<li><span><span><a href="user_view.php">View Attendance</a></span></span></li>
<li><span><span><a href="../index.php">Logout</a></span></span></li>
</ul>
</div>
<div id="middle">
<div id="left-column">

</div>
<div id="center-column">
    <form action="user_attend_2_p.php" method="POST">
<table class="listing form" cellpadding="0" cellspacing="0">
<tr>
	<th class="full">Take ATTENDANCE</th>

<tr>
	<td><label>Branch :</label></td>
	<td>
	<select name="branch">
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
	<select name="semester">
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
	<td><label>Period :</label></td>
	<td>
	<select name="period">
  <option value="p1">Period 1</option>
  <option value="p2">Period 2</option>
  <option value="p3">Period 3</option>
  <option value="p4">Period 4</option>
  <option value="p5">Period 5</option>
  
	</select>
	</td>
</tr>

<tr>
	<td></td>
	<td><input type="submit" value="SUBMIT"></td>
</tr>
</form>
</table>
</body>


</html>
