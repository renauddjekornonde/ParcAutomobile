<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{config('app.name')}}- Detail</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education master is one of the best educational html template, it's suitable for all education websites like university,college,school,online education,tution center,distance education,computer education">
    <meta name="keyword" content="education html template, university template, college template, school template, online education template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href={{asset("assetAdmin/images/fav.ico")}} type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href={{asset("assetAdmin/css/font-awesome.min.css")}}>
    <!-- ALL CSS FILES -->
    <link href={{asset("assetAdmin/css/materialize.css")}} rel="stylesheet">
    <link href={{asset("assetAdmin/css/bootstrap.css")}} rel="stylesheet" />
    <link href={{asset("assetAdmin/css/style.css")}} rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href={{asset("assetAdmin/css/style-mob.css")}} rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>

    <!-- MOBILE MENU -->
    <section>
        <div class="ed-mob-menu">
            <div class="ed-mob-menu-con">
                <div class="ed-mm-left">
                    <div class="wed-logo">
                        <a href="index-2.html">
                            <img src={{asset("assetAdmin/images/newlogo.png")}} alt="" />
                            <!-- Blog News -->
						</a>
                    </div>
                </div>
                <div class="ed-mm-right">
                    <div class="ed-mm-menu">
                        <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                        <div class="ed-mm-inn">
                            <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                            <h4>All Courses</h4>
                            <ul>
                                <li><a href="course-details.html">Accounting/Finance</a></li>
                                <li><a href="course-details.html">civil engineering</a></li>
                                <li><a href="course-details.html">Art/Design</a></li>
                                <li><a href="course-details.html">Marine Engineering</a></li>
                                <li><a href="course-details.html">Business Management</a></li>
                                <li><a href="course-details.html">Journalism/Writing</a></li>
                                <li><a href="course-details.html">Physical Education</a></li>
                                <li><a href="course-details.html">Political Science</a></li>
                                <li><a href="course-details.html">Sciences</a></li>
                                <li><a href="course-details.html">Statistics</a></li>
                                <li><a href="course-details.html">Web Design/Development</a></li>
                                <li><a href="course-details.html">SEO</a></li>
                                <li><a href="course-details.html">Google Business</a></li>
                                <li><a href="course-details.html">Graphics Design</a></li>
                                <li><a href="course-details.html">Networking Courses</a></li>
                                <li><a href="course-details.html">Information technology</a></li>
                            </ul>
                            <h4>User Account</h4>
                            <ul>
                                <li><a href="#!" data-toggle="modal" data-target="#modal1">Sign In</a></li>
                                <li><a href="#!" data-toggle="modal" data-target="#modal2">Register</a></li>
                            </ul>
                            <h4>All Pages</h4>
                            <ul>
                                <li><a href="index-2.html">Home</a></li>
                                <li><a href="about.html">About us</a></li>
                                <li><a href="admission.html">Admission</a></li>
                                <li><a href="all-courses.html">All courses</a></li>
                                <li><a href="course-details.html">Course details</a></li>
                                <li><a href="awards.html">Awards</a></li>
                                <li><a href="seminar.html">Seminar</a></li>
                                <li><a href="events.html">Events</a></li>
                                <li><a href="event-details.html">Event details</a></li>
                                <li><a href="event-register.html">Event register</a></li>
                                <li><a href="contact-us.html">Contact us</a></li>
                            </ul>
                            <h4>User Profile</h4>
                            <ul>
                                <li><a href="dashboard.html">User profile</a></li>
                                <li><a href="db-courses.html">Courses</a></li>
                                <li><a href="db-exams.html">Exams</a></li>
                                <li><a href="db-profile.html">Prfile</a></li>
                                <li><a href="db-time-line.html">Time line</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--HEADER SECTION-->
    <section>
        <!-- LOGO AND MENU SECTION -->
        <div class="top-logo" data-spy="affix" data-offset-top="250">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wed-logo">
                            <a href="index-2.html">
                                <img src={{asset("assetAdmin/images/newlogo.png")}} alt="" />
                            </a>
                        </div>
                        <div class="main-menu">
                            <ul>
                                <li><a href="{{route('home')}}" style="text-transform: uppercase;">Accueil</a>
                                </li>
                                <li>
                                    <a href="{{route('service')}}" class="mm-arr" style="text-transform: uppercase;">Service</a>
                                </li>
                                <li>
                                    <a href="{{route('contact')}}" class="mm-arr" style="text-transform: uppercase;">Contact</a>
                                </li>
                                @auth
                                <li>
                                    <a href="{{route('ap_logout')}}"><i class="fa fa-user"></i>{{"  ".Auth::user()->name}}</a>
                                </li>
                                @endauth
                                @guest
                                <li>
                                    <div class="sign_btn"><a href="{{route('login')}}">Sign in</a></div>
                                </li>
                                @endguest
                            </ul>

                        </div>
                    </div>
                    <div class="all-drop-down-menu">

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--END HEADER SECTION-->
    <!--SECTION START-->
    <!-- UPCOMING EVENTS -->
    <section>
        <div class="container com-sp pad-bot-0">
            <div class="row">
                <div class="col-md-8">
                    <div class="ho-ev-latest ho-ev-latest-bg-1">
                        <div class="ho-lat-ev">
                            <h3 style="color: white;">Marque</h3>
                            @foreach ($photoEtVoiture as $marqueId)
                                @foreach ($marques as $marque)
                                    @if ($marqueId->photoVoiture->marque_id==$marque->id)
                                        <p>{{$marque->nom_marque}}</p>
                                    @endif
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                    <div class="ho-event pg-eve-main pg-blog">
                        <ul>
                            <li>
                                <div class="ho-ev-date pg-eve-date"><span>{{date('d')}}</span><span>{{date('M')}},{{date('Y')}}</span>
                                </div>
                                <div class="pg-eve-desc pg-blog-desc">
                                    <a href="event-register.html">
                                        @foreach ($photosEtModel as $model)
                                        <h4>{{$model->photoModel->nom_model}}</h4>
                                        @endforeach
                                    </a>
                                    {{-- @foreach ($photos as $photo) --}}
                                    <img src={{Storage::url($photos->description)}} alt="">
                                    {{-- @endforeach --}}
                                </div>
                                <div class="pg-eve-reg pg-blog-reg">
                                    <a href="#!" data-toggle="modal" data-target="#modal2">Commander</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div style="top: 2rem" class="col-md-4 position-sticky">
                    <div class="ho-ev-latest ho-ev-latest-bg-3">
                        <div class="ho-lat-ev">
                            <h4>Information de la voiture</h4>
                            <p></p>
                        </div>
                    </div>
                    <div class="ho-st-login">
                        <ul class="tabs tabs-hom-reg">
                            </li>
                        </ul>
                        <div id="hom-vijay" class="row col s12">
                         <div style="display:flex; position: relative; justify-content: space-between">
                            @foreach ($photosEtModel as $model)

                                <div >
                                    <h4  class="fw-bold"> Prix  </h4>
                                </div>

                                <div class="me-auto">
                                    {{$model->photoModel->prix}} FCFA
                                </div>
                            </div> <br> <br>

                            <div style="display:flex; position: relative; justify-content: space-between">

                                <div >
                                    <h4  class="fw-bold">  Vitesse  </h4>
                                </div>

                                <div class="me-auto">
                                100
                                </div>
                            </div> <br> <br>

                            <div style="display:flex; position: relative; justify-content: space-between">

                                <div >
                                    <h4  class="fw-bold">  Moteur  </h4>
                                </div>

                                <div class="me-auto">
                                56
                                </div>
                            </div> <br> <br>

                            <div style="display:flex; position: relative; justify-content: space-between">

                                <div >
                                    <h4  class="fw-bold">  Couleur  </h4>
                                </div>

                                <div class="me-auto">
                                    {{$model->photoModel->couleur}}
                                </div>
                            </div> <br> <br>

                            <div style="display:flex; position: relative; justify-content: space-between">

                                <div >
                                    <h4>  Carburant  </h4>
                                </div>

                                <div class="me-auto">
                                300
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div id="hom_log" class="col s12">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


       <!-- POPULAR COURSES -->
       <section class="pop-cour">
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>AUTRES  <span>SUGGESTION</span></h2>
                    <!--<p>VOICI LA LISTES DE QUELQUES ARTICLES.</p>-->
                </div>
            </div>

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item slider1 active">
                        <div class="home-top-cour col-3">
                            <!--POPULAR COURSES IMAGE-->

                            <div class="col-md-3" style="margin-left:40%"> <img src={{Storage::url($photos->description)}} alt=""> </div>
                            <div class="hom-list-share" style="margin-left:400px;">
                                    <ul>
                                        <li><a href="{{route('showPhoto',$photos->id)}}"><i class="fa fa-eye" aria-hidden="true"></i> Voir</a> </li>

                                    </ul>
                                </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">

                            </div>
                        </div>
                    </div>
                     @foreach ($photosModels as $index=> $photo)
                    <div class="item">
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->

                            <div class="row"><div class="col-md-3" style="margin-left:40%"> <img src={{Storage::url($photo->description)}} alt="" style="width:100%"> </div></div>
                            <div class="hom-list-share" style="margin-left:400px;">
                                <ul>
                                    <li><a href="{{route('showPhoto',$photo->id)}}">
                                    <i class="fa fa-eye" aria-hidden="true"></i>Voir</a>
                                    </li>
                                </ul>
                            </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">

                                <div class="hom-list-share">

                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>


                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <i class="fa fa-chevron-left slider-arr"></i>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <i class="fa fa-chevron-right slider-arr"></i>
                </a>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div>


                    </div>
                </div>
                <div class="col-md-6">
                    <div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--HEADER SECTION-->
    <section class="wed-rights">
        <div class="container">
            <div class="row">
                <div class="copy-right">
                    <p>© 2019 All Rights Reserved. Design by <a href="https://html.design/" style="color: white;font-size: 18px;line-height: 22px; "> ESITECAR</a></p>
                </div>
            </div>
        </div>
    </section>

            <!-- REGISTER COMMANDE -->
        <div id="modal2" class="modal fade" role="dialog">
            <div class="log-in-pop">

                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="{{asset('assetAdmin/images/cancel.png')}}" alt="" />
                    </a>
                    <h4>Formulaire de commande</h4>
                    <form class="s12" method="post" action="{{route('storeCommande', $id)}}">
                    @csrf
                        <div>
                            <div class="input-field s12">
                                <input type="text" data-ng-model="name1" class="validate" name="nom">
                                <label for="nom">Nom Complet</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="email" class="validate" name="email">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="text" class="validate" name="adresse">
                                <label for="adresse">Adresse</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="text" class="validate" name="cni">
                                <label for="cni">Numéro Carte D'identité</label>
                            </div>
                        </div>
                        <div>
                        <div>
                            <div class="input-field s12">
                                <input type="date" class="validate">
                            </div>
                            <label for="naissance">Naissance</label>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" value="Valider" class="waves-effect waves-light log-in-btn"> </div>
                        </div>
                        <input type="hidden" name="idVoiture" value="{{$id}}" selected>
                        <div>
                            {{-- <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Are you a already member ? Login</a> </div> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <!--Import jQuery before materialize.js-->
    <script src={{asset("assetAdmin/js/main.min.js")}}></script>
    <script src={{asset("assetAdmin/js/bootstrap.min.js")}}></script>
    <script src={{asset("assetAdmin/js/materialize.min.js")}}></script>
    <script src={{asset("assetAdmin/js/custom.js")}}></script>
</body>


</html>
