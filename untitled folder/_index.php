<!DOCTYPE html> 
<!--
    Free  Template by Mohamed Sobhy
    Edited: Lehlohonolo Motsoeneng
   
-->
<html lang="en">
<head>
	<title>Lilly's Cakes</title>
   
    <!-- Meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
   
    <!-- jQuery Script -->
    <script src="js/jquery.js" type="text/javascript"></script> 
    <!-- scroll function -->
    <script type="text/javascript">
        $(document).ready(function() {
                $('#navigations').localScroll({duration:800});
        });
    </script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

</head>
<body>

    <!--============ Navigation ============-->

        <div class="headerwrapper">
            <div id="header" class="container">
                <div class="logo"> <a href="#"><img src="images/LOGO.png" alt="logo" width="165" height="74"></a> </div> <!--end of Logo-->
                <nav>
                    <ul id="navigations">
                        <li><a href="">HOME</a></li>
                        <li> <a href="#">ABOUT</a></li>
                        <li><a href="#map">LOCATONS</a></li>
                        <li><a href="#bestdishes">MENU</a></li>
                        <li><a href="#contactus">CONTACT</a></li>
                    </ul>
                </nav>
            </div> <!--end of header-->
        </div> <!-- end of headerwrapper-->

    <!--============ Slider ============-->

    <div class="sliderwrapper">
        <div id="slider" class="container">
            <div class="slider">
                    <ul class="slides">
                        <li class="slide">
                            <h5 class="wow fadeInDown" data-wow-delay="0.8s">Lilly's Cakes </h5>
                            <p class="wow fadeInUp" data-wow-delay="0.8s">We care for your cravings, we care for your loved ones and your events, and hence we commiting our skills to give you the best taste and designs for your cakes. We just love baking</p>
                        <img src="images/slideimg.png" width="317" height="256" class="wow fadeInRight" 
                        data-wow-delay="0.8s" alt="slide1img"> 
                        </li>
                        <li class="slide">
                            <h5 class="wow fadeInDown" data-wow-delay="0.8s">We design taste</h5>
                            <p class="wow fadeInUp" data-wow-delay="0.8s">Our cakes are made out of special ingridients, patience and love mixed with all dairy products and other ingridients just make an exquisite taste. our products represents us, and you as soon as we understand you, and your taste, we are pationate.</p>
                        <img src="images/slideimg.png" width="317" height="256" class="wow fadeInRight" 
                        data-wow-delay="0.8s" alt="slideimg2"> 
                        </li>
                        <li class="slide">
                            <h5 class="wow fadeInDown" data-wow-delay="0.8s">Savoury Cakes </h5>
                            <p class="wow fadeInUp" data-wow-delay="0.8s">Order any of our mouth washing, apetizing and addicitive cakes, to spice up your day or event, we promise you, you will never go wrong with us. We got you, we got the cakes, we got your celebration, event. </p>
                        <img src="images/slideimg.png" width="317" height="256" class="wow fadeInRight" 
                        data-wow-delay="0.8s" alt="slideimg2"> 
                        </li>
                    </ul>
                </div>
        </div> <!-- End of Slider-->
    </div> <!-- end of sliderwrapper-->



    <!--============ Best Cakes/Designs ============-->

    <div class="bestdesignswrapper">
        <div id="bestdishes" class="container">
        
            <h2 class="wow fadeInUp" data-wow-delay="0.3s">Best Designs</h2>
        <div class="slider">
                    <ul class="slides">
                    <li class="slide">
                        <div class="item">
                            <img src="images/cakes/Doll Cake.jpg" width="226" height="225" alt="sliderimg" class="wow flipInX"
                            data-wow-delay=".8s"> 
                            <h3>Doll Cake</h3>
                        </div> <!-- end of item-->
                        
                    <div class="item2">
                            <img src="images/cakes/Real Madrid Cake.jpg" width="226" height="225" alt="sliderimg" class="wow flipInX"
                            data-wow-delay=".8s"> 
                            <h3>Real Madrid Cake</h3>
                        </div> <!-- end of item-->
                        
                    <div class="item3">
                            <img src="images/cakes/Princess Cake 1.jpg" width="226" height="225" alt="sliderimg" class="wow flipInX"
                            data-wow-delay=".8s"> 
                            <h3>Princess Cake </h3>
                        </div> <!-- end of item-->
                    </li>
                    <li class="slide">
                        <div class="item">
                            <img src="images/cakes/Minion Cake.jpg" width="226" height="225" alt="sliderimg" > 
                            <h3>Minion Cake</h3>
                        </div> <!-- end of item-->
                        
                    <div class="item2">
                            <img src="images/cakes/Barbie Cake.jpg" width="226" height="225" alt="sliderimg"> 
                            <h3>Barbie Cake</h3>
                        </div> <!-- end of item-->
                        
                    <div class="item3">
                            <img src="images/thumb3.png" width="226" height="225" alt="sliderimg"> 
                            <h3>Pasta Fusilli</h3>
                        </div> <!-- end of item-->
                    </li>
                    
            </ul>
        </div> <!-- end of slider-->
        </div> <!-- end of besth dishes-->
    </div> <!-- end of bestdishes wrapper-->

    <!--============ BOOK ONLINE ============-->

    <div class="bookonlinewrapper">
        <div class="container" id="bookonline">
        <h3 class="wow fadeInUp" data-wow-delay="0.3s"> ORDER ONLINE</h3>
        <form >
        <input type="text" class="name wow zoomIn" placeholder="Your Name" >
        <input type="text" class="email wow zoomIn" placeholder="Your E-MAIL">
        <input type="text" class="from wow zoomIn" placeholder="09-06-2014">
        <input type="text" class="to wow zoomIn" placeholder="09-06-2014">
        <input type="text" class="persons wow zoomIn" placeholder="Quantity">
  
        <button class="booknow wow fadeInUp">ORDER NOW </button>
        
        </form>
        
        </div>
    </div> <!-- end of book online wrapper-->

