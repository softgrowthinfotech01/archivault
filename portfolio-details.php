<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title>Archivault | Portfolio Details </title>

    <!--Favicon-->
    <link rel="icon" href="assets/img/favicon.png" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Line Awesome CSS -->
    <link href="assets/css/line-awesome.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="assets/css/fontAwesomePro.css" rel="stylesheet">    
    <!-- Animate CSS-->
    <link href="assets/css/animate.css" rel="stylesheet">
    <!-- Bar Filler CSS -->
    <link href="assets/css/barfiller.css" rel="stylesheet">
    <!-- Magnific Popup Video -->
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <!-- Flaticon CSS -->
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <!-- Slick Slider CSS -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!-- Nice Select  -->
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <!-- Back to Top -->
    <link href="assets/css/backToTop.css" rel="stylesheet">
    <!-- Metis Menu -->
    <link href="assets/css/metismenu.css" rel="stylesheet">
    <!-- Odometer CSS -->
    <link href="assets/css/odometer.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="assets/css/style.css" rel="stylesheet">  
    <Style>
        .slider-wrapper {
  position: relative;
  width: 100%;
  max-width: 1100px;
  height: auto;
  aspect-ratio: 16 / 9;
  overflow: hidden;
  margin: auto;
  border-radius: 8px;
}

.slider-wrapper img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  pointer-events: none;
}

.after-img {
  z-index: 2;
  clip-path: inset(0 50% 0 0);
  transition: clip-path 0.1s linear;
}

.slider-input {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 3;
  appearance: none;
  background: transparent;
  cursor: ew-resize;
}

.slider-input::-webkit-slider-thumb {
  appearance: none;
  width: 4px;
  height: 100%;
  background: #ff6600;
  border: none;
  box-shadow: 0 0 6px rgba(255, 102, 0, 0.8);
}

    </style>  
    

    <!-- jquery -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
</head>

<body>

    <!--header start -->
    <?php include 'header.php'; ?>
    <!-- header end-->

    <!-- Breadcrumb Area -->
    <div class="breadcrumb-area bread-bg">  
        <div class="overlay-5"></div>  
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="breadcrumb-title">
                        <h1>Portfolio Details</h1>
                    </div>
                    <div class="breadcrumb-icon">
                        <i class="las la-angle-down"></i>                    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Project Details  -->
    <div class="project-details-wrap section-padding">
        <div class="container">
            <div class="row gx-5">
                <div class="col-xl-12 col-lg-">
                    <div class="project-details-inner">
                        <!-- <div class="project-feature-img">
                            <img src="assets/img/project/project-feature-img.jpg" alt="">
                        </div>
                        -->
                        <div class="slider-wrapper">
  <img src="assets/new/1-1.jpg" alt="Before" class="before-img">
  <img src="assets/new/bk.jpg" alt="After" class="after-img" id="afterImg">
  <input type="range" min="0" max="100" value="50" class="slider-input" id="slider">
</div>


                        <div class="project-details-content">
                            <h3>Sliding Wooden Doors</h3>
                            <p>Sliding wooden doors offer a perfect blend of style and functionality, adding warmth and elegance to any space. They are space-saving, easy to operate, and beautifully crafted to enhance both modern and traditional interiors.</p>                            
                        </div>
                        <div class="project-image-gallery">
                            <div class="row">
                                <div class="col-6">
                                    <img src="assets/new/d4.png" alt="">
                                </div>
                                <div class="col-6">
                                    <img src="assets/new/d5.jpg" alt="">
                                </div>
                                <div class="col-12 mt-30">
                                    <img src="assets/new/d7.jpg" alt="" width="98%">
                                </div>
                            </div>
                        </div>
                        <p class="mt-30"> Good quality wooden doors and stylish interiors bring a perfect blend of durability, beauty, and warmth to your space. Crafted with precision, they add timeless charm, enhance the overall design, and create a welcoming atmosphere that complements both modern and classic styles effortlessly.</p>
                    </div>
                </div>
                <!-- <div class="col-xl-5 col-lg-5">
                    <div class="project-details-info">
                        <h3>Wooden Furnitures</h3>
                        <p>Dicta sunt explicabo enim ipsam</p>
                        <div class="row single-details-item gy-3 mt-30">
                            <div class="col-4">
                                <h5>Client</h5>
                            </div>
                            <div class="col-6">
                                <span>Alfa Inc.</span>
                            </div>
                            <div class="col-4">
                                <h5>Year</h5>
                            </div>
                            <div class="col-6">
                                <span>May, 2025</span>
                            </div>
                            <div class="col-4">
                                <h5>Category</h5>
                            </div>
                            <div class="col-6">
                                <span>Door</span>
                            </div>
                            
                            
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="row mt-100">
                <div class="nav-links">
                    <div class="nav-previous">
                        <a href="portfolio-details-left-sidebar"><span class="meta-nav"><i class="las la-arrow-left"></i>Prev Project</span></a>
                    </div>
                    <div class="nav-next">
                        <a href="portfolio-details-gallery">Next Project<i class="las la-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer section start -->
    <?php include 'footer.php'; ?>
    <!-- footer end -->

    <!-- Search Dropdown -->

    <div class="search-popup">
        <span class="search-back-drop"></span>

        <div class="search-inner">
            <div class="container">
                <div class="logo">
                    <a class="navbar-brand" href="home"><img src="assets/img/logo-white.png" alt=""></a>
                </div>
                <button class="close-search"><span class="la la-times"></span></button>
                <form method="post" action="home">
                    <div class="form-group">
                        <input type="search" name="search-field" value="" placeholder="Type your keyword" required="">
                        <button type="submit"><i class="fal fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
      <script>
  window.addEventListener('DOMContentLoaded', () => {
    const slider = document.getElementById('slider');
    const afterImg = document.getElementById('afterImg');

    slider.addEventListener('input', () => {
      const val = slider.value;
      afterImg.style.clipPath = `inset(0 ${100 - val}% 0 0)`;
    });
  });
</script>

    
    <!-- Popper JS -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Wow JS -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Way Points JS -->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <!-- Pure Counter JS -->
    <script src="assets/js/pure-counter.js"></script>
    <!-- Owl Carousel JS -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Slick Slider JS -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="assets/js/magnific-popup.min.js"></script>
    <!-- Isotope JS -->
    <script src="assets/js/isotope-3.0.6-min.js"></script>
    <!-- Nice Select JS -->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- Back To Top JS -->
    <script src="assets/js/backToTop.js"></script>
    <!-- Metis Menu JS -->
    <script src="assets/js/metismenu.js"></script>
    <!-- Progress Bar JS -->
    <script src="assets/js/jquery.barfiller.js"></script>    
    <!-- Appear JS -->
    <script src="assets/js/jquery.appear.min.js"></script>
    <!-- Odometer JS -->
    <script src="assets/js/odometer.min.js"></script>    
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>
