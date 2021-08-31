<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Food Website Design Tutorial</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
   

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
  <link rel="stylesheet" href="style.css">
    
    
<style>
    .newletter .form-control:hover,.newletter .form-control:focus{
    outline: none;
    box-shadow: none;
    border-color: #A82C48;
}
    </style>
</head>
<body>
    
<!-- header section starts      -->
<header>
    
   <nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="images/logo.png" class="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">AboutUs</a>
        </li>
        
          <li class="nav-item">
          <a class="nav-link" href="#explore">ExploreFood</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Reviews</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">F&Q</a>
        </li>  
          
          <li>
          <input type="button" value="+213559248068" class="btn call">
          </li>
      </ul>
    </div>
  </div>
</nav>
    
    </header>

<!-- header section ends-->


<!-- home section starts  -->

<section id="home">
  <div class="container-fluid px-0 top-banner">
    <div class="container">
        <div class="row">
             <div class="col-lg-5 col-md-6">
             <h1>Lorem ipsum dolor sit amet</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut interdum sem aliquam volutpat dapibus. Nam nec eros ullamcorper, laoreet ipsum.</p>
                 <div class="mt-4">
                     
                 <button class="btn main-btn">Order Now<i class="fas fa-shopping-cart ps-3"></i></button>
                     
                 <button class="btn white-btn ms-lg-4 mt-lg-0 ">Order Now<i class="fas fa-angle-right ps-3"></i></button>
                 </div>
             </div>
        </div>
    </div>
  </div>
    </section>

<!-- home section ends -->
<section id="counter">
    <section class="counter-section">
    <div class="container">
        <div class="row text center align-items-center">
        <div class="col-md-4 center-block" style="text-align:center;">
            <h2 class="h2C">
            <span id="count1"></span>+
                <p>Order</p>
            </h2>
            </div>
            <div class="col-md-4 center-block" style="text-align:center;">
            <h2 class="h2C">
            <span id="count2"></span>+
                <p>TodayViews</p>
            </h2>
            </div>
            <div class="col-md-4 center-block" style="text-align:center;">
            <h2 class="h2C">
            <span id="count3"></span>+
                <p>menu</p>
            </h2>
            </div>
        </div>
        </div>
    </section>
    </section>
<!-- about section starts  -->

<section id="about">
    <div class="about-section wrapper">
    <div class="container">
        <div class="row align-items-center">
        <div class="col-lg-7 col-md-12 mb-lg-0 mb-5">
            <div class="card border-0">
            <img src="images/img/img-1.png" class="img-fluid">
            </div>
            </div>
            <div class="col-lg-5 col-md-12 text-sec">
            <h2 class="about-titel">Lorem ipsum dolor sit amet</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut interdum sem aliquam volutpat dapibus. Nam nec eros ullamcorper, laoreet ipsum.</p>
            <button class="main-btn mt-4 btn">Learn more</button>
            </div>
        </div>
        </div>
        <div class="container food-type">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12 text-sec mb-lg-0 mb-5">
            <h2 class="about-titel">Lorem ipsum dolor sit amet</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut interdum sem aliquam volutpat dapibus. Nam nec eros ullamcorper, laoreet ipsum.</p>
                <ul>
                <li>interdum sem aliquam volutpat dapibus.</li>
                    <li>interdum sem aliquam volutpat dapibus.</li>
                    <li>interdum sem aliquam volutpat dapibus.</li>
                </ul>
            <button class="main-btn mt-4 btn">Learn more</button>
            
            </div>
            <div class="col-lg-7 col-md-12">
            <div class="card border-0">
                <img src="images/img/img-2.png" class="img-fluid">
                </div>
            </div>
            </div>
        </div>
    </div>
    </section>

<!-- about section ends -->

<!-- story section starts  -->

