@extends('baseAccueil')
@section('title', 'Payement')
@section('content')
<section class="banner_main" id="banner">

    <div class="container">
       <div class="row d_flex">
          <div class="col-md-20">
             <div class="text-bg">
<h1>Valider votre commande<h1>
 <!-- Replace "test" with your own sandbox Business account app client ID -->

 <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>

 <!-- Set up a container element for the button -->

 <div id="paypal-button-container" style="margin-left: 20%; margin-top: 20%"></div>

 <script src="{{asset('assetAdmin/js/paypal.js')}}"></script>
</div>

@endsection
