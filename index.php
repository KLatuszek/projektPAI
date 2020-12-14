<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Strona Kamil Latuszek</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="arkusz.css">
  </head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
        <h4>Nagłówek</h4>
        </div>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="pracownicy.php">EMPLOYEES</a></li>
        <li><a href="register.php">SIGN UP</a></li>

        <li><a href="login.php">LOGIN</a></li>
         <li><a href="logout.php">LOGOUT</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Kategorie
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php
            $menu = array('kategoria_1.php'=>'Kategoria_1', 'kategoria_2.php'=>'Kategoria_2', 'kategoria_3.php'=>'Kategoria_3');
            foreach ($menu as $key => $value):
            ?>
  <li><a href="<?php echo $key?>"><?php echo $value?></a></li>
<?php endforeach ?>
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
</nav>



<!-- Container (The Band Section) -->
<div id="band" class="container text-left">
 
  <h3>THE BAND</h3>
  <p><em>We love music!</em></p>
  <p>We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
  <p><em><strong>Lorem ipsum, dolor sit, amet consectetur adipisicing elit.</strong></em><br>
   Sunt et molestiae recusandae distinctio, delectus molestias, facere nostrum, quam tempore fuga optio harum? Hic temporibus nisi deleniti quis enim fugit ratione! Lorem ipsum dolor sit, amet, consectetur adipisicing elit. Atque quibusdam iure ducimus sed, ipsum corrupti deleniti, minima voluptas molestias laboriosam reprehenderit, nam architecto! Ab, deserunt sed libero fuga aut, exercitationem!Lorem ipsum? <br>
           <?php include 'dynamicmenu.php';?>

    </div>



<!-- Footer -->
<footer class="text-center">
  <p>Stopka Laboratorium PAI</p> 
</footer>
<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
<script src="lightbox-plus-jquery.min.js"></script>
</script>


</body>
</html>
