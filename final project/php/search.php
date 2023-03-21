
<?php

  include 'config.php';
  include 'login.php';
  
 $username=$_SESSION['email'];
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

    <!-- Vendor Script -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="\final project\css\search.css">
        <style>
          #img img{
            height:400px;
            width:440px;
            transform: rotate(0deg);
            left:4px;

          }
         </style>
        
</head>


<body>
    <nav>

        <div class="heading">

            <h4>Game Store</h4>

        </div>
        <ul class="nav-links">

          <form method="post">
            <input type="text" placeholder="enter game name" name="searchval" >
            <button type="submit" name="submit" id="search_btn"  >Search</button>
          </form>
        </ul>

    </nav>

    <?php
   
    
    if(isset($_POST['submit']))
    {
         $searchval=$_POST['searchval'];

         $search=mysqli_query($connection,"select * from infogames where category_of_games='$searchval'");
     while($data=mysqli_fetch_assoc($search))
     {
    ?>
    <div class="outer">
        <div class="container">
            <div class="imgBx" id="img">
               <img src=" <?php echo "img/".$data['images'] ?>" alt=" ">
            </div>
            <div class="details">
                <div class="content">
                    <h2><?php echo $data['category_of_games']?> <br>
                        <span>Name: <?php echo $data['firstname'].$data['lastname']?></span>
                    </h2>
                    <p>
                   <?php echo $data['description']?>
                    </p>
                    <h4 id="mobileno"><b>Mo.no:</b><?php echo $data['mobileno']?></h4>
                    <h3 id="price"> &#x20b9 <?php echo $data['price']?></h3>
                    <button type="submit">Watchlist</button>
                </div>
            </div>
        </div>
    </div>
    <?php
     }
    }
     ?>

</body>

</html>
<?php
if(isset($_POST['wathclistid']))
{
     
   
    if($data['sellid']>0)
    {
        echo '<script> 
		alert(" card is allready selected");
		window.location.href="search.php";
		
		</script>';
    }
    else
    {
        $watchlist=mysqli_query($connection,"update infogames set watchlist='$id' where email='$username' ");
        echo '<script> 
		alert("card successfully add in watchlist");
		window.location.href="search.php";
		
		</script>';
    }
}

?>