<section id="story">
    <div class="story-section">
    <div class="container">
        <div class="row">
        <div class="col-sm-12">
            <div class="text-content">
            <h2 class="about-titel">Lorem ipsum dolor sit amet</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut interdum sem aliquam volutpat dapibus. Nam nec eros ullamcorper, laoreet ipsum.</p>
            <button class="main-btn mt-4 btn">Learn more</button>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
<!-- story section ends -->

<!-- explore section starts  -->

<section id="explore" class="explore-food">
    <div class="explore-food wrapper">
    <div class="container">
        <div class="row">
        <div class="col-sm-12">
            <div class="text-content text-center">
            <h2 class="about-titel">Lorem ipsum dolor sit amet</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut interdum sem aliquam volutpat dapibus. Nam nec eros ullamcorper, laoreet ipsum.</p>
            </div>
            </div>
        </div>
        <div class="row pt-5">
        <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
            <div class="card">
            <img src="images/img/img-3.jpg" class="img-fluid">
                <div class="pt-3">
                <h4>Nam nec eros ullamcorper</h4>
                    <p>Lorem ipsum dolor sit amet</p>
                    <span>10$ <del>11.5$</del></span><br>
                    <button class="mt-4 main-btn btn">Order Now</button>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
            <div class="card">
            <img src="images/img/img-3.jpg" class="img-fluid">
                <div class="pt-3">
                <h4>Nam nec eros ullamcorper</h4>
                    <p>Lorem ipsum dolor sit amet</p>
                    <span>9$ <del>10.5$</del></span><br>
                    <button class="mt-4 main-btn btn">Order Now</button>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
            <div class="card">
            <img src="images/img/img-3.jpg" class="img-fluid">
                <div class="pt-3">
                <h4>Nam nec eros ullamcorper</h4>
                    <p>Lorem ipsum dolor sit amet</p>
                    <span>10$ <del>11.5$</del></span><br>
                    <button class="mt-4 main-btn btn">Order Now</button>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>

<!-- explore section ends -->

<!-- book section starts  -->

<section id="book-food">
    <div class="book-food" style=" width: 100%;
    background: url('images/bg/bg-3.jpg') no-repeat center;
    background-size: cover;
    background-attachment: fixed;
    background-position: 0 71.91px;
    padding: 4.375rem;">
    <div class="container book-food-text">
        <div class="row text-center">
        <div class="col-lg-9 col-md-12">
            <h2 style=" color: white;">Baked daily fresh ...</h2>
            </div>
           <div class="col-lg-3 col-md-12 mt-lg-0 mt-4">
            <button class="main-btn btn">Learn More</button>
            </div> 
        </div>
        </div>
    </div>
    </section>
    
<!-- book section ends -->

<!-- newslettar section starts  -->

    <section id="newsletter">
    <div class="newsletter wrapper" style="width: 55%;
    margin: 0 auto;">
        <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <h2>
                Subscribe our newsletter ...!
                </h2>
                <p>
                Limited time offers of every mounth
                </p>
            </div>
            </div>
            <form class="newsletter">
            <div class="row">
                <div class="col-md-8 col-12">
                <input class="form-control" placeholder="Email" type="email" name="email" style="height: 3.225rem;
    padding: 0 1.25rem;
    font-size: 0.8rem;
    width: 100%;
    border: none;
    border-radius: 0;
    background: transparent;
    border: 0.18rem solid grey;
    color: black;
    font-weight: 700;">
                </div>
                <div class="col-md-8 col-12">
                <input class="main-btn btn" type="submit" name="sub">
                </div>
                </div>
            </form>
        </div>
        </div>
    </section>
    
    <!-- end newslettar section -->

<!-- footer section start -->
    
    <footer class=" text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: white;">
    © 2021 Copyright:
    <a class="text-dark" href="#">Saoudi Anis</a>
  </div>
  <!-- Copyright -->
</footer>
    
<!-- footer section ends -->












<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- custom js file link  -->
<script src="script.js"></script>
 

</body>
</html>