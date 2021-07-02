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
    	$nameErr=$passwordErr="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["name"])) {
        $nameErr = "Name is required";
      } else {
          $name = test_input($_POST["name"]);
      
       // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
          $nameErr = "Only letters and white space allowed";
        }
        }


        if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
        } else {
          $password = test_input($_POST["password"]);
      
              if (strlen($_POST["password"]) <= '8') {
                $passwordErr = "Your Password Must Contain At Least 8 Characters!";
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


     <h2><b>Log In to Your Account</b></h2><br><br>
    <form action="welcome.php" method="post">
      User Name: <input name="name" type="text" value="<?php if(isset($_COOKIE["name"])) { echo $_COOKIE["name"]; } ?>">
       <span class="error">* <?php echo $nameErr;?></span>
      <br>
     	<br><br>
     	Password: <input name="password" type="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
      <span class="error">* <?php echo $passwordErr;?></span>
     	<br><br>
     	<input type="checkbox" name="remember" /> Remember me
     	<br><br>
     	<input type="submit" value="Login">
        <a href="forget_pass.php">Forget Your Password</a>
     </form>

     <?php include 'Footer.php';?>

     	
    </body>
    </html>