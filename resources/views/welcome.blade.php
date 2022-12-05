<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Welcome</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        

        <!-- Scripts -->
        @vite(['resources/landingpage/style.css', 
        'resources/front/css/bootstrap.min.css',
        'resources/front/js/bootstrap.min.js'])

        <!-- JavaScript and dependencies -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    

    </head>

    <body>
    <nav class="navbar navbar-expand-lg bg-blue navbar-dark">
        <div class="container">
        <a class="navbar-brand" href="#">
            <img class="logo" src="{{ Vite::asset('resources/dist/img/logo.png') }}" />Business
        </a>
        
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navmenu"
                >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#services" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#pricing" class="nav-link">Pricing</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>    

    <!-- Hero section -->
    <section id="hero">
    <div class="container">
        <div class="row">
        <div class="col">
            <h1>{{ $sectionOne->text_main }}</h1>
            <p>{{ $sectionOne->text_secondary }}</p>
            <button type="button" class="hero-btn">Get Started</button>
        </div>
        <div class="col img-col">
    
            <img src="{{ $sectionOne->image }}" class="img-fluid" alt="Software Development">
        </div>
        </div>
        
    </div>
    </section>
    <!-- End Hero section -->

     <!-- About us section -->
    <section id="about-us">
    <div class="container">
        <div class="row">
        <div class="col">
            <img src="{{ $sectionTwo->abt_image }}" class="img-fluid" alt="Software Development">
        </div>

        <div class="col text-col">
           <h5>OUR STORY</h5>
           <h2>{{$sectionTwo->text_title}}</h2>
            <!--<h2>Our teams comes with the<br>experience and knowledge</h2>-->
            <div class="about">
                <ul id="accordion">
                    <li>
                        <a href="#about" class="active">Who we are</a>
                        <div class="box active">
                        {{$sectionTwo->who_we_are}}
                        </div>
                    </li>
                    <li>
                        <a href="#about">Our Vision</a>
                        <div class="box">
                       
                            <p> {{$sectionTwo->our_vision}}</p>
                        </div>
                    </li>
                    <li>
                        <a href="#about">Our History</a>
                        <div class="box">
                     
                            <p> {{$sectionTwo->our_history}}</p>
                        </div>
                    </li>

                </ul>
            </div>
        </div>

        </div>
        
    </div>

    </section>
<!-- End About us section -->

<!-- services section-->
<section id="services">
        <div class="container">
            <h2 class="text-center">Services</h2>
            <div class="row">
                @foreach ($services as $service)
                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                        <img src="{{ $service->icon }}"width="50px" class="logo-img" height="50px"></img>
                            <h4 class="card-title mt-3">{{$service->name}}</h4>
                            <p class="card-text mt-3">{{$service->description}}
                            </p>
                        </div>
                    </div>  
                </div>
                @endforeach

        </div>
    </section>

    <!--section for pricing-->
    <section id="pricing">
        <h2 id="pri">Pricing</h2>
        <div class="price-row">
            <div class="price-col">
                <p>Starter</p>
               <h5>{{$starter->title}}</h5>
                <h3><sup style="font-size: 20px">$</sup>{{$starter->amount}}<span>/month</span></h3>
                <button> Start Free Trial</button>
                <ul>
                    <li>Crust justo audio</li>
                    <li> Dapibus ac facilisi in</li>
                    <li>Mobi leo resus</li>
                    <li>Exceptuer sint accaecat</li>
                </ul>
                
            </div>

            <div class="price-col">
                <p id="exclusivetext">Exclusive</p>
                <h5>{{$exclusive->title}}!</h5>
                <h3><sup style="font-size: 20px">$</sup>{{$exclusive->amount}}<span>/month</span></h3>
                <button id="exclusive"> Start Free Trial</button>
                <ul>
                    <li>Crust justo audio</li>
                    <li> Dapibus ac facilisi in</li>
                    <li>Mobi leo resus</li>
                    <li>Exceptuer sint accaecat</li>
                </ul>
            </div>

            <div class="price-col">
                <p>Premium</p>
                <h5>{{$premium->title}}!</h5>
                <h3><sup style="font-size: 20px">$</sup>{{$premium->amount}}<span>/month</span></h3>
                <button> Start Free Trial</button>
                <ul>
                    <li>Crust justo audio</li>
                    <li>Dapibus ac facilisi in</li>
                    <li>Mobi leo resus</li>
                    <li>Exceptuer sint accaecat</li>
                </ul>
            </div>
        </div>
    </section>

    <!--section three-->
    <section id="section5">
        <div class="main_text">
            <h1>{{$sectionThree->title}}</h1>
            <p>{{$sectionThree->main_text}}</p>
            <button type="button" class="section5-btn">Get Started</button>
        </div>
      
    </section>



    <script src="https://code.jquery.com/jquery-3.6.1.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        $(document).on('click', '#accordion>li>a', function(){
            $(this).siblings('.box').addClass('active');
            $(this).closest('li').siblings('li').find('.box').removeClass('active');
        })
        $('#accordion').on('click','li>a',function(){
            $('#accordion li a.active').removeClass('active');
            $(this).addClass('actice');
        })
    </script>

</body>
</html>