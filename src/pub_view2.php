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
                    <li><span><span><a href="index.php">Login</a></span></span></li>
                    <li class="active"><span><span><a href="pub_view.php">View Attendance</a></span></span></li>
                    <li><span><span><a href="pub_per_view.php">View Percentage</a></span></span></li>
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
	<th class="full">P1 </th>
        <th class="full">P2 </th>
        <th class="full">P3 </th>
        <th class="full">P4 </th>
        <th class="full">P5 </th>
</tr>';
            $conn = new mysqli($host, $username, $password, $dbname);
            $date = $_POST['date'];
            $branch = $_POST['branch'];
            $semester = $_POST['semester'];
            $sql1 = "SELECT `name` FROM `student` WHERE `rno`=''";
            $result2 = $conn->query($sql1);


            $sql = "SELECT `student`.`name`,`attendance_p`.`date`, `attendance_p`.`branch`, `attendance_p`.`sem`, `attendance_p`.`rno`, `attendance_p`.`p1`,`attendance_p`.`p2`,`attendance_p`.`p3`,`attendance_p`.`p4`,`attendance_p`.`p5` FROM `attendance_p`,`student` WHERE `attendance_p`.`date`='$date' AND `attendance_p`.`branch`='$branch' AND `attendance_p`.`sem`='$semester' AND `student`.`rno`=`attendance_p`.`rno` ";
            
            //echo $sql;
            
            $result = $conn->query($sql);

            echo '<tr>';
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    if($row["p1"]!='0')
                    {
                        echo '
	
	<td>' . $row["rno"];
                    echo'</td>
	<td>' . $row["name"];
                    echo '</td>
	<td>' . $row["p1"];
                    echo '</td>';
                    }
 
                    
                    if($row["p2"]!='0')
                    {
                        echo '

	
	
	<td>' . $row["p2"];
                    echo '</td>';
                    }
                    
                    if($row["p3"]!='0')
                    {
                        echo '
	
	
	<td>' . $row["p3"];
                    echo '</td>';
                    }
                    
                    if($row["p4"]!='0')
                    {
                        echo '
	

	<td>' . $row["p4"];
                    echo '</td>';
                    }
                    
                    if($row["p5"]!='0')
                    {
                        echo '
	
	
	<td>' . $row["p5"];
                    echo '</td>';
                    }
                  
                }
                echo '</tr>'; 
            } else {
                echo "No Data ";
            }
        }
        ?>	
        </table>

    </body>

</html>


