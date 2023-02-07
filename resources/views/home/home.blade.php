@extends("baseAccueil")
@section('title', 'Accueil')
@section("content")
      <!-- banner -->
      <section class="banner_main" id="banner">

        <div class="container">
           <div class="row d_flex">
              <div class="col-md-12">
                 <div class="text-bg">
                    <h1>Bienvenue</h1>
                    <strong>A</strong>
                    <span>ESITEC AUTO</span>
                    <p>
                       ESITEC Auto est une entreprise de location et de vente de véhicule en ligne qui veille à la sécurité des clients afin que ces derniers puissent recevoir leurs véhicules sans se déplacer.
                       <head></head>
                    </p>
                    <a href="{{route('service')}}">Nos Services</a>
                 </div>
              </div>
           </div>
        </div>
     </section>
     </div>
     <!-- end banner -->
     <!-- car -->
     <div  class="car">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage">
                    <h2>VARIETY OF CARS </h2>
                    {{-- <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</span> --}}
                 </div>
              </div>
           </div>
           <div class="row">
             @foreach ($photos as $image)
             <div class="col-md-4 ">
                <div class="car_box">
                   <figure><img src={{Storage::url($image->description)}} alt="#"/></figure>
                   <a href="{{route('showPhoto',$image->id)}}"><h3>{{$image->photoModel->nom_model}}</h3></a>
                   
                </div>
             </div>
             @endforeach

           </div>
        </div>
     </div>

     <!-- cutomer -->
     <div class="cutomer">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage">
                    <h2>Quels sont les avis de nos clients?</h2>
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col-md-12">
                 <div id="myCarousel" class="carousel slide cutomer_Carousel " data-ride="carousel">
                    <ol class="carousel-indicators">
                       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                       <li data-target="#myCarousel" data-slide-to="1"></li>
                       <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                       <div class="carousel-item active">
                          <div class="container">
                             <div class="carousel-caption ">
                                <div class="cross_img">
                                   <figure><img src={{asset("assets/images/cross_img.png")}} alt="#"/></figure>
                                </div>
                                <div class="our cross_layout">
                                   <div class="test_box">
                                      <h4>Abdourahim DIOUF</h4>
                                      <span>Developper</span>
                                      <p>ESITEC AUTO la meilleure vente de voitures en ligne!</p>
                                      {{-- <i><img src={{asset("assets/images/te1.png")}} alt="#"/></i> --}}
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class="carousel-item">
                          <div class="container">
                             <div class="carousel-caption">
                                <div class="cross_img">
                                   <figure><img src={{asset("assets/images/renaud.png")}} alt="#"/></figure>
                                </div>
                                <div class="our cross_layout">
                                   <div class="test_box">
                                      <h4>Renaud Djerkononde RAOUDEL</h4>
                                      <span>Developper</span>
                                      <p>ESITEC AUTO est la meilleure expèrience de vente de voitures que j'ai vu</p>
                                      {{-- <i><img src={{asset("assets/images/renaud.png")}} alt="#"/></i> --}}
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                       {{-- <div class="carousel-item"> --}}
                          <div class="container">
                             {{-- <div class="carousel-caption">
                                <div class="cross_img"> --}}
                                   {{-- <figure><img src={{asset("assets/images/")}} alt="#"/></figure>
                                </div>
                                <div class="our cross_layout">
                                   <div class="test_box">
                                      <h4>Due markes</h4>
                                      <span>Rental</span>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                                      <i><img src={{asset("assets/images/te1.png")}} alt="#"/></i> --}}
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <!-- end cutomer -->
@endsection
