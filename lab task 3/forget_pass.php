<!DOCTYPE html>
<html>
<head>

	<style>
.error {color: #FF0000;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}





</style>
</head>
<body>


<div class="topnav">
    <a class="active" href="#elearning">E-Learning</a>
    <a href="homepage.php">Welcome Page</a>
    <a href="login.php">Login</a>
    <a href="Formvalidation.php">Registration Form</a>
    <a href="Fileupload.html">Image Upload</a>
</div>


	

	<?php
	$current_passwordErr=$new_passwordErr=$retype_new_passwordErr="";
	$current_prev_password= 87654321;


	if ($_SERVER["REQUEST_METHOD"] == "POST") {



  if (empty($_POST["current_password"])) {
    $current_passwordErr = "current_password is required";
  } else {
      $current_password = test_input($_POST["current_password"]);
   
   if (($_POST["current_password"]) != $current_prev_password) {
            $current_passwordErr = "Your current_password did not match";
    }
    }


      if (empty($_POST["new_password"])) {
    $new_passwordErr = "new_password is required";
    } else {
      $new_password = test_input($_POST["new_password"]);
  
          if (strlen($_POST["new_password"]) < 8) {
            $new_passwordErr = "Your Password Must Contain At Least 8 Characters!";
        }
  
    }



     if (empty($_POST["retype_new_password"])) {
    $retype_new_passwordErr = "password is required";
    } else {
      $retype_new_password = test_input($_POST["retype_new_password"]);
  
          if (($_POST["retype_new_password"]) != $new_password) {
            $retype_new_passwordErr = "Your Password did not match with new password";
        }
  
    }





}
    function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



    
 <h2>New Password Section</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">  
	<label>Current Password: <input type="current_password" name="current_password"></label>
	 <span class="error">* <?php echo $current_passwordErr;?></span><br><br>
	<label>New Password: <input type="new_password" name="new_password"></label>
	 <span class="error">* <?php echo $new_passwordErr;?></span><br><br>
	<label>Retype New Password: <input type="retype_new_password" name="retype_new_password"></label>
	<span class="error">* <?php echo $retype_new_passwordErr;?></span><br><br>
	<input type="Submit">
	<?php include 'Footer.php';?>

</form>
</body>
</html>



