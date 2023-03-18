<?php

include 'config.php';
include 'login.php';

if(isset($_POST['update']))
{
    $username=$_SESSION['username'];
    $oldpassword=$_POST['oldpassword'];
    $newpassword=$_POST['newpassword'];
   
    
    $query=mysqli_query($connection,  "SELECT * FROM account WHERE email = '$username'");
    $row=mysqli_fetch_array($query);

    if($row['password']==$oldpassword)
    {
        
        $update=mysqli_query($connection,"update account set password='$newpassword', confirm_password='$newpassword' where email='$username'");
       
        header('location:\final project\php\profile.php');
      

    }
    else
    {
        echo '<script> 
		alert(" old password is unvalid");
		window.location.href="profile.php";
		</script>';
    }
   

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link real="stylesheet" href="editprofile.css">
    <title>Change Password</title>
</head>
<body>
    
<div class="container">



  <form action="" method="post">

  <input type="password"  name="oldpassword" minlength="8" maxlength="16"
          placeholder="Enter old password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required /><br>
          <input type="password"  name="newpassword" minlength="8" maxlength="16"
          placeholder="Enter new  password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required /><br>
   <input type="submit" name="update" value="update">
</form>

</div>
    
</body>
</html>