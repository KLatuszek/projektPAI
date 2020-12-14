<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>strona Kamil Latuszek</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="lightbox.css" rel="stylesheet" />
  <link href="lightbox.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="arkusz.css">
  
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
    <div class="container-fluid">
        <h4>Kategoria Trzecia</h4>
        </div>
        
        
<script src="lightbox.js"></script>
<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
  <div class="container-fluid">
    <div class="navbar-header">
      
      <a class="navbar-brand" href="#myPage">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="pracownicy.php">EMPLOYEES</a></li>
          <li><a href="register.php">SIGN UP</a></li>
        <li><a href="login.php">LOGIN</a></li>
         <li><a href="logout.php">LOGOUT</a></li>
          <li><a href="index.php">HOME</a></li>
       
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Kategorie
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <?php
            $menu = array('kategoria_1.php'=>'Kategoria 1','kategoria_2.php'=>'Kategoria 2','kategoria_3.php'=>'Kategoria 3');
            foreach ($menu as $key => $value):
            ?>
            <li><a href="<?php echo $key?>"><?php echo $value?></a></li>
<?php endforeach ?>
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="foto" class="container text-center"></div>
<section>
  <div style="width:500px; height:auto; margin:0px auto; float:center;">
  <p class="text-center"><strong>Pierwszy produkt</strong></p><br>
  <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in pulvinar nunc. Aliquam bibendum eros felis, et dictum leo hendrerit ac. Morbi non tincidunt quam. Sed quam felis, gravida quis quam vel, semper viverra massa. Suspendisse id metus porta enim scelerisque congue sed sed tortor. Suspendisse congue tincidunt eros vitae iaculis. Nam sed odio eget sem porttitor consequat. </p>
  </div>

    <div style="width:20%; height:400px; margin:0px auto; float:center;text-align: center">
    <p class="text-center"><strong>120zl </strong></p><br>
   <a class="example-image-link" href="http://lokeshdhakar.com/projects/lightbox2/images/image-3.jpg" data-lightbox="example-3" data-title="Optional caption."><img class="example-image" src="1Produkt3img.jpg" alt="image-1"/></a>
    
 
</div>
    <div style="clear:both"></div>

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
        $("#myCarousel").carousel("cycle");
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  };
})
<script src="lightbox-plus-jquery.min.js"></script>
</script>

</body>
</html>
