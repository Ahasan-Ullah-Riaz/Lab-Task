<?php require_once 'db_connect.php'; 

	db_conn()

 ?>

<?php 

session_start();

$username="Teacher";
$password="admin";

if (isset($_POST['submit'])) {
  if ($_POST['uname']==$username && $_POST['pass']==$password) {
  	if(isset($_POST['remember'])) {
  		setcookie('uname', $username, time()+60*60*7);
  		setcookie('pass', $password, time()+60*60*7);
  	}
    $_SESSION['uname'] = $username;
    header("location:welcome.php");
  }
  else{
    $msg="username or password invalid";
    // echo "<script>alert('uname or pass incorrect!')</script>";
  }

}

 ?>


<link rel="stylesheet" href="style.css">


<form class="form" id="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  <table align="center">
    
    <tr>
      <th colspan="2"><h2>Login</h2></th>

    </tr>
    <?php if(isset($msg)){?>
        <tr>
          <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
        </tr>
      <?php } ?>
    <tr>
      <td>username</td>
      <td><input type="text" id="uname" name="uname" 

      		value="<?php if(isset($_COOKIE["uname"])) { echo $_COOKIE["uname"]; } ?>" 
      	>

      <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamataion-circle"></i>
            <small></small>

      </td>
    </tr>
    <tr>
      <td>password</td>
      <td><input type="password" id="password" name="pass"

      		value="<?php if(isset($_COOKIE["pass"])) { echo $_COOKIE["pass"]; } ?>" 
      	>
      	<br/>
      	<br/>
      	<i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamataion-circle"></i>
            <small></small>

      </td>
    </tr>
    <tr>
      <td align="center" colspan="2"><input type="checkbox" name="remember" value="1">Remember me</td>
    </tr>
    <tr>
      <td align="center" colspan="2"><input id="submit" type="submit" name="submit" value="login">
      	 <a href='forget_pass.php'>Change your password</a> </td>
    </tr> <br>
   
  </table>

 <script src="valid.js"></script>
  
</form>
