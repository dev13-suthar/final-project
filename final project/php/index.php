<?php
session_start();
include 'config.php';
// include 'login.php';
?>

<?php 


// when click button of login
if(isset($_POST['login']))
{
  
  //create session 
  $_SESSION['username']=$_POST['username'];
  $_SESSION['password']=$_POST['log_password'];
 
  //session value store in variable 
$ulogin=$_SESSION['username'];
$log_password=$_SESSION['password'];

  $login=mysqli_query($connection,  "SELECT * FROM account WHERE email = '$ulogin' AND password = '$log_password'");
  $row=mysqli_fetch_array($login);
 

  if($row['email'] == $_SESSION['username'] && $row['password'] == $_SESSION['password'] ) 
  {

    // create session
    $_SESSION['firstname']=$row['firstname'];
    $_SESSION['lastname']=$row['lastname'];
    $_SESSION['mobileno']=$row['mobileno'];
    $_SESSION['email']=$row['email'];
    
    $_SESSION['login'] =true;
    // header('location:index.php');
  }

  else
  {
    echo '<script> 
		alert(" username and password invalid");
		window.location.href="//localhost/final project/html/login.html";
		
		</script>';
  }}
if(isset($_SESSION['login']))
{
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="\final project\css\main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
  <!-- Header Section -->
  <div class="header">
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <h3 id="logo"> Game Store</h3>
        </div>
        <nav>
          <ul id="MenuItems">
            <li><a href="\final project\php\index.php">Home</a></li>
            <li><a href="\final project\php\search.php">Buy</a></li>
            <li><a href="\final project\php\sellpage.php">Sell</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="\final project\php\profile.php">Edit Profile</a></li>
            <li><a href="">Watchlist</a></li>
            <li><a href="\final project\html\login.html">Log Out</a></li>
          </ul>
        </nav>
        <a href="\final project\php\view-order.php"><img src="https://i.ibb.co/PNjjx3y/cart.png" alt="" width="30px" height="30px" /></a>
        <img src="https://i.ibb.co/6XbqwjD/menu.png" alt="" class="menu-icon" onclick="menutoggle()" />
      </div>
      <div class="row">
        <div class="col-2">
          <h1>
            Welcome to <br />
            Our website
          </h1>
          <p>
            Our website provide is gaming plateform.
            <br />Our website is provide buy and sell game account.
          </p>
          <a href="#" target="_blank" rel="noopener noreferrer" class="btn">Explore Now →</a>
        </div>
        <div class="col-2">
          <img src="\final project\images\OIP.jfif" alt="" />
        </div>
      </div>
    </div>
  </div>



  <!--latest games account-->
  <h2 class="title">Latest Games Account </h2>
  <div class="row">
    <div class="col-4">
      <img src="\final project\images\freefire.jfif" alt="" />
      <h4>Free Fire</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>

      <p>₹5000.00</p>
    </div>

    <div class="col-4">
      <img src="\final project\images\cod.jfif" alt="" />
      <h4>Call of Duty</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <p>₹1400.00</p>
    </div>

    <div class="col-4">
      <img src="\final project\images\valorant.jfif" alt="" />
      <h4>Valorant</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <p>₹3500.00</p>
    </div>

    <div class="col-4">
      <img src="\final project\images\valorant.jfif" alt="" />
      <h4>Valorant</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <p>₹3500.00</p>
    </div>
  </div>

  <div class="row">
    <div class="col-4">
      <img src="\final project\images\cor.jfif" alt="" />
      <h4>Clash of Royal</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <p>₹1500.00</p>
    </div>

    <div class="col-4">
      <img src="\final project\images\pubg.jfif" alt="" />
      <h4>Battle Ground Mobile india</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <p>₹4500.00</p>
    </div>
    <div class="col-4">
      <img src="\final project\images\pubg.jfif" alt="" />
      <h4>Battle Ground Mobile india</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <p>₹4500.00</p>
    </div>
    <div class="col-4">
      <img src="\final project\images\pubg.jfif" alt="" />
      <h4>Battle Ground Mobile india</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <p>₹4500.00</p>
    </div>


  </div>
  </div>


  <!-- Testimonial -->


  <hr>
  <h2 class="title">Contact Us </h2>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">sector-26,</div>
          <div class="text-two">Gandhinagar</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+91 635 409 0080</div>
          <div class="text-two">+91 635 409 0080 </div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">kirti123@gmail.com</div>
          <div class="text-two">abc@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any work from me or any types of quries related , you can send me message from here. It's my
          pleasure to help you.</p>
        <form action="#">
          <div class="input-box">
            <input type="text" placeholder="Enter your name">
          </div>
          <div class="input-box">
            <input type="text" placeholder="Enter your email">
          </div>
          <div class="input-box message-box">

          </div>
          <div class="button">
            <input type="button" value="Send Now">
          </div>
        </form>
      </div>
    </div>
  </div>
  <hr>
  <!-- footer -->
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col-1">
          <h3>Access </h3>
          <p>Website access by Any Browser</p>
          <div class="app-logo">
            <img src="\final project\images\browser.webp" alt="" />

          </div>
        </div>

        <div class="footer-col-2">
          <img src="\final project\images\gmaccount.jpg" alt="" />
          <p>
            Our Purpose Is To Sustainably Make the Pleasure and Benefits of
            game Id plateform.
          </p>
        </div>

        <div class="footer-col-3">
          <h3>Useful Links</h3>
          <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Contact Us</a></li>
            <li><a href="">Sell</a></li>
            <li><a href="">Buy</a></li>
          </ul>
        </div>

        <div class="footer-col-4">
          <h3>Follow us</h3>
          <ul>
            <li>Facebook</li>
            <li>Twitter</li>
            <li>Instagram</li>

          </ul>
        </div>
      </div>
      <hr>
      <p class="copyright">Copyright &copy; 2021 - Game Store</p>
    </div>
  </div>

</body>

<?php
}else{?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Lato", sans-serif
    }

    .w3-bar,
    h1,
    button {
      font-family: "Montserrat", sans-serif
    }

    .fa-anchor,
    .fa-coffee {
      font-size: 200px
    }

    nav {
      display: flex;
      justify-content: space-around;
      align-items: center;
      min-height: 8vh;
      background-color: rgb(172, 57, 57);
      font-family: "Montserrat", sans-serif;
    }

    .heading {
      color: white;
      text-transform: uppercase;
      letter-spacing: 5px;
      font-size: 20px;
    }

    .nav-links {
      display: flex;
      justify-content: space-around;
      width: 30%;
    }

    .nav-links li {
      list-style: none;
    }

    .nav-links a {
      position: absolute;
      color: white;
      text-decoration: none;
      letter-spacing: 3px;
      font-weight: bold;
      font-size: 14px;
      padding: 14px 16px;
      /* justify-content: flex-end; */
      right: 50px;
      /* margin: auto; */
      top: 5px;

    }
  </style>

