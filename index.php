<?php
session_start();
$page="";
if(empty($_SESSION) && empty($_GET)){
  $page ='registr.html';
}elseif(isset($_GET['s'])){
  $page ='signin.html';
}
else{
  $page ='carousel.html';
}

 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="node_modules/materialize-css/dist/css/materialize.css" media="screen,projection" type="text/css">
    <link rel="stylesheet" href="css/my.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
    <title>Easy-movie</title>
  </head>
  <body>

    <div class="header">
      <?php include('navbar.php')?>
    </div>
    <div class="row">
      <div class="col s1"></div>
       <?php include($page)?>
      <div class="col s1"></div>
      </div>
   <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>        
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script type="text/javascript" src="node_modules/materialize-css/dist/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/my.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('.car-slider').slick({
        dots: true,
        speed:800,
        arrows:true,
        touchMove:true,
        touchThreshold:15,
        infinite: true,
        autoplay:true,
        autoplaySpeed:2000,
      });
    });
    </script>
  </body>
</html>