<!--============ MAP ============-->

    <div class="mapwrapper">
        <div id="map" class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3453.66325428613!2d31.24094885319519!3d30.046517359733745!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2seg!4v1403554513536"   class="googlemap"></iframe>
            
       </div> <!-- end of map id-->

    </div>    <!-- end of map wrapper-->

<!--============ Contact us ============-->


    <div class="contactwrapper">
        <div id="contactus" class="container">
            <h3 class="wow fadeInUp" data-wow-delay="0.3s">CONTACT US</h3>
            <div class="staff">
          
                <ul>
                    <li>
                        <!-- facebook -->
                    </li>
                </ul>
            </div>   
            <!--end of .staff-->
        </div> 
        <!--contactus class-->
    </div> <!-- end of contact wrapper-->

<!--============ FOOTER ============-->

    <div class="footerwrapper">
     <footer class="container">
    	<div class="customerreview">
       		 <h2>Customer Reviews</h2>
          <div class="review">
        	<p><strong>&#8220; </strong>I love coffee, coding and cakes, and Lilly's Cakes got my back on the Cakes. You should try them as well.  
            <strong>&#8221;</strong></p>
             
             <h4>- Lehlohonolo Motsoeneng</h4>

        	</div> <!-- end of review-->
             
              <div class="clearfix"></div>
              <div class="line"></div>
   
        </div>
        <div class="socialize">
        
      <h2>Socialize</h2>
        <div class="socialimgs">
          <a href="https://www.facebook.com/Mido.HHH"><img src="images/fb.png" width="68" height="68" class="facebook"
           alt="fb"></a>
        <a href="https://twitter.com/Mido_A7X"><img src="images/twitter.png" width="68" height="68" class="twitter"
        alt="twitter"></a>
        <a href="https://twitter.com/Mido_A7X"><img src="images/twitter.png" width="68" height="68" class="twitter"
            alt="twitter"></a>
      </div> <!--end of social imgs-->
      
       </div>
      
        <div class="sendfeedback">
        <h2>Subscibe to our Newsletter</h2>
                <form>
                <h6>Your Name:</h6>
                <input type="text" class="yourname" >
                <h6>Mobile Number :</h6>
                <input type="text" class="mobilenumber">
                <h6>Message :</h6>
                <textarea></textarea>
                
                <button>SUBMIT </button>
        
                </form>
            
            </div> <!-- end of feedback-->

        </footer> <!-- end of footer-->
    </div> <!-- end of footer-->




<!--============ COPYRIGHTS ============-->


<div class="copyrightswrapper">
    <div id="copyrights" class="container">
    
 	   <p>Copyright &copy; 2017 <a href="https://www.lehlohonolo-m.co.za"> Lilly's Cakes</a> All Rights Reserved | Developed by <a href="https://www.lehlohonolo-m.co.za" target="_blank">Lehlohonolo Motsoeneng</a></p>
    
    </div> <!-- end of copyrights-->
</div> <!-- end of website-->
	



<div class="fixedsocial">
<a href="https://www.facebook.com/Mido.HHH"><img src="images/facebook.png" width="20" height="20" alt="fb"> </a>

</div>

<script src="js/jquery.glide.js"></script>
<script type="text/javascript" src="js/MyJQ.js"></script>
<script src="js/jquery.localScroll.min.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo.min.js" type="text/javascript"></script> 
<script src="js/wow.min.js" type="text/javascript"></script> 

<script type="text/javascript">
    $('.sliderwrapper .slider').glide({
		autoplay: 7000,
		animationDuration: 3000,
		arrows: true,
		});
	
</script>
	
    <script type="text/javascript">
    $('.bestdesingswrapper .slider').glide({
		autoplay: false,
		animationDuration: 700,
		arrows: true,
		navigation:false,
		
		});
		
</script>
	
</body>

</html>