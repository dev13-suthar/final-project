<?php

include 'config.php';
include 'login.php';

$username=$_SESSION['email'];
$query="select * from infogames  where email='$username'";
$fire=mysqli_query($connection,$query);

?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container
        {
            width: 100%;
            min-height: 100vh;
            background-color:#fff;
        }
       table 
       {
        width:100%;
        border:1px solid black;
        background-color:lightyellow;

        
       }
       th
       {
        width:12%;
        height:30px;
        background-color:lightyellow;
       }
       td
       {
        width:12%;
        height:100px;
        text-align:center;
        background-color:#fff;
       }
        
       
    </style>
</head>

<body>
<div class="container">
    <div class="tittle">
    
       <table>
        <tr>
            <th>Sellid</th>
            <th>image</th>
            <th>category_of_game</th>
            <th>mobileno</th>
            <th>description</th>
            <th>price</th>
            <th>Delete</th>
        </tr>
     </table>
    </div>
     
    
    
   
   <table>
   <?php
   
       
       while($data=mysqli_fetch_assoc($fire))
       {
        $id=$data['sellid'];
    ?>
        <tr>
            
            <td><?php echo $data['sellid']?></td>
            <td></td>
            <td><?php echo $data['category_of_games']?></td>
            <td><?php echo $data['mobileno']?></td>
            <td><?php echo $data['description']?></td>
            <td><?php echo $data['price']?></td>
            <form action="" method="post">
             
                <input type="hidden" name="sellid" value="<?php echo $data['sellid']?>">
                <td><input type="submit" name="delete" value="delete" ></td>
    </form>
           
           </tr>
        <?php 
        
       
      }
    ?>
     </table> 
</div>
</body>
</html>

<?php
 
  if(isset($_POST['delete']))
  {
    $id=$_POST['sellid'];
    $delete="delete from infogames where sellid='$id'";

    $query=mysqli_query($connection,$delete);
    echo '<script> 
		alert(" order is deleted");
		window.location.href="view-order.php";
		
		</script>';
  }
 
?>