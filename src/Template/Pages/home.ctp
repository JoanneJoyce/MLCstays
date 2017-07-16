<?php
$this->layout = false;
?>

<!DOCTYPE html>
<html>
<head>
  <?= $this->Html->charset() ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> MLCStays</title>

  <?= $this->Html->css('materialize.css') ?>
  <?= $this->Html->css('mlcstays.css') ?>
  <?= $this->Html->css('material-icons.css') ?>

  <?= $this->Html->script('jquery-2.1.4.js') ?>
  <?= $this->Html->script('materialize.js') ?>
  <?= $this->Html->script('mlc-stays-scripts.js') ?>

</head>
<body class="home">

  <div class="navbar-fixed" id="navbar">
    <nav class = "transparent">
     <a href="#" data-activates="mobile-demo" class="button-collapse "><i class="material-icons">menu</i></a>
     <a href="#">
       <?= $this->Html->image('mlclogo.png', ['class'=>'brand-logo'])?>
     </a> 
     <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="#" class = "units">Units</a></li>
      <li><a href="#" class = "services">Services</a></li>
      <li><a href="#" class = "contact">Contact Us</a></li>
      <li><a href="#" class = "login">Login</a></li>
      <li class = "login">|</li>
      <li><a href="#" class = "login">Sign Up</a></li>
    </ul>
    <ul class="side-nav" id="mobile-demo">
     <li><a href="#" class = "units">Units</a></li>
     <li><a href="#" class = "services">Services</a></li>
     <li><a href="#" class = "contact">Contact Us</a></li>
     <li><a href="#" class = "login">Login</a></li>
     <li><a href="#" class = "login">Sign Up</a></li>
   </ul>
 </nav>
</div>

<div class="slider container-fluid">
  <ul class="slides container-fluid">
    <li>
     <?= $this->Html->image('IMG_3204.JPG') ?> <!-- random image -->
     <div class="caption center-align">
      <h3>This is our big Tagline!</h3>
      <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
    </div>
  </li>
  <li>
   <?= $this->Html->image('pic2.png') ?>  <!-- random image -->
   <div class="caption left-align">
    <h3>Left Aligned Caption</h3>
    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
  </div>
</li>
<li>
 <?= $this->Html->image('pic3.jpg') ?>  <!-- random image -->
 <div class="caption right-align">
  <h3>Right Aligned Caption</h3>
  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
</div>
</li>
<li>
 <?= $this->Html->image('pic4.jpg') ?>  <!-- random image -->
 <div class="caption center-align">
  <h3>This is our big Tagline!</h3>
  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
</div>
</li> 
</ul>
</div>

<div>
  <h4><center> ABOUT US </center></h4>
  <p><center>SOME TEXT HERE ABOUT OUR COMPANY</center></p>
  <div class="row">
    <div class="col s4">
      <div class="center">
        <div class="home-sec1-about-img">
          <?= $this->Html->image('guest.png', ['class'=>'guestImg'])?>
        </div>
        <h3>GUESTS</h3>
        <p>IMAGE HERE</p>
      </div>
    </div>
    <div class="col s4">
      <div class="center">
        <div class="home-sec1-about-img">
          <?= $this->Html->image('building.jpg', ['class'=>'guestImg'])?>
        </div>
        <h3>MLCSTAYS</h3>
        <p>IMAGE HERE</p>
      </div>
    </div>
    <div class="col s4 ">
      <div class="center">
        <div class="home-sec1-about-img">
          <?= $this->Html->image('investors.png', ['class'=>'guestImg'])?>
        </div>
        <h3>INVESTORS</h3>
        <p>IMAGE HERE</p>
      </div>
    </div>
  </div>

</div>

<footer class="page-footer">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">Footer Content</h5>
        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Links</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      <p>Connect with us: </p>
      <ul class="footer-social-links list-unstyled list-inline">
        <li>
          <a href="#">
          <?= $this->Html->image('fb-logo.png', ['class' => 'facebook']) ?>
          </a>
        </li>
        <li href="#">
          <a>
            <?= $this->Html->image('instagram-logo.png', ['class' => 'facebook']) ?>
          </a>
        </li>
      </ul>
      © 2017 MLCStays
      <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
    </div>
  </div>
</footer>
</body>
</html>