</head>

<body>

  <!-- Navbar -->
  <nav>
    <div class="heading">
      <h4>Game Store</h4>
    </div>
    <ul class="nav-links">

      <li><a href="\final project\html\login.html">login</a></li>
    </ul>
  </nav>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
  </div>
  </div>

  <!-- Header -->
  <header class="w3-container w3-red w3-center" style="padding:128px 16px">
    <h1 class="w3-margin w3-jumbo">OUR WEBSITE</h1>
    <p class="w3-xlarge"></p>
    <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Get Started</button>
  </header>

  <!-- First Grid -->
  <div class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content">
      <div class="w3-twothird">
        <h1>About us</h1>
        <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
          laboris nisi ut aliquip ex ea commodo consequat.</h5>

        <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
          laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
          occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur
          adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco
          laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>

      <div class="w3-third w3-center">
        <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
      </div>
    </div>
  </div>

  <!-- Second Grid -->
  <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
    <div class="w3-content">
      <div class="w3-third w3-center">
        <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
      </div>

      <div class="w3-twothird">
        <h1>Features</h1>
        <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
          laboris nisi ut aliquip ex ea commodo consequat.</h5>

        <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
          laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
          occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur
          adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco
          laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
  </div>

  <div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the day: live life</h1>
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-64 w3-center w3-opacity">


  </footer>



</body>
<?php } ?>

</html>
<script>
  var MenuItems = document.getElementById('MenuItems');
  MenuItems.style.maxHeight = '0px';

  function menutoggle() {
    if (MenuItems.style.maxHeight == '0px') {
      MenuItems.style.maxHeight = '200px';
    } else {
      MenuItems.style.maxHeight = '0px';
    }
  }

</script>