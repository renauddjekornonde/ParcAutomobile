<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{config('app.name')}}- @yield('title')</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="EEducation master is one of the best eEducational html template, it's suitable for all eEducation websites like university,college,school,online eEducation,tution center,distance eEducation,computer eEducation">
    <meta name="keyword" content="eEducation html template, university template, college template, school template, online eEducation template, tution center template">
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
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">


</head>

<body>
    @include("admin.mainContenaire")

    @include("admin.bodyContenaire")

            <!--== BODY INNER CONTAINER ==-->
         @yield("content")

        </div>
    </div>

    <!--Import jQuery before materialize.js-->
    <script src={{asset("assetAdmin/js/main.min.js")}}></script>
    <script src={{asset("assetAdmin/js/bootstrap.min.js")}}></script>
    <script src={{asset("assetAdmin/js/materialize.min.js")}}></script>
    <script src={{asset("assetAdmin/js/custom.js")}}></script>
      <!-- ================Start ionicon============ -->
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
      <!-- =========================End ionicon================= -->

      {{-- <script src="{{asset('assets/main/user/user.js')}}"></script> --}}

</body>
</html>
