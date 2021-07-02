<!DOCTYPE HTML>  
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
    <a class="active" href="#elearning">E-learning</a>
    <a href="homepage.php">Welcome Page</a>
    <a href="login.php">Login</a>
    <a href="Formvalidation.php">Registration Form</a>
    <a href="Fileupload.html">Image Upload</a>
</div>





  

<?php
 $message = ''; 
  $error = '';   
  // define variables and set to empty values
$nameErr = $emailErr = $date_of_birthErr = $genderErr = $degreeErr = $blood_groupErr ="";
$name = $email = $date_of_birth = $gender = $degree = $blood_group = "";
if(isset($_POST["submit"]))  {

   if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
    $name = test_input($_POST["name"]);
    
       // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
              $nameErr = "Only letters and white space allowed";
          }
    } if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
    $email = test_input($_POST["email"]);
    
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }
  }
 
  if (empty($_POST["date_of_birth"])) {
      $date_of_birthErr = "date_of_birth is required";
    } else {
    $date_of_birth = test_input($_POST["date_of_birth"]);
    }
   if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
    } else {
    $gender = test_input($_POST["gender"]);
    }
   
    if (empty($_POST["degree"])) {
      $degreeErr = "Degree is required";
    } else {
    $degree = test_input($_POST["degree"]);
    }

  if (empty($_POST["blood_group"])) {
      $blood_groupErr = "Blood_Group is required";
    } else {
    $blood_group = test_input($_POST["blood_group"]);
  }


          
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     "name"               =>     $name,  
                     'email'          =>     $email,  
                     'date_of_birth'     =>     $date_of_birth,
                     'gender'     =>     $gender,  
                     'degree'     =>     $degree,
                      'blood_group'     =>     $blood_group,
                );  
                // $array_data[] = array_map('utf8_encode', $extra);

                $array_data[] = $extra;

                $final_data = json_encode($array_data);  

                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Successfully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      
  



}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

  <h2 align="">Append Data to JSON File</h2><br />                 
                <form method="post" action="#">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  

  Name: <input type="text" name="name">
   <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
   <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <label for="date_of_birth">Date Of Birth:</label>
  <input type="date" id="" name="date_of_birth" value="<?php echo $date_of_birth;?>">
   <span class="error">* <?php echo $date_of_birthErr;?></span>
  <br><br>
  Gender:
    <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  Degree: 
  <input type="checkbox" name="degree" value="ssc">SSC
  <input type="checkbox" name="degree" value="hsc">HSC
  <input type="checkbox" name="degree" value="bsc">Bsc
  <input type="checkbox" name="degree" value="msc">Msc
   <span class="error">* <?php echo $degreeErr;?></span>
  <br><br>
  Blood Group:
  <label><b>Select a blood group :</b></label>
  <br>
  <select name="blood_group">
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
          </select>
             <span class="error">* <?php echo $blood_groupErr;?></span>
  <br><br>
   <input type="submit" name="submit" value="Submit" class="btn btn-info" /><br />                      
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  

<?php include 'Footer.php';?>
</form>
</body>
</html>
