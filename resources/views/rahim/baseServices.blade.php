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
      <!-- FAV ICON(BROWSER TAB ICON) -->
      <link rel="shortcut icon" href={{asset("assetsA/images/fav.ico")}} type="image/x-icon">
      <!-- bootstrap css -->
      <link rel="stylesheet" href={{asset("assetsA/css/bootstrap.min.css")}}>
      <!-- style css -->
      <link rel="stylesheet" href={{asset("assetsA/css/style.css")}}>
      <!-- Responsive-->
      <link rel="stylesheet" href={{asset("assetsA/css/responsive.css")}}>
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href={{asset("css/jquery.mCustomScrollbar.min.css")}}>
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <style>
        body{
            background-color: #1EA6C0;
        }
      </style>
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   @yield("container")
   <footer>
    <p>Copyright &ESITEC-AUTO</p>
   </footer>
</html>

