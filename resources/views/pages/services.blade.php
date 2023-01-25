@extends("rahim.baseServices")
@section("container")
<body class="main-layout">
    <header>
        <!-- header inner -->
        <div class="header">
           <div class="container">
              <div class="row">
                 <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                       <div class="center-desk">
                          <div class="logo">
                             <a href="index.html"><img src={{asset("assetsA/images/logo1.png")}} alt="#" /></a>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <nav class="navigation navbar navbar-expand-md navbar-dark ">
                       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                       </button>
                       <div class="collapse navbar-collapse" id="navbarsExample04">
                          <ul class="navbar-nav mr-auto">
                             <li class="nav-item">
                                <a class="nav-link" href="index.html"> Accueil  </a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link" href="services.html">Services</a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                             </li>
                          </ul>
                          <div class="sign_btn"><a href="connexion.html">Sign in</a></div>
                       </div>
                    </nav>
                 </div>
              </div>
           </div>
        </div>
     </header>
    <div class="choose ">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage">
                    <h2>Pourquoi nous-choisir?</h2>
                    <span>Bienvenue chez ESITEC AUTO, votre destination ultime pour l'achat de véhicules d'occasion<br>ou neuves fiables et abordables </span>
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col-md-12">
                 <div class="choose_box">
                    <span>01</span>
                    <p> Nous offrons une vaste sélection de voitures de toutes les marques et modèles, tous soigneusement sélectionnés et inspectés pour garantir la qualité et la fiabilité </p>
                 </div>
              </div>
              <div class="col-md-12">
                 <div class="choose_box">
                    <span>02</span>
                    <p>Notre équipe de professionnels expérimentés est là pour vous aider à trouver le véhicule parfait pour répondre à vos besoins et à votre budget. Nous offrons également des options de financement flexibles pour vous aider à obtenir le véhicule de vos rêves. </p>
                 </div>
              </div>
              <div class="col-md-12">
                 <div class="choose_box">
                    <span>03</span>
                    <p>Nous nous efforçons de vous offrir un service client exceptionnel pour que votre expérience d'achat de véhicule soit aussi agréable que possible.</p>
                 </div>
              </div>
           </div>
        </div>
     </div>

      <!-- end footer -->
      <!-- Javascript files-->
      <script src={{asset("assetsA/js/jquery.min.js")}}></script>
      <script src={{asset("assetsA/js/popper.min.js")}}></script>
      <script src={{asset("assetsA/js/bootstrap.bundle.min.js")}}></script>
      <script src={{asset("assetsA/js/jquery-3.0.0.min.js")}}></script>
      <script src={{asset("assetsA/js/plugin.js")}}></script>
      <!-- sidebar -->
      <script src={{asset("assetsA/js/jquery.mCustomScrollbar.concat.min.js")}}></script>
      <script src={{asset("assetsA/js/custom.js")}}></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <!-- Animation jquery -->

   </body>
@endsection
