<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme The Band</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.boots
            ?>trapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="lightbox.css" rel="stylesheet" />
  <link href="lightbox.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="arkusz.css">
  
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
    <div class="container-fluid">
        <h4>Kategoria_2</h4>
        </div>
        
        
<script src="C:\xampp\lightbox2-2.11.3\dist\js\lightbox.js"></script>
<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
  <div class="container-fluid">
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
        <li><a href="#foto">Produkt drugi</a></li>
        <li><a href="index.php">HOME</a></li>
       
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">PHP_Kategorie
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <?php
            $menu = array('kategoria_1.php'=>'Kategoria_1','kategoria_2.php'=>'Kategoria_2','kategoria_3.php'=>'Kategoria_3');
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
    
    <div>
   
      
     
    </div>
    <div style="width:300px; height:400px; margin:0px auto; float:left;">
    
    <a class="example-image-link" href="2.jpg" data-lightbox="example-2" data-title="Optional caption."><img class="example-image" src="2.jpg" alt="image-1"/></a>
    
 
</div>
<div style="width:200px; height:auto; margin:0px auto; float:left;">
<p class="text-center"><strong>143 zl </strong></p><br>
<p> opis opis opis opis opis opis opis opis</p>
</div>
    <hr />


    <div style="clear:both"></div>

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" data-toggle="tooltip" title="Visit w3schools">www.w3schools.com</a></p> 
</footer>
<div class="container-fluid">
    <h4>Stopka</h4>
    </div>
   
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
  });
})
<script src="lightbox-plus-jquery.min.js"></script>
</script>

</body>
</html>
