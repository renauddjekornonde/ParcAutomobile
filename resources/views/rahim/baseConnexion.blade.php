<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>rento</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- FAV ICON(BROWSER TAB ICON)  -->
      <link rel="shortcut icon" href={{asset("assetsA/images/fav.ico")}} type="image/x-icon">
      <!-- bootstrap css -->
      <link rel="stylesheet" href={{asset("assetsA/css/bootstrap.min.css")}}>
      <!-- style css -->
      <link rel="stylesheet" href={{asset("assetsA/css/style.css")}}>
      <!-- Responsive-->
      <link rel="stylesheet" href={{asset("assetsA/css/responsive.css")}}>
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href={{asset("assetsA/css/jquery.mCustomScrollbar.min.css")}}>
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <style>
        body{
            background-image: url(assetsA/images/Image.jpeg);
        }
        button{
            background-color: #f6d601;
        }
      </style>

   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- header -->
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
                                 <a class="nav-link" href="{{route('home')}}"> Accueil  </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{route('service')}}">Services</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{route('contact')}}">Contact</a>
                              </li>
                           </ul>
                           <div class="sign_btn" ><a href="{{route('connexion')}}">Sign in</a></div>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>

@yield("container")
</html>

