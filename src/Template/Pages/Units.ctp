<?php
$this->layout = false;
?>

<!DOCTYPE html>
<html>
<head>
  <?= $this->Html->charset() ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Units</title>

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
      <li><a href="#Units" class = "units">Units</a></li>
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



       

  <div class="row">
          <div id="Units" class="section scrollspy">
             <h4><center> Units </center></h4>
          </div>
  </div>
  <div class="row">

      <div class="col 14">
            <div class= "waves-effect waves-block waves-light" data-target="m1">
             <?= $this->Html->image('1.jpg', ['class'=>'products']) ?>
            </div>
             <!-- Modal m1 -->
             <div id="m1" class="modal">
                <div class="modal-content">
                 <h4><center>Condo #1</center></h4>
                  <h5 class="price light grey-text text-lighten-7"><center>$20.00</center></h5>
                  <hr/>
                   <div class="carousel">
                      <a class="carousel-item" href="#one!"><?= $this->Html->image('1.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" href="#two!"><?= $this->Html->image('2.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" href="#three!"><?= $this->Html->image('3.jpg',['class'=>'products1']) ?></a>
                   </div>
                   <hr/>
                  <h4>About:</h4>

                  <h5>The Manor House Inn was awarded one of the Top 10 Best Inns in the US. It is located in the beautiful tree lined West Street Historic District, one of Bar Harbor's most convenient in town locations. The inn is just a short walk to all village shopping, restaurants and ocean front activities. In addition Acadia National Park is just 1 mile away. Manor House Inn consists of the original three story Victorian Mansion, built in 1887
                  </h5>
                  <hr/>
                  <div class="col 14">
                  <h4 id = "country">Country</h4>
                  
                  <h4>Address</h4>
                  </div>
                  <div class="col 14">
                  <h4>:Singapore</h4>
                  <h5>:Circuit Rd. Building 45, Blk 13 room 32</h5>
                  </div>
                </div>
             </div>
             
             
          <div class="caption center-align">
             <h4><center>1(Condo)</center></h4>
             <h5 class="price light grey-text text-lighten-7"><left>$20.00</left></h5>
             <button data-target="m2" class="waves-effect waves-light btn">Book</button>
          </div>

          <!-- Modal m2 -->
         <div class="modal" id="m2" tabindex="-1" role="dialog" >
              <div class="modal-dialog">
                <div class="modal-content">
             <!-- Modal Header -->
                  <div class="modal-header">
                    <h2 id="Productlabel"><center>1(Condo)</center></h2>
                    <hr/>
                  </div>
                  
            <!-- Modal Body -->
             <div class="modal-body">
                    <!-- Product info -->
                  <div  class = "col 14" id = "details">
                    <h3>Details:</h3>
                    <div class="col 14">
                       <h4>Beds</h4>   
                       <h4>Nightly Rate</h4>
                       <hr/>
                    <h4>Also Available</h4>
                    <div class="col 14">
                         <h5>:Jetski </h5>
                         <h5>:Gym    </h5>
                         <h5>:CarPark</h5>
                        <btn type="close" class="btn waves-effect waves-light" 
                        data-dismiss="modal.close">Cancel</btn> <!--closing ng modal fixe-->
                       <h5></h5>
                    </div>
                    <div class="col 14">
                         <h5> = $5.00</h5>
                         <h5> = $0.00</h5>
                         <h5> = $0.00</h5>
                         <a href = "#">
                          <btn class="btn waves-effect waves-light" >Continue</btn> <!--closing ng modal fixe-->
                         </a> 
                    </div>
                    </div>
                    <div class="col 14">
                       <h4 id = "bedcount">:2 Master Beds</h4>
                       <h4 id = "productrate">:$20.00</h4>
  
                    </div>
                    
                  </div>


 
             </div>

            
        </div>

    </div>
</div> <!-- end modal m2 -->

          
     </div>
     <!-- 2nd unit-->
     <div class="col 14">
        
            <div class= "waves-effect waves-block waves-light" data-target="m3">
             <?= $this->Html->image('5.jpg', ['class'=>'products']) ?>
            </div>

            <div class="caption left-align">
            <h4 >2(condo)</h4>
            <h5 class="price light grey-text text-lighten-7">$25.00</h5>
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
