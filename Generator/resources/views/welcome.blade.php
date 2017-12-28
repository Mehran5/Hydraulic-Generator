<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Hydraulic Generator</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS
================================================== -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
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
     <h5 align="center" >Looking for a Hydraulic Generator, we design and manufacture generators from 2 - 100 kVa, generators can be built to order</h5>   
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
            <li class="dropdown active">
                <a class="dropdown-toggle" href="{{URL::to('/')}}">Home </a>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="{{URL::to('/hydraulic_generators')}}">Hydraulic Generators<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="{{URL::to('/hydraulic_generators')}}">Hydraulic Generators</a></li>
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
            <h2><b>Hydraulic Generators</b></h2>
            <p>So why choose Hydraulic Generator? Hydraulic Generators convert hydraulic flow from existing machinery into compact, quiet and reliable AC or DC  power or can be integrated into an extensive range of existing plant and machinery using either a PTO driven pump or Electromagnetic Clutch and hydraulic pump. Hydraulic Generators can be designed to suit specific applications and are available in an extensive range of AC and DC outputs.. <br><br>Hydraulic Generators are compact, lightweight, quiet, reliable, requires little if any servicing or maintenance, secure and generally more economical to operate than diesel or petrol generators.<br><br>We’ve been manufacturing Hydraulic Generators for over 15 years ranging in size from 2 kVa up to 100 kVa, our standard hydraulic generator manifold is designed to provide a simple solution to your hydraulic generator requirements. The manifold contains all of the valves etc. required for simple and safe operation and integration into existing hydraulic circuits, 3 way pressure compensated flow control, on/off/directional valve, pressure relief valve and anti-cavitation. Hydraulic Motors can be interchanged to provide power ratings up to 12 kva allowing use with flow rates as low as 13.5 litres per minute at up to 210 bar , the manifold can cope with incoming flows up to 60 litres with maximum regulated flow of 38 litres per minute at 210 bar.</p> 
        </div>
        
        <!-- Slider Carousel
        ================================================== -->
        <div class="span8" style="margin-top: 20px;">
            <div class="flexslider" style="margin-left: 110px;">
              <ul class="slides">
                <li><a href="gallery-single.htm"><img src="img/new/fluit3.jpg" style="height: 600px;" alt="slider" /></a></li>
                <li><a href="gallery-single.htm"><img src="img/new/fluit3.jpg" style="height: 600px;" alt="slider" /></a></li>
                <li><a href="gallery-single.htm"><img src="img/new/fluit3.jpg" style="height: 600px;" alt="slider" /></a></li>
                <li><a href="gallery-single.htm"><img src="img/new/fluit3.jpg" style="height: 600px;" alt="slider" /></a></li>  
              </ul>
            </div>
        </div>
    </div>
    <p>We also provide a custom build service for larger units, DC hydraulic generators, welder generators etc. If you can’t see what you need simply complete our enquiry form or give us a call.</p>
    <!-- End Headline -->
    
    <div class="row gallery-row"><!-- Begin Gallery Row --> 
      
        <div class="span12">
            <h4 class="title-bg"><b>Recent Projects</b></h4>
        
        <!-- Gallery Thumbnails
        ================================================== -->

            <div class="row clearfix no-margin">
            <ul class="gallery-post-grid holder">

                    <!-- Gallery Item 1 -->
                    <li  class="span3 gallery-item" data-id="id-1" data-type="illustration">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/truck.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="img/gallery/truck.jpg" alt="Gallery" style="height: 179px;"></a>
                        <span class="project-details" style="background-color: #031d30;"><a href="gallery-single.htm">Custom Illustration</a>For an international ad campaign.</span>
                    </li>

                    <!-- Gallery Item 2 -->
                    <li class="span3 gallery-item" data-id="id-2" data-type="illustration">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/truck_2.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto" style=""></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="img/gallery/truck_2.jpg" alt="Gallery" style="height: 179px;"></a>
                        <span class="project-details" style="background-color: #031d30;"><a href="gallery-single.htm">3 Color Poster Design</a>For a regional festival event.</span>
                    </li>

                    <!-- Gallery Item 3 -->
                    <li class="span3 gallery-item" data-id="id-3" data-type="web">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="#" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="img/gallery/gallery-img-1-4col.jpg" alt="Gallery"></a>
                        <span class="project-details" style="background-color: #031d30;"><a href="gallery-single.htm">Ink Pen Illustration</a>Created for a best selling children's book.</span>
                    </li>

                    <!-- Gallery Item 4 -->
                    <li class="span3 gallery-item" data-id="id-4" data-type="video">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="img/gallery/gallery-img-1-4col.jpg" alt="Gallery"></a>
                        <span class="project-details" style="background-color: #031d30;"><a href="gallery-single.htm">Custom Illustration</a>For an international add campaign.</span>
                    </li>

                    <!-- Gallery Item 5 -->
                    <li class="span3 gallery-item" data-id="id-5" data-type="web illustration">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="img/gallery/gallery-img-1-4col.jpg" alt="Gallery"></a>
                        <span class="project-details" style="background-color: #031d30;"><a href="gallery-single.htm">Icon Design</a>Classic retro style illustration.</span>
                    </li>

                    <!-- Gallery Item 6 -->
                    <li class="span3 gallery-item" data-id="id-6" data-type="illustration design">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="img/gallery/gallery-img-1-4col.jpg" alt="Gallery"></a>
                        <span class="project-details" style="background-color: #031d30;"><a href="gallery-single.htm">Animation Cell</a>Creative storyboard illustration</span>
                    </li>

                    <!-- Gallery Item 7 -->
                    <li class="span3 gallery-item" data-id="id-7" data-type="design">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="img/gallery/gallery-img-1-4col.jpg" alt="Gallery"></a>
                        <span class="project-details" style="background-color: #031d30;"><a href="gallery-single.htm">Poster Ad Campaign</a>Regional ad for a local company.</span>
                    </li>

                    <!-- Gallery Item 8 -->
                    <li class="span3 gallery-item" data-id="id-8" data-type="web video">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="img/gallery/gallery-img-1-4col.jpg" alt="Gallery"></a>
                        <span class="project-details" style="background-color: #031d30;"><a href="gallery-single.htm">Magazine Ad</a>For an international add campaign.</span>
                    </li>
                </ul>
                </div>
            </div>
 
    </div><!-- End Gallery Row -->
    
    <div class="row"></div><!-- End Bottom Section -->
    
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
