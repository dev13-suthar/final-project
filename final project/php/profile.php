<?php

include 'config.php';
include 'login.php';


$ulogin=$_SESSION['email'];


  $login=mysqli_query($connection,  "SELECT * FROM account WHERE email = '$ulogin'");
  $row=mysqli_fetch_array($login);

?>

<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="\final project\css\editprofile.css">
  <title>Document</title>
  
</head>
<body>
  <div class="container">
    <div class="name">Personal Information</div>
    <div class="images">
      <img src="\final project\images\dummyuser.jfif"><br>
      <span>Welcome</span>
    </div>
    <div class="information">

    <form method="post">
      <table>
        <tr>
          <th>First Name</th>
          <td><input type="text" value=<?php echo $row['firstname'];?> name="fname"></td>
        </tr>
        <tr>
          <th>Last Name</th>
          <td><input type="text" name="lname" value=<?php echo $row['lastname'];?> ></td>
        </tr>
        <tr>
          <th>Mobile No</th>
          <td><input type="tel" value=<?php echo $row['mobileno'];?> name="mobileno"></td>
        </tr>
        <tr>
        <tr>
          <th>Email</th>
          <td><?php echo $row['email'];?></td>
        </tr>
        <tr>
         
          <th><input type="submit" value="update" name="update"></th>
          <th><button class="password"><a href="\final project\php\changepassword.php">Change Password</a></button></th>
        </tr>
        <tr>
          <td><button class="back"><a href="\final project\php\index.php">Back</button></td>
        </tr>
      </table>
</form>
      
    </div>
  </div>
  
</body>
</html>
<?php

if(isset($_POST['update']))
{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $mobileno=$_POST['mobileno'];

 if((!empty($fname)) && (!empty($lname)) && (!empty($mobileno)))
 {

  $update=mysqli_query($connection,"update account set firstname='$fname' , lastname='$lname' ,mobileno='$mobileno' where email='$ulogin'");

 }
}

?>