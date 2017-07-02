<?php
    $this->layout = false;
?>

<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MLCStays</title>

    <?= $this->Html->css('materialize.min.css') ?>

    <?= $this->Html->script('jquery-2.1.4.js') ?>
    <?= $this->Html->script('materialize.min.js') ?>
    <?= $this->Html->script('mlc-stays-scripts.js') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body class="home">

    <nav>
        <div class="nav-wrapper">
            <a href="#"><?= $this->Html->image('mlclogo.png') ?></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#">Login</a></li>
                <li><a href="#">Sign Up</a></li>
            </ul>
        </div>
    </nav>


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

  </div>
</body>
</html>
