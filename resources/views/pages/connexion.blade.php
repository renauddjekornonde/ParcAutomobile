@extends("rahim.baseInscription")
@section('title', 'Connexion')
@section("container")
<body class="main-layout">
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
            <h5 class="card-title text-center">Connexion</h5>
              <form class="form-signin" method="post" action="{{ route('login')}}">
                @csrf

            @error('email')
                <div class="alert alert-danger text-center fw-bold" role="alert">
                    {{$message}}
                </div>
            @enderror

            @error('password')
                <div class="alert alert-danger text-center fw-bold" role="alert">
                    {{$message}}
                </div>
            @enderror

                <div class="form-label-group">
                <label for="email">Email</label>
                  <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" value="{{old('email')}}" required autocomplete="email" autofocus name="email">
                </div>

                <div class="form-label-group">
                    <label for="password">Password</label>
                  <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                </div> <br>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-check form-switch">
                        <input class="form-check-input fw-bold" type="checkbox" role="switch" id="remember" name="remember" {{old('remember')? 'checked': ''}}>
                        <label class="form-check-label fw-bold" for="remember">Se souvenir de moi</label>
                        </div>
                    </div>
                </div>

                <p class="text-center text-muted mt-4 fw-bold">Vous n'avez pas de compte ? <a href="{{route('register')}}">Creer un compte</a> </p> <br>
                <button type="submit" class="btn btn-lg text-uppercase btn-block" >Se connecter</button>
                <hr class="my-4">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

@endsection
