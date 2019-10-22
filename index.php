
<?php include 'dbconn.php';?>
<!DOCTYPE html>
<html>
   <head>
      <title>Service Provider and Manager</title>
      <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
      <script src="js/jquery.min.js"></script>
      <link href="css/style3.css" rel="stylesheet" type="text/css" media="all" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
      <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
      <link href='//fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
      <script src="js/wow.min.js"></script>
      <link href="css/animate.css" rel='stylesheet' type='text/css' />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <script>
         new WOW().init();
      </script>
      <script src="js/simpleCart.min.js"> </script>	
      <script type="text/javascript" src="js/move-top.js"></script>
      <script type="text/javascript" src="js/easing.js"></script>
      <script type="text/javascript">
         jQuery(document).ready(function($) {
         	$(".scroll").click(function(event){		
         		event.preventDefault();
         		$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
         	});
         });
      </script>
      <script type="text/javascript">
         function cycleBackgrounds() {
            var index = 0;
         
            $imageEls = $('.container1 .slide'); // Get the images to be cycled.
         
            setInterval(function () {
                // Get the next index.  If at end, restart to the beginning.
                index = index + 1 < $imageEls.length ? index + 1 : 0;
                
                // Show the next
                $imageEls.eq(index).addClass('show');
                
                // Hide the previous
                $imageEls.eq(index - 1).removeClass('show');
            }, 2000);
         };
         
         // Document Ready.
         $(function () {
            cycleBackgrounds();
         });
      </script>
   </head>
   <body style='background-color: black;'>
      <div class="header">
         <div class="container">
            <div class="top-header">
               <div class="logo">
                  <a href="index.php"><img src="images/nit.png" class="img-responsive" alt="" /></a>
               </div><br>
               <div>
                  <a href="index.php"><img src="images/home.png" class="img-responsive" alt="" /></a>
               </div>
               <div class="clearfix"></div>
            </div>
         </div>
        
   
         <div class="menu-bar navbar-fixed-top" style='position: sticky;'>
            <div class="container">
               <div class="top-menu">
                  <ul>
                     <li class="active"><a href="#Home" class="scroll">Home</a></li>
                     |
                     <li class='inactive'><a href="customer.php">Customer</a></li>
                     |
                     <div class="clearfix"></div>
                  </ul>
               </div>
               <div class="login-section">
                  <ul>
                     <li class='inactive'><a href="authorizer.php"><b>AUTHORIZER LOGIN</a>  </li>
                     |
                     <li class='inactive'><a href="admin.php"><b>ADMIN LOGIN</a> </li>
                     |
                     <div class="clearfix"></div>
                  </ul>
               </div>
               <div class="clearfix"></div>
            </div>
         </div>
         <div class="container1">
            <div class="slide show" style="background: url(http://www.gnugroup.org/images/service1.png); background-color:black; no-repeat;"></div>
            <div class="slide" style="background: url(banner2.jpg) no-repeat;"></div>
            <div class="slide show" style="background: url(banner3.jpg) no-repeat;"></div>
         </div>
      </div>
      <div class="content">
         <div class="ordering-section" id="Order">
            <div class="container">
               <div class="ordering-section-head text-center wow bounceInRight" data-wow-delay="0.4s">
                  <h3>Home Repair Service was never so easy</h3>
                  <div class="dotted-line">
                     <h4>Just 4 Steps To Follow </h4>
                  </div>
               </div>
               <div class="ordering-section-grids">
                  <div class="col-md-3 ordering-section-grid">
                     <div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s">
                        <i class="one"></i><br>
                        <i class="fa fa-laptop" style="font-size:45px; color:white; align:center; margin-left: 0.25em;" ></i>
                        <p>Book <span>Appointment</span></p>
                        <label></label>
                     </div>
                  </div>
                  <div class="col-md-3 ordering-section-grid">
                     <div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s">
                        <i class="two" ></i><br>
                        <i class="fa fa-phone" style="font-size:45px; color:white; align:center; margin-left: 0.25em;" ></i>
                        <p>Receive  <br><span>Call</span></p>
                        <label></label>
                     </div>
                  </div>
                  <div class="col-md-3 ordering-section-grid">
                     <div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s">
                        <i class="three"></i><br>
                        <i class="fa fa-wrench" style="font-size:45px; color:white; align:center; margin-left: 0.25em;" ></i>
                        <p>Get <span><br>service</span></p>
                        <label></label>
                     </div>
                  </div>
                  <div class="col-md-3 ordering-section-grid">
                     <div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s">
                        <i class="four"></i><br>
                        <i class="three-icon"></i>
                        <p>Pay <br><span> amount</span></p>
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
            </div>
         </div>
      </div>
      <div class="content">
         <div class="ordering-section" id="Order">
            <div class="container">
               <div class="ordering-section-head text-center wow bounceInRight" data-wow-delay="0.4s">
                  <h3>Website</h3>
                  <div class="dotted-line">
                     <h4>Statistics</h4>
                  </div>
               </div>
               <div class="ordering-section-grids">
                  <div class="col-md-3 ordering-section-grid">
                     <div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s" >
                        <i class="one"></i><br>
                        
                        <p style="margin-top: 0.1em;">Total Customers <br><br><?php   
                        $que="SELECT count(*) from customer";
      $result=mysqli_query($conn,$que);
      $ros=mysqli_fetch_row($result);
      echo $ros[0];
      ?></p><br><br>
                        <label></label>
                     </div>
                  </div>
                   <div class="col-md-3 ordering-section-grid">
                     <div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s" >
                        <i class="two"></i><br>
                        
                        <p style="margin-top: 0.1em;">Total Authorisers <br><br><?php   
                        $que="SELECT count(*) from authoriser";
      $result=mysqli_query($conn,$que);
      $ros1=mysqli_fetch_row($result);
      echo $ros1[0];
      ?></p><br><br><label></label>
                     </div>
                  </div>
                  <div class="col-md-3 ordering-section-grid">
                     <div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s" >
                        <i class="three"></i><br>
                        
                        <p style="margin-top: 0.1em;">Total <br>Workers<br><br><?php   
                        $que="SELECT count(*) from worker";
      $result=mysqli_query($conn,$que);
      $ros2=mysqli_fetch_row($result);
      echo $ros2[0];
      ?></p><br><br>
                        <label></label>
                     </div>
                  </div>
                  <div class="col-md-3 ordering-section-grid">
                     <div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s" >
                        <i class="four"></i><br>
                        
                        <p style="margin-top: 0.1em;">Total Cashflow <br><br>Rs&nbsp<?php   
                        $que="SELECT sum(amount) from finance";
      $result=mysqli_query($conn,$que);
      $ros4=mysqli_fetch_row($result);
      echo $ros4[0];
      ?></p>
                        
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
            </div>
         </div>
      </div>
      
<div class="footer">
   <div class="container">
      <p class="wow fadeInLeft" data-wow-delay="0.4s">&copy; Designed by &nbsp;<a href="team/index.html">SPM</a></p>
   </div>
</div>
<!-- footer-section-ends -->
<script type="text/javascript">
   $(document).ready(function() {
      /*
      var defaults = {
            containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear' 
         };
      */
      
      $().UItoTop({ easingType: 'easeOutQuart' });
      
   });
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

   </body>
</html>

