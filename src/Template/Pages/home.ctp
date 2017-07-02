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

    <?= $this->Html->script('jquery-2.1.4.js') ?>
    <?= $this->Html->script('materialize.js') ?>
    <?= $this->Html->script('mlc-stays-scripts.js') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="home">

  <div class="navbar-fixed">
    <nav class = "transparent">
    <a href="#">
             <?= $this->Html->image('stays-white-01.png', ['class'=>'brand-logo'])?>
    </a> 
        <ul id="nav-mobile" class="right show-on-medium-and-up">
            <li><a href="#">Units</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#">Sign Up</a></li>
        </ul>
    </nav>
  </div>


<div class="slider">
    <ul class="slides">
      <li>
       <?= $this->Html->image('me1.JPG') ?> <!-- random image -->
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
          <span class="card-title activator grey-text text-darken-4">LANDLORDS<i class="material-icons right">more_vert</i></span>
          <p><a href="#">This is a link</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
          <p>Here is some more information about this product that is only revealed once clicked on.</p>
        </div>
      </div>

    </div>
  </div>
</body>
</html>
