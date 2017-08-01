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

  <div class="navbar-fixed " id="navbar">
    <nav class = "transparent">
     <a href="#" data-activates="mobile-demo" class="button-collapse "><i class="material-icons">menu</i></a>
     <a href="#">
       <?= $this->Html->image('mlclogo.png', ['class'=>'brand-logo'])?>
     </a> 
     <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="#units" class = "units">Units</a></li>
      <li><a href="#services" class = "services">Services</a></li>
      <li><a href="#aboutus" class = "contact">About Us</a></li>
      <li><a href="#" class = "login">Login</a></li>
      <li class = "login">|</li>
      <li><a href="#" class = "login">Sign Up</a></li>
    </ul>
    <ul class="side-nav" id="mobile-demo">
     <li><a href="#untis" class = "units">Units</a></li>
     <li><a href="#services" class = "services">Services</a></li>
     <li><a href="#aboutus" class = "contact">About Us</a></li>
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

<!-- icons ng mlc., what we do (1. 2. 3. ) -->
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
  <hr/>
  <hr/>
  <hr/>




            <!-- Product Grid is 5units per row -->

<div class="row">
          <div id="units" class="section scrollspy">
             <h4><center> UNITS </center></h4>
             <h5><center>units intro here</center></h5>
          </div>
</div>
  <div class="row">
      <div class="col 14">
      <!-- 1st product -->
            <div class= "waves-effect waves-block waves-light" data-target="m1">
             <?= $this->Html->image('/units/bayside miami 1/u1.jpg', ['class'=>'products']) ?>
            </div>
             <!-- Modal m1 -->
             <div id="m1" class="modal">
                <div class="modal-content">
                 <h4><center>Condo #1</center></h4>
                  <h5 class="price light grey-text text-lighten-7"><center>$20.00</center></h5>
                  <hr/>
                   <div class="carousel">
                      <a class="carousel-item" ><center>picname1</center><?= $this->Html->image('/units/bayside miami 1/u2.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname2</center><?= $this->Html->image('/units/bayside miami 1/u3.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname3</center><?= $this->Html->image('/units/bayside miami 1/u4.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname4</center><?= $this->Html->image('/units/bayside miami 1/u5.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname5</center><?= $this->Html->image('/units/bayside miami 1/u6.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname6</center><?= $this->Html->image('/units/bayside miami 1/u7.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname7</center><?= $this->Html->image('/units/bayside miami 1/u8.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname8</center><?= $this->Html->image('/units/bayside miami 1/u9.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname9</center><?= $this->Html->image('/units/bayside miami 1/u10.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname10</center><?= $this->Html->image('/units/bayside miami 1/u11.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname11</center><?= $this->Html->image('/units/bayside miami 1/u12.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname12</center><?= $this->Html->image('/units/bayside miami 1/u13.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname13</center><?= $this->Html->image('/units/bayside miami 1/u14.jpg',['class'=>'products1']) ?></a>
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
             <h4><center>Bayside Miami 1</center></h4>
             <h5 class="price light grey-text text-lighten-7"><left>$20.00</left></h5>
             <button data-target="b1" class="waves-effect waves-light btn">Book</button>
          </div>

          <!-- Modal b1 -->
         <div class="modal" id="b1" tabindex="-1" role="dialog" >
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
</div> <!-- end modal b1 -->   
     </div><!-- end of product 1-->
     <!-- 2nd unit-->
     <div class="col 14">
            <div class= "waves-effect waves-block waves-light" data-target="m2">
             <?= $this->Html->image('/units/bayside miami 2/u1.jpg', ['class'=>'products']) ?>
            </div>
             <!-- Modal m -->
             <div id="m2" class="modal">
                <div class="modal-content">
                 <h4><center>Condo #1</center></h4>
                  <h5 class="price light grey-text text-lighten-7"><center>$20.00</center></h5>
                  <hr/>
                   <div class="carousel">
                      <a class="carousel-item" ><center>picname1</center><?= $this->Html->image('/units/bayside miami 2/u2.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname2</center><?= $this->Html->image('/units/bayside miami 2/u3.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname3</center><?= $this->Html->image('/units/bayside miami 2/u4.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname4</center><?= $this->Html->image('/units/bayside miami 2/u5.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname5</center><?= $this->Html->image('/units/bayside miami 2/u6.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname6</center><?= $this->Html->image('/units/bayside miami 2/u7.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname7</center><?= $this->Html->image('/units/bayside miami 2/u8.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname8</center><?= $this->Html->image('/units/bayside miami 2/u9.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname9</center><?= $this->Html->image('/units/bayside miami 2/u10.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname10</center><?= $this->Html->image('/units/bayside miami 2/u11.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname11</center><?= $this->Html->image('/units/bayside miami 2/u12.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname12</center><?= $this->Html->image('/units/bayside miami 2/u13.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname13</center><?= $this->Html->image('/units/bayside miami 2/u14.jpg',['class'=>'products1']) ?></a>
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
             <h4><center>Bayside Miami 2</center></h4>
             <h5 class="price light grey-text text-lighten-7"><left>$20.00</left></h5>
             <button data-target="b2" class="waves-effect waves-light btn">Book</button>
          </div>
          <!-- Modal m2 -->
         <div class="modal" id="b2" tabindex="-1" role="dialog" >
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
     </div><!-- end of product 2-->
<!-- 3rd unit-->
     <div class="col 14">
            <div class= "waves-effect waves-block waves-light" data-target="m3">
             <?= $this->Html->image('/units/bayside miami 3/u1.jpg', ['class'=>'products']) ?>
            </div>
             <!-- Modal m -->
             <div id="m3" class="modal">
                <div class="modal-content">
                 <h4><center>Condo #1</center></h4>
                  <h5 class="price light grey-text text-lighten-7"><center>$20.00</center></h5>
                  <hr/>
                   <div class="carousel">
                      <a class="carousel-item" ><center>picname1</center><?= $this->Html->image('/units/bayside miami 3/u2.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname2</center><?= $this->Html->image('/units/bayside miami 3/u3.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname3</center><?= $this->Html->image('/units/bayside miami 3/u4.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname4</center><?= $this->Html->image('/units/bayside miami 3/u5.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname5</center><?= $this->Html->image('/units/bayside miami 3/u6.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname6</center><?= $this->Html->image('/units/bayside miami 3/u7.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname7</center><?= $this->Html->image('/units/bayside miami 3/u8.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname8</center><?= $this->Html->image('/units/bayside miami 3/u9.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname9</center><?= $this->Html->image('/units/bayside miami 3/u10.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname10</center><?= $this->Html->image('/units/bayside miami 3/u11.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname11</center><?= $this->Html->image('/units/bayside miami 3/u12.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname12</center><?= $this->Html->image('/units/bayside miami 3/u13.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname13</center><?= $this->Html->image('/units/bayside miami 3/u14.jpg',['class'=>'products1']) ?></a>
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
             <h4><center>Bayside Miami 3</center></h4>
             <h5 class="price light grey-text text-lighten-7"><left>$20.00</left></h5>
             <button data-target="b3" class="waves-effect waves-light btn">Book</button>
          </div>
          <!-- Modal m2 -->
         <div class="modal" id="b3" tabindex="-1" role="dialog" >
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
     </div><!-- end of product 3-->
<!-- 4th unit-->
     <div class="col 14">
            <div class= "waves-effect waves-block waves-light" data-target="m4">
             <?= $this->Html->image('/units/downtown miami lux/u1.jpg', ['class'=>'products']) ?>
            </div>
             <!-- Modal m -->
             <div id="m4" class="modal">
                <div class="modal-content">
                 <h4><center>Condo #1</center></h4>
                  <h5 class="price light grey-text text-lighten-7"><center>$20.00</center></h5>
                  <hr/>
                   <div class="carousel">
                      <a class="carousel-item" ><center>picname1</center><?= $this->Html->image('/units/downtown miami lux/u2.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname2</center><?= $this->Html->image('/units/downtown miami lux/u3.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname3</center><?= $this->Html->image('/units/downtown miami lux/u4.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname4</center><?= $this->Html->image('/units/downtown miami lux/u5.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname5</center><?= $this->Html->image('/units/downtown miami lux/u6.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname6</center><?= $this->Html->image('/units/downtown miami lux/u7.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname7</center><?= $this->Html->image('/units/downtown miami lux/u8.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname8</center><?= $this->Html->image('/units/downtown miami lux/u9.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname9</center><?= $this->Html->image('/units/downtown miami lux/u10.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname10</center><?= $this->Html->image('/units/downtown miami lux/u11.jpg',['class'=>'products1']) ?></a>
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
             <h5><center>Downtown Miami Luxury</center></h5>
             <h5 class="price light grey-text text-lighten-7"><left>$20.00</left></h5>
             <button data-target="b4" class="waves-effect waves-light btn">Book</button>
          </div>
          <!-- Modal m2 -->
         <div class="modal" id="b4" tabindex="-1" role="dialog" >
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
     </div><!-- end of product 4-->
<!-- 5th unit-->
     <div class="col 14">
            <div class= "waves-effect waves-block waves-light" data-target="m5">
             <?= $this->Html->image('/units/havana luxury 1/u1.jpg', ['class'=>'products']) ?>
            </div>
             <!-- Modal m -->
             <div id="m5" class="modal">
                <div class="modal-content">
                 <h4><center>Condo #1</center></h4>
                  <h5 class="price light grey-text text-lighten-7"><center>$20.00</center></h5>
                  <hr/>
                   <div class="carousel">
                      <a class="carousel-item" ><center>picname1</center><?= $this->Html->image('/units/havana luxury 1/u2.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname2</center><?= $this->Html->image('/units/havana luxury 1/u3.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname3</center><?= $this->Html->image('/units/havana luxury 1/u4.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname4</center><?= $this->Html->image('/units/havana luxury 1/u5.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname5</center><?= $this->Html->image('/units/havana luxury 1/u6.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname6</center><?= $this->Html->image('/units/havana luxury 1/u7.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname7</center><?= $this->Html->image('/units/havana luxury 1/u8.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname8</center><?= $this->Html->image('/units/havana luxury 1/u9.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname9</center><?= $this->Html->image('/units/havana luxury 1/u10.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname10</center><?= $this->Html->image('/units/havana luxury 1/u11.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname11</center><?= $this->Html->image('/units/havana luxury 1/u12.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname12</center><?= $this->Html->image('/units/havana luxury 1/u13.jpg',['class'=>'products1']) ?></a>
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
             <h4><center>Havana luxury 1</center></h4>
             <h5 class="price light grey-text text-lighten-7"><left>$20.00</left></h5>
             <button data-target="b5" class="waves-effect waves-light btn">Book</button>
          </div>
          <!-- Modal m2 -->
         <div class="modal" id="b5" tabindex="-1" role="dialog" >
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
     </div><!-- end of product 5-->
</div>
 <div class="row">    
<!-- 6th unit-->
     <div class="col 14">
            <div class= "waves-effect waves-block waves-light" data-target="m6">
             <?= $this->Html->image('/units/havana luxury 2/u1.jpg', ['class'=>'products']) ?>
            </div>
             <!-- Modal m -->
             <div id="m6" class="modal">
                <div class="modal-content">
                 <h4><center>Condo #1</center></h4>
                  <h5 class="price light grey-text text-lighten-7"><center>$20.00</center></h5>
                  <hr/>
                   <div class="carousel">
                      <a class="carousel-item" ><center>picname1</center><?= $this->Html->image('/units/havana luxury 2/u2.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname2</center><?= $this->Html->image('/units/havana luxury 2/u3.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname3</center><?= $this->Html->image('/units/havana luxury 2/u4.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname4</center><?= $this->Html->image('/units/havana luxury 2/u5.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname5</center><?= $this->Html->image('/units/havana luxury 2/u6.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname6</center><?= $this->Html->image('/units/havana luxury 2/u7.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname7</center><?= $this->Html->image('/units/havana luxury 2/u8.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname8</center><?= $this->Html->image('/units/havana luxury 2/u9.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname9</center><?= $this->Html->image('/units/havana luxury 2/u10.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname10</center><?= $this->Html->image('/units/havana luxury 2/u11.jpg',['class'=>'products1']) ?></a>
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
             <h4><center>Havana luxury 2</center></h4>
             <h5 class="price light grey-text text-lighten-7"><left>$20.00</left></h5>
             <button data-target="b6" class="waves-effect waves-light btn">Book</button>
          </div>
          <!-- Modal m2 -->
         <div class="modal" id="b6" tabindex="-1" role="dialog" >
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
     </div><!-- end of product 6-->
<!-- 7th unit-->
     <div class="col 14">
            <div class= "waves-effect waves-block waves-light" data-target="m7">
             <?= $this->Html->image('/units/havana luxury 3/u1.jpg', ['class'=>'products']) ?>
            </div>
             <!-- Modal m -->
             <div id="m7" class="modal">
                <div class="modal-content">
                 <h4><center>Condo #1</center></h4>
                  <h5 class="price light grey-text text-lighten-7"><center>$20.00</center></h5>
                  <hr/>
                   <div class="carousel">
                      <a class="carousel-item" ><center>picname1</center><?= $this->Html->image('/units/havana luxury 3/u2.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname2</center><?= $this->Html->image('/units/havana luxury 3/u3.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname3</center><?= $this->Html->image('/units/havana luxury 3/u4.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname4</center><?= $this->Html->image('/units/havana luxury 3/u5.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname5</center><?= $this->Html->image('/units/havana luxury 3/u6.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname6</center><?= $this->Html->image('/units/havana luxury 3/u7.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname7</center><?= $this->Html->image('/units/havana luxury 3/u8.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname8</center><?= $this->Html->image('/units/havana luxury 3/u9.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname9</center><?= $this->Html->image('/units/havana luxury 3/u10.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname10</center><?= $this->Html->image('/units/havana luxury 3/u11.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname11</center><?= $this->Html->image('/units/havana luxury 3/u12.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname12</center><?= $this->Html->image('/units/havana luxury 3/u13.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname13</center><?= $this->Html->image('/units/havana luxury 3/u14.jpg',['class'=>'products1']) ?></a>
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
             <h4><center>Havana luxury 3</center></h4>
             <h5 class="price light grey-text text-lighten-7"><left>$20.00</left></h5>
             <button data-target="b7" class="waves-effect waves-light btn">Book</button>
          </div>
          <!-- Modal m2 -->
         <div class="modal" id="b7" tabindex="-1" role="dialog" >
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
     </div><!-- end of product 7th-->
<!-- 8th unit-->
     <div class="col 14">
            <div class= "waves-effect waves-block waves-light" data-target="m7">
             <?= $this->Html->image('/units/havana luxury1BR/u1.jpg', ['class'=>'products']) ?>
            </div>
             <!-- Modal m -->
             <div id="m8" class="modal">
                <div class="modal-content">
                 <h4><center>Condo #1</center></h4>
                  <h5 class="price light grey-text text-lighten-7"><center>$20.00</center></h5>
                  <hr/>
                   <div class="carousel">
                      <a class="carousel-item" ><center>picname1</center><?= $this->Html->image('/units/havana luxury1BR/u2.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname2</center><?= $this->Html->image('/units/havana luxury1BR/u3.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname3</center><?= $this->Html->image('/units/havana luxury1BR/u4.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname4</center><?= $this->Html->image('/units/havana luxury1BR/u5.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname5</center><?= $this->Html->image('/units/havana luxury1BR/u6.jpg',['class'=>'products1']) ?></a>
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
             <h5><center>havana luxury (1 Bedroom)</center></h5>
             <h5 class="price light grey-text text-lighten-7"><left>$20.00</left></h5>
             <button data-target="b8" class="waves-effect waves-light btn">Book</button>
          </div>
          <!-- Modal m2 -->
         <div class="modal" id="b8" tabindex="-1" role="dialog" >
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
     </div><!-- end of product 8-->
<!-- 9th unit-->
     <div class="col 14">
            <div class= "waves-effect waves-block waves-light" data-target="m9">
             <?= $this->Html->image('/units/high rise miami/u1.jpg', ['class'=>'products']) ?>
            </div>
             <!-- Modal m -->
             <div id="m9" class="modal">
                <div class="modal-content">
                 <h4><center>Condo #1</center></h4>
                  <h5 class="price light grey-text text-lighten-7"><center>$20.00</center></h5>
                  <hr/>
                   <div class="carousel">
                      <a class="carousel-item" ><center>picname1</center><?= $this->Html->image('/units/high rise miami/u2.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname2</center><?= $this->Html->image('/units/high rise miami/u3.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname3</center><?= $this->Html->image('/units/high rise miami/u4.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname4</center><?= $this->Html->image('/units/high rise miami/u5.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname5</center><?= $this->Html->image('/units/high rise miami/u6.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname6</center><?= $this->Html->image('/units/high rise miami/u7.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname7</center><?= $this->Html->image('/units/high rise miami/u8.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname8</center><?= $this->Html->image('/units/high rise miami/u9.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname9</center><?= $this->Html->image('/units/high rise miami/u10.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname10</center><?= $this->Html->image('/units/high rise miami/u11.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname11</center><?= $this->Html->image('/units/high rise miami/u12.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname12</center><?= $this->Html->image('/units/high rise miami/u13.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname13</center><?= $this->Html->image('/units/high rise miami/u14.jpg',['class'=>'products1']) ?></a>
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
             <h4><center>Highrise Miami</center></h4>
             <h5 class="price light grey-text text-lighten-7"><left>$20.00</left></h5>
             <button data-target="b9" class="waves-effect waves-light btn">Book</button>
          </div>
          <!-- Modal m2 -->
         <div class="modal" id="b9" tabindex="-1" role="dialog" >
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
     </div><!-- end of product 9-->
<!-- 10th unit-->
     <div class="col 14">
            <div class= "waves-effect waves-block waves-light" data-target="m10">
             <?= $this->Html->image('/units/high rise miami 2/u1.jpg', ['class'=>'products']) ?>
            </div>
             <!-- Modal m -->
             <div id="m10" class="modal">
                <div class="modal-content">
                 <h4><center>Condo #1</center></h4>
                  <h5 class="price light grey-text text-lighten-7"><center>$20.00</center></h5>
                  <hr/>
                   <div class="carousel">
                      <a class="carousel-item" ><center>picname1</center><?= $this->Html->image('/units/high rise miami 2/u2.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname2</center><?= $this->Html->image('/units/high rise miami 2/u3.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname3</center><?= $this->Html->image('/units/high rise miami 2/u4.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname4</center><?= $this->Html->image('/units/high rise miami 2/u5.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname5</center><?= $this->Html->image('/units/high rise miami 2/u6.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname6</center><?= $this->Html->image('/units/high rise miami 2/u7.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname7</center><?= $this->Html->image('/units/high rise miami 2/u8.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname8</center><?= $this->Html->image('/units/high rise miami 2/u9.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname9</center><?= $this->Html->image('/units/high rise miami 2/u10.jpg',['class'=>'products1']) ?></a>
                      
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
             <h4><center>Highrise Miami 2</center></h4>
             <h5 class="price light grey-text text-lighten-7"><left>$20.00</left></h5>
             <button data-target="b10" class="waves-effect waves-light btn">Book</button>
          </div>
          <!-- Modal m2 -->
         <div class="modal" id="b10" tabindex="-1" role="dialog" >
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
     </div><!-- end of product 10-->
     </div>
<div class="row">
<!-- 11th unit-->
     <div class="col 14">
            <div class= "waves-effect waves-block waves-light" data-target="m11">
             <?= $this->Html->image('/units/high rise miami 3/u1.jpg', ['class'=>'products']) ?>
            </div>
             <!-- Modal m -->
             <div id="m11" class="modal">
                <div class="modal-content">
                 <h4><center>Condo #1</center></h4>
                  <h5 class="price light grey-text text-lighten-7"><center>$20.00</center></h5>
                  <hr/>
                   <div class="carousel">
                      <a class="carousel-item" ><center>picname1</center><?= $this->Html->image('/units/high rise miami 3/u2.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname2</center><?= $this->Html->image('/units/high rise miami 3/u3.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname3</center><?= $this->Html->image('/units/high rise miami 3/u4.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname4</center><?= $this->Html->image('/units/high rise miami 3/u5.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname5</center><?= $this->Html->image('/units/high rise miami 3/u6.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname6</center><?= $this->Html->image('/units/high rise miami 3/u7.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname7</center><?= $this->Html->image('/units/high rise miami 3/u8.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname8</center><?= $this->Html->image('/units/high rise miami 3/u9.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname9</center><?= $this->Html->image('/units/high rise miami 3/u10.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname10</center><?= $this->Html->image('/units/high rise miami 3/u11.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname11</center><?= $this->Html->image('/units/high rise miami 3/u12.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname12</center><?= $this->Html->image('/units/high rise miami 3/u13.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname13</center><?= $this->Html->image('/units/high rise miami 3/u14.jpg',['class'=>'products1']) ?></a>
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
             <h4><center>Highrise Miami 3</center></h4>
             <h5 class="price light grey-text text-lighten-7"><left>$20.00</left></h5>
             <button data-target="b11" class="waves-effect waves-light btn">Book</button>
          </div>
          <!-- Modal m2 -->
         <div class="modal" id="b11" tabindex="-1" role="dialog" >
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
     </div><!-- end of product 11-->
<!-- 12th unit-->
     <div class="col 14">
            <div class= "waves-effect waves-block waves-light" data-target="m12">
             <?= $this->Html->image('/units/luxury center havana/u1.jpg', ['class'=>'products']) ?>
            </div>
             <!-- Modal m -->
             <div id="m12" class="modal">
                <div class="modal-content">
                 <h4><center>Condo #1</center></h4>
                  <h5 class="price light grey-text text-lighten-7"><center>$20.00</center></h5>
                  <hr/>
                   <div class="carousel">
                      <a class="carousel-item" ><center>picname1</center><?= $this->Html->image('/units/luxury center havana/u2.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname2</center><?= $this->Html->image('/units/luxury center havana/u3.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname3</center><?= $this->Html->image('/units/luxury center havana/u4.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname4</center><?= $this->Html->image('/units/luxury center havana/u5.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname5</center><?= $this->Html->image('/units/luxury center havana/u6.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname6</center><?= $this->Html->image('/units/luxury center havana/u7.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname7</center><?= $this->Html->image('/units/luxury center havana/u8.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname8</center><?= $this->Html->image('/units/luxury center havana/u9.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname9</center><?= $this->Html->image('/units/luxury center havana/u10.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname10</center><?= $this->Html->image('/units/luxury center havana/u11.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname11</center><?= $this->Html->image('/units/luxury center havana/u12.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname12</center><?= $this->Html->image('/units/luxury center havana/u13.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname13</center><?= $this->Html->image('/units/luxury center havana/u14.jpg',['class'=>'products1']) ?></a>
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
             <h5><center>Luxury Center Havana</center></h5>
             <h5 class="price light grey-text text-lighten-7"><left>$20.00</left></h5>
             <button data-target="b12" class="waves-effect waves-light btn">Book</button>
          </div>
          <!-- Modal m2 -->
         <div class="modal" id="b12" tabindex="-1" role="dialog" >
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
     </div><!-- end of product 12-->
<!-- 13th unit-->
     <div class="col 14">
            <div class= "waves-effect waves-block waves-light" data-target="m13">
             <?= $this->Html->image('/units/luxury in soho 2BR/u1.jpg', ['class'=>'products']) ?>
            </div>
             <!-- Modal m -->
             <div id="m13" class="modal">
                <div class="modal-content">
                 <h4><center>Condo #1</center></h4>
                  <h5 class="price light grey-text text-lighten-7"><center>$20.00</center></h5>
                  <hr/>
                   <div class="carousel">
                      <a class="carousel-item" ><center>picname1</center><?= $this->Html->image('/units/luxury in soho 2BR/u2.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname2</center><?= $this->Html->image('/units/luxury in soho 2BR/u3.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname3</center><?= $this->Html->image('/units/luxury in soho 2BR/u4.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname4</center><?= $this->Html->image('/units/luxury in soho 2BR/u5.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname5</center><?= $this->Html->image('/units/luxury in soho 2BR/u6.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname6</center><?= $this->Html->image('/units/luxury in soho 2BR/u7.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname7</center><?= $this->Html->image('/units/luxury in soho 2BR/u8.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname8</center><?= $this->Html->image('/units/luxury in soho 2BR/u9.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname9</center><?= $this->Html->image('/units/luxury in soho 2BR/u10.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname10</center><?= $this->Html->image('/units/luxury in soho 2BR/u11.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname11</center><?= $this->Html->image('/units/luxury in soho 2BR/u12.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname12</center><?= $this->Html->image('/units/luxury in soho 2BR/u13.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname13</center><?= $this->Html->image('/units/luxury in soho 2BR/u14.jpg',['class'=>'products1']) ?></a>
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
             <h5><center>Luxury in soho(2BR)</center></h5>
             <h5 class="price light grey-text text-lighten-7"><left>$20.00</left></h5>
             <button data-target="b13" class="waves-effect waves-light btn">Book</button>
          </div>
          <!-- Modal m2 -->
         <div class="modal" id="b13" tabindex="-1" role="dialog" >
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
     </div><!-- end of product 13-->
<!-- 14th unit-->
     <div class="col 14">
            <div class= "waves-effect waves-block waves-light" data-target="m14">
             <?= $this->Html->image('/units/luxury in the sky/u1.jpg', ['class'=>'products']) ?>
            </div>
             <!-- Modal m -->
             <div id="m14" class="modal">
                <div class="modal-content">
                 <h4><center>Condo #1</center></h4>
                  <h5 class="price light grey-text text-lighten-7"><center>$20.00</center></h5>
                  <hr/>
                   <div class="carousel">
                      <a class="carousel-item" ><center>picname1</center><?= $this->Html->image('/units/luxury in the sky/u2.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname2</center><?= $this->Html->image('/units/luxury in the sky/u3.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname3</center><?= $this->Html->image('/units/luxury in the sky/u4.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname4</center><?= $this->Html->image('/units/luxury in the sky/u5.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname5</center><?= $this->Html->image('/units/luxury in the sky/u6.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname6</center><?= $this->Html->image('/units/luxury in the sky/u7.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname7</center><?= $this->Html->image('/units/luxury in the sky/u8.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname8</center><?= $this->Html->image('/units/luxury in the sky/u9.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname9</center><?= $this->Html->image('/units/luxury in the sky/u10.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname10</center><?= $this->Html->image('/units/luxury in the sky/u11.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname11</center><?= $this->Html->image('/units/luxury in the sky/u12.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname12</center><?= $this->Html->image('/units/luxury in the sky/u13.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname13</center><?= $this->Html->image('/units/luxury in the sky/u14.jpg',['class'=>'products1']) ?></a>
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
             <h4><center>Luxury in the sky</center></h4>
             <h5 class="price light grey-text text-lighten-7"><left>$20.00</left></h5>
             <button data-target="b14" class="waves-effect waves-light btn">Book</button>
          </div>
          <!-- Modal m2 -->
         <div class="modal" id="b14" tabindex="-1" role="dialog" >
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
     </div><!-- end of product 14-->
<!-- 15th unit-->
     <div class="col 14">
            <div class= "waves-effect waves-block waves-light" data-target="m15">
             <?= $this->Html->image('/units/makaticity/u1.jpg', ['class'=>'products']) ?>
            </div>
             <!-- Modal m -->
             <div id="m15" class="modal">
                <div class="modal-content">
                 <h4><center>Condo #1</center></h4>
                  <h5 class="price light grey-text text-lighten-7"><center>$20.00</center></h5>
                  <hr/>
                   <div class="carousel">
                      <a class="carousel-item" ><center>picname1</center><?= $this->Html->image('/units/makaticity/u2.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname2</center><?= $this->Html->image('/units/makaticity/u3.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname3</center><?= $this->Html->image('/units/makaticity/u4.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname4</center><?= $this->Html->image('/units/makaticity/u5.jpg',['class'=>'products1']) ?></a>
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
             <h4><center>Makati City view</center></h4>
             <h5 class="price light grey-text text-lighten-7"><left>$20.00</left></h5>
             <button data-target="b15" class="waves-effect waves-light btn">Book</button>
          </div>
          <!-- Modal m2 -->
         <div class="modal" id="b15" tabindex="-1" role="dialog" >
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
     </div><!-- end of product 15-->
     </div>
<div class="row">     
<!-- 16th unit-->
     <div class="col 14">
            <div class= "waves-effect waves-block waves-light" data-target="m16">
             <?= $this->Html->image('/units/Old havana luxury/u1.jpg', ['class'=>'products']) ?>
            </div>
             <!-- Modal m -->
             <div id="m16" class="modal">
                <div class="modal-content">
                 <h4><center>Condo #1</center></h4>
                  <h5 class="price light grey-text text-lighten-7"><center>$20.00</center></h5>
                  <hr/>
                   <div class="carousel">
                      <a class="carousel-item" ><center>picname1</center><?= $this->Html->image('/units/Old havana luxury/u2.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname2</center><?= $this->Html->image('/units/Old havana luxury/u3.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname3</center><?= $this->Html->image('/units/Old havana luxury/u4.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname4</center><?= $this->Html->image('/units/Old havana luxury/u5.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname5</center><?= $this->Html->image('/units/Old havana luxury/u6.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname6</center><?= $this->Html->image('/units/Old havana luxury/u7.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname7</center><?= $this->Html->image('/units/Old havana luxury/u8.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname8</center><?= $this->Html->image('/units/Old havana luxury/u9.jpg',['class'=>'products1']) ?></a>
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
             <h4><center>Old havana luxury</center></h4>
             <h5 class="price light grey-text text-lighten-7"><left>$20.00</left></h5>
             <button data-target="b16" class="waves-effect waves-light btn">Book</button>
          </div>
          <!-- Modal m2 -->
         <div class="modal" id="b16" tabindex="-1" role="dialog" >
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
     </div><!-- end of product 16-->
<!-- 17th unit-->
     <div class="col 14">
            <div class= "waves-effect waves-block waves-light" data-target="m17">
             <?= $this->Html->image('/units/Old havana luxury 2/u1.jpg', ['class'=>'products']) ?>
            </div>
             <!-- Modal m -->
             <div id="m17" class="modal">
                <div class="modal-content">
                 <h4><center>Condo #1</center></h4>
                  <h5 class="price light grey-text text-lighten-7"><center>$20.00</center></h5>
                  <hr/>
                   <div class="carousel">
                      <a class="carousel-item" ><center>picname1</center><?= $this->Html->image('/units/Old havana luxury 2/u2.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname2</center><?= $this->Html->image('/units/Old havana luxury 2/u3.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname3</center><?= $this->Html->image('/units/Old havana luxury 2/u4.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname4</center><?= $this->Html->image('/units/Old havana luxury 2/u5.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname5</center><?= $this->Html->image('/units/Old havana luxury 2/u6.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname6</center><?= $this->Html->image('/units/Old havana luxury 2/u7.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname7</center><?= $this->Html->image('/units/Old havana luxury 2/u8.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname8</center><?= $this->Html->image('/units/Old havana luxury 2/u9.jpg',['class'=>'products1']) ?></a>
                      
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
             <h4><center>Old havana luxury 2</center></h4>
             <h5 class="price light grey-text text-lighten-7"><left>$20.00</left></h5>
             <button data-target="b17" class="waves-effect waves-light btn">Book</button>
          </div>
          <!-- Modal m2 -->
         <div class="modal" id="b17" tabindex="-1" role="dialog" >
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
     </div><!-- end of product 17-->
<!-- 18th unit-->
     <div class="col 14">
            <div class= "waves-effect waves-block waves-light" data-target="m18">
             <?= $this->Html->image('/units/penthouse lux/u1.jpg', ['class'=>'products']) ?>
            </div>
             <!-- Modal m -->
             <div id="m18" class="modal">
                <div class="modal-content">
                 <h4><center>Condo #1</center></h4>
                  <h5 class="price light grey-text text-lighten-7"><center>$20.00</center></h5>
                  <hr/>
                   <div class="carousel">
                      <a class="carousel-item" ><center>picname1</center><?= $this->Html->image('/units/penthouse lux/u2.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname2</center><?= $this->Html->image('/units/penthouse lux/u3.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname3</center><?= $this->Html->image('/units/penthouse lux/u4.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname4</center><?= $this->Html->image('/units/penthouse lux/u5.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname5</center><?= $this->Html->image('/units/penthouse lux/u6.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname6</center><?= $this->Html->image('/units/penthouse lux/u7.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname7</center><?= $this->Html->image('/units/penthouse lux/u8.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname8</center><?= $this->Html->image('/units/penthouse lux/u9.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname9</center><?= $this->Html->image('/units/penthouse lux/u10.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname10</center><?= $this->Html->image('/units/penthouse lux/u11.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname11</center><?= $this->Html->image('/units/penthouse lux/u12.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname12</center><?= $this->Html->image('/units/penthouse lux/u13.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname13</center><?= $this->Html->image('/units/penthouse lux/u14.jpg',['class'=>'products1']) ?></a>
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
             <h4><center>Penthouse Luxury</center></h4>
             <h5 class="price light grey-text text-lighten-7"><left>$20.00</left></h5>
             <button data-target="b18" class="waves-effect waves-light btn">Book</button>
          </div>
          <!-- Modal m2 -->
         <div class="modal" id="b18" tabindex="-1" role="dialog" >
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
     </div><!-- end of product 18-->
<!-- 19th unit-->
     <div class="col 14">
            <div class= "waves-effect waves-block waves-light" data-target="m19">
             <?= $this->Html->image('/units/penthouse lux 2/u1.jpg', ['class'=>'products']) ?>
            </div>
             <!-- Modal m -->
             <div id="m19" class="modal">
                <div class="modal-content">
                 <h4><center>Condo #1</center></h4>
                  <h5 class="price light grey-text text-lighten-7"><center>$20.00</center></h5>
                  <hr/>
                   <div class="carousel">
                      <a class="carousel-item" ><center>picname1</center><?= $this->Html->image('/units/penthouse lux 2/u2.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname2</center><?= $this->Html->image('/units/penthouse lux 2/u3.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname3</center><?= $this->Html->image('/units/penthouse lux 2/u4.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname4</center><?= $this->Html->image('/units/penthouse lux 2/u5.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname5</center><?= $this->Html->image('/units/penthouse lux 2/u6.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname6</center><?= $this->Html->image('/units/penthouse lux 2/u7.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname7</center><?= $this->Html->image('/units/penthouse lux 2/u8.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname8</center><?= $this->Html->image('/units/penthouse lux 2/u9.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname9</center><?= $this->Html->image('/units/penthouse lux 2/u10.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname10</center><?= $this->Html->image('/units/penthouse lux 2/u11.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname11</center><?= $this->Html->image('/units/penthouse lux 2/u12.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname12</center><?= $this->Html->image('/units/penthouse lux 2/u13.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname13</center><?= $this->Html->image('/units/penthouse lux 2/u14.jpg',['class'=>'products1']) ?></a>
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
             <h4><center>Penthouse Luxury 2</center></h4>
             <h5 class="price light grey-text text-lighten-7"><left>$20.00</left></h5>
             <button data-target="b19" class="waves-effect waves-light btn">Book</button>
          </div>
          <!-- Modal m2 -->
         <div class="modal" id="b19" tabindex="-1" role="dialog" >
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
     </div><!-- end of product 19-->
<!-- 20th unit-->
     <div class="col 14">
            <div class= "waves-effect waves-block waves-light" data-target="m20">
             <?= $this->Html->image('/units/waterside luxury/u1.jpg', ['class'=>'products']) ?>
            </div>
             <!-- Modal m -->
             <div id="m20" class="modal">
                <div class="modal-content">
                 <h4><center>Condo #1</center></h4>
                  <h5 class="price light grey-text text-lighten-7"><center>$20.00</center></h5>
                  <hr/>
                   <div class="carousel">
                      <a class="carousel-item" ><center>picname1</center><?= $this->Html->image('/units/waterside luxury/u2.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname2</center><?= $this->Html->image('/units/waterside luxury/u3.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname3</center><?= $this->Html->image('/units/waterside luxury/u4.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname4</center><?= $this->Html->image('/units/waterside luxury/u5.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname5</center><?= $this->Html->image('/units/waterside luxury/u6.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname6</center><?= $this->Html->image('/units/waterside luxury/u7.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname7</center><?= $this->Html->image('/units/waterside luxury/u8.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname8</center><?= $this->Html->image('/units/waterside luxury/u9.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname9</center><?= $this->Html->image('/units/waterside luxury/u10.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname10</center><?= $this->Html->image('/units/waterside luxury/u11.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname11</center><?= $this->Html->image('/units/waterside luxury/u12.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname12</center><?= $this->Html->image('/units/waterside luxury/u13.jpg',['class'=>'products1']) ?></a>
                      <a class="carousel-item" ><center>picname13</center><?= $this->Html->image('/units/waterside luxury/u14.jpg',['class'=>'products1']) ?></a>
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
             <h4><center>Waterside Luxury</center></h4>
             <h5 class="price light grey-text text-lighten-7"><left>$20.00</left></h5>
             <button data-target="b20" class="waves-effect waves-light btn">Book</button>
          </div>
          <!-- Modal m2 -->
         <div class="modal" id="b20" tabindex="-1" role="dialog" >
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
     </div><!-- end of product 20-->
     </div><!-- end of gridl -->
     </div><!-- end of units-->

  <hr/>
  <hr/>
  <hr/>


    
      
    
      <div  class= "waves-effect waves-block waves-light section scrollspy">
               <?= $this->Html->image('6.jpg', ['class'=>'bgimg']) ?> <!-- random image -->
      <div  id="services" class="middle caption center-align text-lighten-8 section scrollspy">

              <h4><center> Services </center></h4>
              <h1 >COMING SOON</h1>
              <hr>
              <p id="cdtime" style="font-size:30px" ></p>
      </div>
      </div>
     
      
        

      
    























  <hr/>
  <hr/>
  <hr/>

<div id="aboutus" class="section scrollspy">
  <h4><center> ABOUT US </center></h4>
  <p><center>SOME TEXT HERE ABOUT OUR COMPANY</center></p>
  <h5><center>blahblahblah</center></h5>


</div>
</body>
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
          <a href="https://web.facebook.com/miamiluxurycondoscorp/?ref=search"> <!-- need open new tab-->
          <?= $this->Html->image('fb-logo.png', ['class' => 'facebook']) ?>
          </a>
        </li>
		<li>
        <a href="mailto:webmaster@decode.co.uk">
          
            <?= $this->Html->image('instagram-logo.png', ['class' => 'facebook']) ?>
          </a>
        </li>
      </ul>
      © 2017 MLCStays
      <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
    </div>
  </div>
</footer>

</html>
