<?php include 'navbar.php';?>


<?php 

session_start();

if (isset($_SESSION['uname'])) {
	echo "<h1> Welcome ".$_SESSION['uname']."</h1>";
	echo "<a href='chapter.php'>Manage Course Chapter</a><br>";
	echo "<a href='formvalidation.php'>Register New Student</a><br>";

	echo "<br><a href='logout.php'>Logout</a><br>";

}
else{
		header("location:login.php");
		// echo "<script>location.href='login.php'</script>";
	}

 ?>
 <?php include 'Footer.php';?>


