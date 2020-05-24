<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Responsive Mega menu</title>
 	   <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 	
 	<link rel="stylesheet" href="style1.css"> 	
 	
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<script src="bootsnav.js"></script>
 <style>
     body{    
    font-family: 'Roboto Condensed', sans-serif;
    
}

     body{
         background-color: #fb257a;
         background-size: cover;
          background-repeat: no-repeat;
         height: 100vh;
     }   
nav.navbar.bootsnav{
    border: none;
    background: none;
    margin-bottom: 150px;
    margin-top: 40px;
    margin-left: 20px;
}
nav.navbar.bootsnav ul.nav > li{ margin-right: 20px; }
nav.navbar.bootsnav ul.nav > li > a{
    padding: 10px 15px;
    border-radius: 0;
    font-size: 15px;
    font-weight: 600;
    color: #fff;
    text-transform: uppercase;
    position: relative;
    transition: all 0.5s ease 0s;
}
nav.navbar.bootsnav ul.nav > li.dropdown > a{ padding: 10px 30px 10px 15px; }
nav.navbar.bootsnav ul.nav > li.active > a,
nav.navbar.bootsnav ul.nav > li.active > a:hover,
nav.navbar.bootsnav ul.nav > li > a:hover,
nav.navbar.bootsnav ul.nav > li.on > a{
  color: #b71540;
}
nav.navbar.bootsnav ul.nav > li > a > span:before,
nav.navbar.bootsnav ul.nav > li > a > span:after{
    content: "";
    width: 100%;
    height: 100%;
    background: #fff;
    opacity: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: -1;
    transform: translateX(-50%) translateY(-50%) rotate(-45deg);
    transition: all 0.4s ease 0s;
}
nav.navbar.bootsnav ul.nav > li > a > span:after{
    width: 50px;
    background-color: #b71540;
}
nav.navbar.bootsnav ul.nav > li:hover > a > span:before,
nav.navbar.bootsnav ul.nav > li.active > a > span:before{
  transform: translateX(-50%) translateY(-50%) rotate(0);
  opacity: 1;
}
nav.navbar.bootsnav ul.nav > li:hover > a > span:after,
nav.navbar.bootsnav ul.nav > li.active > a > span:after{
  transform: translateX(-50%) translateY(-50%) rotate(0);
  opacity: 1;
  width: 0;
}
nav.navbar.bootsnav ul.nav > li.dropdown > a.dropdown-toggle:after{
    position: absolute;
    top: 10px;
    right: 10px;
    margin: 0 0 0 7px;
}
nav.navbar.bootsnav ul.nav > li.dropdown > ul{
    top: 100%;
    transition: all 0.8s ease 0s;
}
nav.navbar.bootsnav ul.nav > li.dropdown.on > ul{ top: 140%; }
.dropdown-menu.multi-dropdown{
    position: absolute;
    left: -100% !important;
}
nav.navbar.bootsnav li.dropdown ul.dropdown-menu{
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    border: none;
    border-radius: 10px;
}
nav.navbar.bootsnav li.dropdown ul.dropdown-menu.megamenu-content li{ font-size: 14px; }
nav.navbar.bootsnav li.dropdown ul.dropdown-menu.megamenu-content .title{
    font-size: 16px;
    font-weight: bold;
    color:#b71540 ;
}
@media only screen and (max-width: 990px){
    .dropdown-menu.multi-dropdown{ left: 0 !important; }
    nav.navbar.bootsnav .navbar-toggle{
        background: transparent !important;
        color: #fff;
    }
    nav.navbar.bootsnav ul.nav > li{
        width: 75%;
        margin: 5px auto 15px;
    }
    nav.navbar.bootsnav.navbar-mobile ul.nav > li > a{
        text-align: center;
        color: #fff;
        border: none;
    }
    nav.navbar.bootsnav ul.nav > li.active > a,
    nav.navbar.bootsnav ul.nav > li > a,
    nav.navbar.bootsnav ul.nav > li > a:hover,
    nav.navbar.bootsnav ul.nav > li.on > a{ color: #b71540; }
    nav.navbar.bootsnav.navbar-mobile .navbar-collapse{ background: #b71540; }
    nav.navbar.bootsnav ul.nav li.dropdown ul.dropdown-menu > li > a{
        color: #fff;
        border-bottom-color: none;
    }
    nav.navbar.bootsnav ul.nav > li.dropdown > ul{ top: 100%; }
    nav.navbar.bootsnav li.dropdown ul.dropdown-menu.megamenu-content .title,
    nav.navbar.bootsnav.navbar-mobile ul.nav ul.dropdown-menu .col-menu ul.menu-col li a{
        font-size: 14px;
        font-weight: normal;
        color: #fff;
    }
     
     
</style>
	
 </head>
 <body>
    <h1>
            <div style="background-color:mediumvioletred;"></style>
            Welcome
            <?php echo $_SESSION['username'];?>
        </h1>
    <div class="container">
       
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-default navbar-mobile bootsnav on">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav" data-in="fadeInDown" data-out="fadeOutUp">
                             
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="Pages">Home<span></span></a>
                                
                                <ul class="dropdown-menu animated">
                                    <li><a href="team.html">Our Team</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="review.html">Review Skill Bar</a></li>
                                    <li><a href="service.html">Services</a></li>
                                    <li><a href="health.html">Health Care</a></li>
                                    <li><a href="faq.html">FAQ'S</a></li>
                                    <li><a href="corona.html">Corona Blog</a></li>
                                </ul>
                            </li>
                      
                            
                            <li><a href="portfolio.html" data-hover="Portfolio">Portfolio <span></span></a></li>
                            
                            
                            <li class="dropdown megamenu-fw">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop Now<span></span></a>
                                <ul class="dropdown-menu megamenu-content animated" role="menu">
                                    <li>
                                        <div class="row">
                                            <div class="col-menu col-md-3">
                                                <h6 class="title">Ayush</h6>
                                                <div class="content">
                                                    <ul class="menu-col">
                                                        <li><a href="indexc.php">Ayurvedic</a></li>
                                                        <li><a href="#">Homeopathy</a></li>
                                                         <li><a href="#">Unani</a></li>
                                                        <li><a href="#">Siddha</a></li>
                                                       
                                                    </ul>
                                                </div>
                                      
                                            </div><!-- end col-3 -->
                                             <div class="col-menu col-md-3">
                                                <h6 class="title">Fitness</h6>
                                                <div class="content">
                                                    <ul class="menu-col">
                                                        <li><a href="#">Family Nutrition</a></li>
                                                        <li><a href="#">Health food and drinks</a></li>
                                                        <li><a href="#">Health Supplements</a></li>
                                                    </ul>
                                                </div>
                                      
                                            </div><!-- end col-3 -->
                                            <div class="col-menu col-md-3">
                                                <h6 class="title">Personal Care</h6>
                                                <div class="content">
                                                    <ul class="menu-col">
                                                      <li><a href="#">Body Care</a></li>
                                                        <li><a href="#">Eye Care</a></li>
                                                        <li><a href="#">Face Care</a></li>
                                                        <li><a href="#">Hair Care</a></li>
                                                        <li><a href="#">Lip Care</a></li>
                                                        <li><a href="#">Skin Care</a></li>
                                                        <li><a href="#">Oral Care</a></li>
                                                        <li><a href="#">Fragrences</a></li>
                                                        <li><a href="#">Hands and Feets</a></li>
                                                       
                                                    </ul>
                                                </div>
                                            </div><!-- end col-3 -->
                                            <div class="col-menu col-md-3">
                                                <h6 class="title">Family Care</h6>
                                                <div class="content">
                                                    <ul class="menu-col">
                                                        <li><a href="#">Baby and infants</a></li>
                                                        <li><a href="#">Senior Care</a></li>
                                                        <li><a href="#">Womens care</a></li>
                                                      
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-menu col-md-3">
                                                <h6 class="title">Lifestyle</h6>
                                                <div class="content">
                                                    <ul class="menu-col">
                                                        <li><a href="#">Home care</a></li>
                                                        <li><a href="#">Sexual wellness</a></li>
                                                        <li><a href="#">Smoking Cessation</a></li>
                                                        <li><a href="#">Stress Management</a></li>
                                                        <li><a href="#">Pet Care</a></li>
                                                    </ul>
                                                </div>
                                            </div><!-- end col-3 -->
                                              <div class="col-menu col-md-3">
                                                <h6 class="title">Treatments</h6>
                                                <div class="content">
                                                    <ul class="menu-col">
                                                        <li><a href="#">Allergies and infection</a></li>
                                                        <li><a href="#">Antiseptics</a></li>
                                                        <li><a href="#">Balms and Rubs</a></li>
                                                        <li><a href="#">Diabetes</a></li>
                                                        <li><a href="#">First Aid</a></li>
                                                         <li><a href="#">Pain Relief</a></li>
                                                         <li><a href="#">Skin Treatment</a></li>
                                                    </ul>
                                                </div>
                                            </div><!-- end col-3 -->
                                              <div class="col-menu col-md-3">
                                                <h6 class="title">Devices</h6>
                                                <div class="content">
                                                    <ul class="menu-col">
                                                        <li><a href="#">Orthopaedics</a></li>
                                                        <li><a href="#">Breathe Easy</a></li>
                                                        <li><a href="#">Measurements</a></li>
                                                        <li><a href="#">Surgical Accessories</a></li>
                                                      
                                                    </ul>
                                                </div>
                                            </div><!-- end col-3 -->
                                              <div class="col-menu col-md-3">
                                                <h6 class="title">Health Conditions</h6>
                                                <div class="content">
                                                    <ul class="menu-col">
                                                        <li><a href="#">Bone and Joint Pain</a></li>
                                                          <li><a href="#">Babycare</a></li>
                                                        <li><a href="#">Kidney Care</a></li>
                                                        <li><a href="#">Stomach Care</a></li>
                                                        <li><a href="#">Diabetic Care</a></li>
                                                        <li><a href="#">Lung Care</a></li>
                                                        <li><a href="#">Piles Care</a></li>
                                                        <li><a href="#">Mental Care</a></li>
                                                        <li><a href="#">Womens Care</a></li>
                                                        <li><a href="#">Weight Care</a></li>
                                                        <li><a href="#">Cardiac Care</a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div><!-- end col-3 -->
                                             <div class="col-menu col-md-3">
                                                <h6 class="title">Groceries</h6>
                                                <div class="content">
                                                    <ul class="menu-col">
                                                        <li><a href="#">Combos</a></li>
                                                        <li><a href="#">Staples</a></li>
                                                        <li><a href="#">Drinks</a></li>
                                                        <li><a href="#">Packaged Food</a></li>
                                                        <li><a href="#">Home Care</a></li>
                                                         <li><a href="#">Dairy</a></li>
                                                          <li><a href="#">Fruits and Vegetables</a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div><!-- end col-3 -->
                                        </div><!-- end row -->
                                    </li>
                                </ul>
                            </li>
                            
                            
                             <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="Pages">Contact<span></span></a>
                                
                                <ul class="dropdown-menu animated">
                                    <li><a href="detail.html">Details</a></li>
                                    <li><a href="contact-us.php">Contact Now</a></li>
                                </ul>
                            </li>
                            
                            
                            <li><a href="logout.php" data-hover="Contact">Logout <span></span></a></li>
                        </ul>
                       
                    </div>
                </nav>
            </div>
            
        </div>
         
    </div>
     
     
 	
 	
 </body>
 </html>


