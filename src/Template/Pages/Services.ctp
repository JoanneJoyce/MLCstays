<?php
$this->layout = false;
?>

<!DOCTYPE html>
<html>
<head>
  <?= $this->Html->charset() ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Services</title>

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
      <li><a href="#" class = "contact">About Us</a></li>
      <li><a href="#" class = "login">Login</a></li>
      <li class = "login">|</li>
      <li><a href="#" class = "login">Sign Up</a></li>
    </ul>
    <ul class="side-nav" id="mobile-demo">
     <li><a href="#" class = "units">Units</a></li>
     <li><a href="#" class = "services">Services</a></li>
     <li><a href="#" class = "contact">About Us</a></li>
     <li><a href="#" class = "login">Login</a></li>
     <li><a href="#" class = "login">Sign Up</a></li>
   </ul>
 </nav>
</div>

          
      
     <div class="bgimage">
     
      <?= $this->Html->image('5.JPG') ?> <!-- random image -->
        <div class="middle caption center-align text-lighten-8">
              <h1 >COMING SOON</h1>
              <hr>
              <p id="cdtime" style="font-size:30px" ></p>
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
		<li>
        <a href="#">
          
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
