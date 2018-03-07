<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fully furnished classic family house and lot property for sale in las pinas city metro manila">
    <meta name="keywords" content="house and lot, for sale, las pinas city, metro manila, near southmall, family home, buying house, looking for house, fully furnished, ready to move in, properties, property">
    <meta name="robots" content="index,follow">
    <meta name="author" content="introvertwebmaster">

    <title>House for sale - Play</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('app/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('app/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="{{ asset('app/vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('app/css/creative.min.css') }}" rel="stylesheet">

    <link href="{{ asset('app/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('app/css/bootstrap-social.css') }}" rel="stylesheet">

    <script>
      if (window.location.hash == '#_=_') {
          window.location.hash = ''; // for older browsers, leaves a # behind
          history.pushState('', document.title, window.location.pathname); // nice and clean
          e.preventDefault(); // no page reload
      }
    </script>

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Home</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Key Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#amenities">Amenities</a>
            </li>
            @if(!Auth::check())
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#housetour">360 House Tour</a>
            </li>
            @endif
            @if(Auth::check())
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#facade">Facade</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#ground">Ground</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#upper">Upper</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#attic">Attic</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#locationmap">Location</a>
            </li>
            @endif
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
            @if(Auth::check())
              <li class="nav-item">
              <a class="nav-link" href="{{ route('social.logout') }}">Logout</a>
              </li>
            @else
              <li class="nav-item">
              <a class="nav-link" href="{{ route('social.auth') }}">Login</a>
              </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Your New Home</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="mb-5 well"><strong>Beautiful home, built to withstand the test of time on a great location!</strong> </p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Information</h2>
            <hr class="light my-4">
            <div class="text-left text-white">
                <ul>
                <li>Payment Terms : Cash</li>
                <li>Floor area : 370 sq.m.</li>
                <li>Land area: 294 sq.m</li>
                <li>Property Features : 2-storey house with attic</li>
                <li>Master's Bedroom with Toilet, Bath and Jacuzzi, Walk-in Closet</li>
                <li>Additional 5 Bedrooms with 5 Toilets and 4 Baths</li>
                <li>Maid’s Quarter with Toilet and Bath</li>
                <li>2 Car Garage</li>
                <li>Storage Room</li>
                <li>Open Floor Plan</li>
                <li>Clean and Dirty Kitchen</li>
                <li>Spacious Living Area, Family Room, Dining Area</li>
                <li>Laundry Area</li>
                <li>Foyer</li>
                <li>Balcony</li>
                <li>Maynilad Water Supply with Centralized Heating</li>
                <li>Gated Community Area with 24-hours Security with Roving Guards</li>
                <li>Location with Schools Nearby, Walking Distance From SM Southmall</li>
                <li>Flood Free Area</li>
                <li>Fully Furnished</li>
                <li>Dining and Living Set from Muebles Italiano</li>
            </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Key Features</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-map-marker text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Location</h3>
              <p class="text-muted mb-0">Great location, nearby malls, schools and hospitals</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-lock text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Security</h3>
              <p class="text-muted mb-0">Gated subdivision with roaving guards</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-bed text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Furnished</h3>
              <p class="text-muted mb-0">High quality furnishing and fixtures</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-building text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Built</h3>
              <p class="text-muted mb-0">Built with strong foundation and quality materials</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    @include('modals.amenities')

    @if(Auth::check())

    @include('modals.ricoh')
    @include('modals.ground')
    @include('modals.second')
    @include('modals.attic')

    @endif
    
    
<!-- Button trigger modal -->
    
   
    @include('sections.amenities')

    @if(Auth::check())

    @include('sections.facade')
    @include('sections.ground')
    @include('sections.second')
    @include('sections.attic')
    @include('sections.maps')
    @endif
    
    @if(!Auth::check())
    <section class="bg-primary" id="housetour">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">360 House Tour</h2>
            <hr class="light my-4">
            <div class="text-left text-white" style="padding-bottom: 25px;">
                To protect the privacy of the home owners, only verified users may view the 360 images of the house. Please verify your identity by logging into the website using your facebook account.
            </div>
            <div class="col-lg-12 mr-auto text-center col-centered">
            <a class="btn btn-facebook btn-xl" href="{{ route('social.auth') }}" >Login with Facebook</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endif

    <section id="contact" class="bg-dark text-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="my-4">
            <p class="mb-5">For any inquiries or to schedule a visit, please send us an email!</p>
          </div>
        </div>
        <div class="row">
          <!-- <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>0908-862-3402</p>
          </div> -->
          <!-- <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:antariprince@gmail.com">antariprince@gmail.com</a>
            </p>
          </div> -->
          <div class="col-lg-12 mr-auto text-center col-centered">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:info@booksforcast.com">info@booksforcast.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('app/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('app/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('app/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('app/vendor/scrollreveal/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('app/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('app/js/creative.min.js') }}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115038825-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-115038825-1');
    </script>


  </body>

</html>
