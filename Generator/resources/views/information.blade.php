<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Hydraulic Generator</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS
================================================== -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<link rel="stylesheet" href="css/prettyPhoto.css" />
<link rel="stylesheet" href="css/flexslider.css" />
<link rel="stylesheet" href="css/custom-styles.css">

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/style-ie.css"/>
<![endif]--> 

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- JS
================================================== -->
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/jquery.custom.js"></script>
<script type="text/javascript">
$(document).ready(function () {

    $("#btn-blog-next").click(function () {
      $('#blogCarousel').carousel('next')
    });
     $("#btn-blog-prev").click(function () {
      $('#blogCarousel').carousel('prev')
    });

     $("#btn-client-next").click(function () {
      $('#clientCarousel').carousel('next')
    });
     $("#btn-client-prev").click(function () {
      $('#clientCarousel').carousel('prev')
    });
    
});

 $(window).load(function(){

    $('.flexslider').flexslider({
        animation: "slide",
        slideshow: true,
        start: function(slider){
          $('body').removeClass('loading');
        }
    });  
});

</script>

</head>

<body class="home">
    <!-- Color Bars (above header)-->
    <div class="color-bar-1" style="padding: 0.1px;">
     <h5 align="center" >Hydraulic Generator Safety and Installation Guides</h5>   
    </div>
    <div class="container">
    
      <div class="row header"><!-- Begin Header -->
      
        <!-- Logo
        ================================================== -->
        <div class="span5 logo">
            <a href="index.html"><img src="img/logo.jpg" style="width: 350px; height: 100px;"  /></a>
        </div>
        
        <!-- Main Navigation
        ================================================== -->
        <div class="span7 navigation">
            <div class="navbar hidden-phone">
            
            <ul class="nav">
            <li class="dropdown">
                <a class="dropdown-toggle" href="{{URL::to('/')}}">Home </a>
            </li>
            <li class="dropdown active">
                <a class="dropdown-toggle" data-toggle="dropdown" href="{{URL::to('/hydraulic_generators')}}">Hydraulic Generators<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="{{URL::to('hydraulic_generators')}}">Hydraulic Generators</a></li>
                    <li><a href="{{URL::to('/technical_data')}}">Technical Data</a></li>
                    <li><a href="{{URL::to('/installation')}}">Installation</a></li>
                    <li><a href="{{URL::to('/information')}}">Information</a></li>
                </ul>
            </li>
             <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="gallery-4col.htm">Gallery <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="gallery-3col.htm">Gallery 3 Column</a></li>
                    <li><a href="gallery-4col.htm">Gallery 4 Column</a></li>
                    <li><a href="gallery-6col.htm">Gallery 6 Column</a></li>
                    <li><a href="gallery-4col-circle.htm">Gallery 4 Round</a></li>
                    <li><a href="gallery-single.htm">Gallery Single</a></li>
                </ul>
             </li>
             <li><a href="{{URL::to('/meccalte_alternators')}}">Meccalte Alternators</a></li>
             <li><a href="{{URL::to('/about_us')}}">About us</a></li>
             <li><a href="{{URL::to('/contact_us')}}">Contact us</a></li>
            </ul>
           
            </div>

            <!-- Mobile Nav
            ================================================== -->
            <form action="#" id="mobile-nav" class="visible-phone">
                <div class="mobile-nav-select">
                <select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
                    <option value="">Menu...</option>
                    <option value="index.html">Home</option>
                    <option value="features.htm">Features</option>
                    <option value="page-full-width.htm">Hydraulic Generators</option>
                        <option value="{{URL::to('/hydraulic_generators')}}">- Hydraulic Generators</option>
                        <option value="{{URL::to('/technical_data')}}">- Technical data</option>
                        <option value="{{URL::to('/installation')}}">- Installation</option>
                        <option value="{{URL::to('/information')}}">- Information</option>
                    <option value="gallery-4col.htm">Gallery</option>
                        <option value="gallery-3col.htm">- 3 Column</option>
                        <option value="gallery-4col.htm">- 4 Column</option>
                        <option value="gallery-6col.htm">- 6 Column</option>
                        <option value="gallery-4col-circle.htm">- Gallery 4 Col Round</option>
                        <option value="gallery-single.htm">- Gallery Single</option>
                    <option value="blog-style1.htm">Blog</option>
                        <option value="blog-style1.htm">- Blog Style 1</option>
                        <option value="blog-style2.htm">- Blog Style 2</option>
                        <option value="blog-style3.htm">- Blog Style 3</option>
                        <option value="blog-style4.htm">- Blog Style 4</option>
                        <option value="blog-single.htm">- Blog Single</option>
                    <option value="page-contact.htm">Contact</option>
                </select>
                </div>
                </form>

        </div>
        
      </div><!-- End Header -->
     
        <div class="row headline"><!-- Begin Headline -->
            
            <!-- Headline Text
            ================================================== -->
            <div class="span4">
                <h3><b>Hydraulic Generator Installation Instructions</b></h3>
            </div>
            <div class="span9">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Details</th>
                        <th>Links</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>HSE Guidelines</td>
                        <td><a href="pdf/electrical_safety_construction.pdf" style="text-decoration: none;"><i class="fa fa-download" aria-hidden="true"></i></a> Electrical Safety on Construction Sites</td>
                      </tr>      
                      <tr class="success">
                        <td>Genie Z45</td>
                        <td><a href="pdf/Z45 GENERATOR KIT.pdf" style="text-decoration: none;"><i class="fa fa-download" aria-hidden="true"></i></a> Installation Instructions</td>
                      </tr>
                      <tr>
                        <td>Genie S65</td>
                        <td><a href="pdf/Z45 GENERATOR KIT.pdf" style="text-decoration: none;"><i class="fa fa-download" aria-hidden="true"></i></a> Installation Instructions</td>
                      </tr>
                      <tr class="success">
                        <td>Genie Z60</td>
                        <td><a href="pdf/Z60 GENERATOR KIT.pdf" style="text-decoration: none;"><i class="fa fa-download" aria-hidden="true"></i></a> Installation Instructions</td>
                      </tr>
                      <tr>
                        <td>Haulotte HA16PX</td>
                        <td><a href="pdf/Haulotte HA16PX Installation.pdf" style="text-decoration: none;"><i class="fa fa-download" aria-hidden="true"></i></a> Installation Instructions</td>
                      </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- End Container -->

    <!-- Footer Area
        ================================================== -->

    <div class="footer-container"><!-- Begin Footer -->
        <div class="container">
            <div class="row footer-row">
                <div class="span3 footer-col">
                    <h5>Latest News</h5>
                     <ul class="post-list">
                        <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">Consectetur adipiscing elit est lacus gravida</a></li>
                        <li><a href="#">Lectus sed orci molestie molestie etiam</a></li>
                        <li><a href="#">Mattis consectetur adipiscing elit est lacus</a></li>
                        <li><a href="#">Cras rutrum, massa non blandit convallis est</a></li>
                    </ul>
                </div>
                <div class="span3 footer-col">
                </div>
                <div class="span3 footer-col">
                </div>
                <div class="span3 footer-col">
                    <h5>About Us</h5>
                   <img src="img/piccolo-footer-logo.png" alt="Piccolo" /><br /><br />
                    <address>
                        <strong>Design Team</strong><br />
                        shahjamal<br />
                        pakistan<br />
                    </address>
                    <ul class="social-icons">
                        <li><a href="#" class="social-icon facebook"></a></li>
                        <li><a href="#" class="social-icon twitter"></a></li>
                        <li><a href="#" class="social-icon dribble"></a></li>
                        <li><a href="#" class="social-icon rss"></a></li>
                        <li><a href="#" class="social-icon forrst"></a></li>
                    </ul>
                </div>
            </div>

            <div class="row"><!-- Begin Sub Footer -->
                <div class="span12 footer-col footer-sub">
                    <div class="span12">
                        <div  align="center">Copyright 2017 HYDRAULIC GENERATORS. All rights reserved.
                        </div>
                    </div>
                </div>
            </div><!-- End Sub Footer -->

        </div>
    </div><!-- End Footer --> 
    <!-- Scroll to Top -->  
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
    
</body>
</html>
