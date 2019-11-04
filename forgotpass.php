

<!DOCTYPE html>
<html>
   <head>
      <title>HOME SERVICE PROVIDER</title>
      <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="js/jquery.min.js"></script>
      <!-- Custom Theme files -->
      <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
      <link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
      <!-- Custom Theme files -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
      <!--webfont-->
      <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href='//fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
      <!--Animation-->
      <script src="js/wow.min.js"></script>
      <link href="css/animate.css" rel='stylesheet' type='text/css' />
      <script>
         new WOW().init();
      </script>
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
      <script src="js/simpleCart.min.js"> </script>	
   </head>
   <body>
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
         <div class="menu-bar">
            <div class="container">
               <div class="top-menu">
                  <ul>
                     <li><a href="index.php">Home</a></li>
                     |
                     <li><a href="customer.php">CUSTOMER</a></li>
                     |
                     <div class="clearfix"></div>
                  </ul>
               </div>
               <div class="login-section">
                  <ul>
                     <li><a class="active" href="authorizer.php">Authorizer Login</a>  </li>
                     |
                     <li><a href="admin.php">Admin Login</a> </li>
                     |
                     <div class="clearfix"></div>
                  </ul>
               </div>
               <div class="clearfix"></div>
            </div>
         </div>
      </div>
      <div class="main">
      <div class="container">
         <div class="login-page">
            <div class="account_grid">
               <div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
                  <h3>Want to be a part of our community?</h3>
                  <p><b>Whether you want to become authorizer,worker or even admin <br>for any of these Contact Admin.<b></p>
                  <div >
                     <i class="fa fa-user" style="font-size:200px; color:#5bbd50; margin-left: 0.5em;" ></i>
                  </div>
                  <div class="clearfix"> </div>
                  <a class="acount-btn" href="team/index.html"><b>Contact</b></a>
               </div>
               <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
                  <form action=" " method="post">
                     <div>
                        <span>Email<label>*</label></span>
                        <input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"> 
                     </div>
                     <!--div>
                        <span>New Password<label>*</label></span>
                        <input type="password" name="pass1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"> 
                     </div>
                     <div>
                        <span>Confirm Password<label>*</label></span>
                        <input type="password" name="pass2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"> 
                     </div-->
                     
                     <div class="clearfix"> </div>
                    
<input type="submit" name="sub" value="Submit" >

                  </form>
               </div>
               <div class="clearfix"> </div>
            </div>
         </div>
      </div>
      
<div class="footer">
   <div class="container">
      <p class="wow fadeInLeft" data-wow-delay="0.4s">&copy; Designed by &nbsp;<a href="team/index.html">SGV</a></p>
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
<?php
include 'dbconn.php';
if(isset($_POST['sub']))
         {
           if(!empty($_POST['email']))
           {
            $email=$_POST['email'];
            
            $query="SELECT * FROM authoriser where email='".$email."'";
         $result=mysqli_query($conn,$query);
         $numrows=mysqli_num_rows($result);
         if($numrows==1)
         {
           $row=mysqli_fetch_array($result);
           $password=$row[7];
           $recipient = $email;
       $subject = "Forgot Password";
       $message = "Your password is ".$password."\r\n";
       $headers = "From: saigirishgilly98@gmail.com" . "\r\n";
       mail($recipient,$subject,$message,$headers);

       echo "<script>alert('Mail Sent!!');
       window.location.href='authorizer.php';</script>";
         }
         else
         { 
            echo "<script>alert('Not registered!!');
       window.location.href='forgotpass.php';</script>";
         }
           }
           else
             echo "<script>alert('One or More Details are left empty');</script>";
         }
         
         
?>
</html>

