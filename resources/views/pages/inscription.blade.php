@extends("rahim.baseInscription")
@section("container")
<body class="main-layout">
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
            <h5 class="card-title text-center">Inscription</h5>
              <form class="form-signin" method="POST" action="{{route('register')}}" id="form-register">
                @csrf
                <div class="form-label-group">
                <label for="nom">Nom</label>
                  <input type="text" id="nom" class="form-control" placeholder="Entrer votre nom" value="{{old('nom')}}" required autocomplete="nom" autofocus name="nom">
                  <small class="text-danger fw-bold fw-bold" id="error-register-nom"></small>
                </div>
                <div class="form-label-group">
                <label for="email">Email</label>
                  <input type="email" id="email" class="form-control" placeholder="Email address" name="email" required autocomplete="email" autofocus value="{{old('email')}}" url-emailExist={{route('existEmail')}} token="{{csrf_token()}}">
                  <small class="text-danger fw-bold fw-bold" id="error-register-email"></small>
                  @error('email')
                  <div class="alert alert-danger text-center fw-bold" role="alert">
                      <span>Adresse Email déjà utiliser<span>
                  </div>
              @enderror
                </div>

                <div class="form-label-group">
                    <label for="Password">Password</label>
                  <input type="password" id="password" class="form-control" placeholder="Password" name="password" required autocomplete="password" autofocus value="{{old('password')}}">
                  <small class="text-danger fw-bold fw-bold" id="error-register-password"></small>
                </div>

                <div class="form-label-group">
                    <label for="confirmePassword">Confirm Password</label>
                    <input type="password" id="confirmePassword" class="form-control" placeholder="Password" name="confirmePassword" required autocomplete="confirmePassword" autofocus value="{{old('confirmePassword')}}">
                    <small class="text-danger fw-bold fw-bold" id="error-register-confirmePassword"></small>
                </div> <br>

                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input fw-bold" type="checkbox" id="agreeTerms" name="agreeTerms">
                    <label class="form-check-label fw-bold" for="agreeTerms">Accepter les conditions d'utilisation</label><br>
                    <small class="text-danger fw-bold" id="error-register-agreeTerms"></small>
                  </div>
              </div> <br>

                <button type="button" class="btn btn-lg text-uppercase btn-block" id="register-user">S'inscrire</button>

                <p class="text-center text-muted mt-4 fw-bold">Vous avez déja un compte ? <a href="{{route('login')}}">Login</a> </p>
                <hr class="my-4">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


@endsection
