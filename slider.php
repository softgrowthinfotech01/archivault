<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Fixed Image Before After</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    

    <!-- jquery -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
</head>
  <style>
    * { box-sizing: border-box; }
    body {
      margin: 0;
      background: #eee;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .slider-wrapper {
      position: relative;
      width: 800px;
      height: 450px;
      overflow: hidden;
      border-radius: 8px;
      box-shadow: 0 0 12px rgba(0, 0, 0, 0.2);
    }

    .slider-wrapper img {
      position: absolute;
      top: 0; left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      pointer-events: none;
      user-select: none;
    }

    .after-img {
      z-index: 2;
      clip-path: inset(0 50% 0 0); /* Default 50% visible */
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
      background: #007bff;
      border: none;
      box-shadow: 0 0 6px rgba(0, 123, 255, 0.8);
    }

    .slider-input::-webkit-slider-runnable-track {
      background: transparent;
    }
  </style>
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

  <div class="slider-wrapper">
    <img src="https://prague.foxthemes.me/wp-content/uploads/2017/01/before.jpg" alt="Before" class="before-img">
    <img src="https://prague.foxthemes.me/wp-content/uploads/2017/01/after.jpg" alt="After" class="after-img" id="afterImg">
    <input type="range" min="0" max="100" value="50" class="slider-input" id="slider">
  </div>

  <script>
    const slider = document.getElementById('slider');
    const afterImg = document.getElementById('afterImg');

    slider.addEventListener('input', () => {
      const val = slider.value;
      afterImg.style.clipPath = `inset(0 ${100 - val}% 0 0)`;
    });
  </script>

</body>
</html>
