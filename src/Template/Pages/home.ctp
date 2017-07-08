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
       <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    <a href="#">
             <?= $this->Html->image('mlclogo.png', ['class'=>'brand-logo'])?>
    </a> 
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="#" class = "units">Units</a></li>
            <li><a href="#" class = "services">Services</a></li>
            <li><a href="#" class = "contact">ContactUs</a></li>
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


<div class="slider">
    <ul class="slides">
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
    <div class="row">
      <div class="col l4 card small">
        <div class="card-image waves-effect waves-block waves-light">
          <?= $this->Html->image('pic2.png', ['class'=>'brand-logo']) ?>
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">GUESTS<i class="material-icons right">more_vert</i></span>
          <p><a href="#">This is a link</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
          <p>Here is some more information about this product that is only revealed once clicked on.</p>
        </div>
      </div>

      <div class="col l4 card small">
        <div class="card-image waves-effect waves-block waves-light">
          <?= $this->Html->image('pic2.png', ['class'=>'brand-logo']) ?>
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">MLCSTAYS<i class="material-icons right">more_vert</i></span>
          <p><a href="#">This is a link</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
          <p>Here is some more information about this product that is only revealed once clicked on.</p>
        </div>
      </div>

      <div class="col l4 card small">
        <div class="card-image waves-effect waves-block waves-light">
          <?= $this->Html->image('pic2.png', ['class'=>'brand-logo']) ?>
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">INVESTORS<i class="material-icons right">more_vert</i></span>
          <p><a href="#">This is a link</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
          <p>Here is some more information about this product that is only revealed once clicked on.</p>
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
            © 2017 MLCStays Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
</body>
</html>
