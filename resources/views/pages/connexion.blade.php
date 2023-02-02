@extends("rahim.baseConnexion")
@section("container")
<body class="main-layout">
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
            <h5 class="card-title text-center">Signi in</h5>
              <form class="form-signin">
                <div class="form-label-group">
                <label for="inputEmail">Email</label>
                  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="email">
                </div>

                <div class="form-label-group">
                    <label for="inputPassword">Password</label>
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
                </div>

                <div class="input-field s12"><li><a href="{{route('register') }}" data-toggle="myModal" data-target="#myModal">Creer un compte</a></li> </div>
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
