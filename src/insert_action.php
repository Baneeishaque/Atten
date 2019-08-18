<?php
	include 'dbconfig.php';
	session_start();

	@$u = $_SESSION["user"];
	if (false) {
		echo '<div id="box"><label>Un-Auhtorised Access</label></div>';
	  } else {
	$name = $_POST['name'];
    $branch = $_POST['branch'];
    $semester = $_POST['semester'];

    $conn = new mysqli($host, $username, $password, $dbname);
    
    $sql = "SELECT max(`rno`) FROM student";
    //echo $sql."<br/>";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $no = $row["max(`rno`)"];
    //echo $no;
    if($no=="")
    {
        $no=10000;
        //echo $no;
    }
    
    $sql = "INSERT INTO `student`(rno,`name`, `branch`, `semester`) VALUES ($no+1,'$name','$branch','$semester')";
    // use exec() because no results are returned
    $conn->query($sql);
    echo "New record created successfully";
    header("Refresh : 2,URL= admin_das.php");



	  }
?>