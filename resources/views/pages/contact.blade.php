@extends("rahim.baseContact")
@section("content")
<body class="main-layout">
<!-- header -->
<header>
    <!-- header inner -->

<body class="main-layout">
<div class="container">
    <br><br><h1 class="text-center text-white">Contactez-nous</h1>
    <form>
        <div class="form-group col-md-4">
        <label for="nom" class="text-white">Nom</label>
        <input type="text" class="form-control" id="nom" placeholder="Entrez votre nom">
        </div>
        <div class="form-group col-md-4">
        <label for="prenom" class="text-white">Prénom</label>
        <input type="text" class="form-control" id="prenom" placeholder="Entrez votre prénom">
        </div>
        <div class="form-group col-md-4">
        <label for="email" class="text-white">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Entrez votre adresse email">
        </div>
        <div class="form-group">
        <label for="message" class="text-white">Message</label>
        <textarea class="form-control" id="message" rows="3"></textarea>
        </div>
        <button type="submit" class="btn text-center">Envoyer</button><br><br>
    </form>
    </div>
</div>
</body>
@endsection
