@extends("rahim.baseInscription")
@section("container")
<body class="main-layout">
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
            <h5 class="card-title text-center">Sign up</h5>
              <form class="form-signin">
                <div class="form-label-group">
                <label for="inputEmail">Email</label>
                  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
                </div>

                <div class="form-label-group">
                    <label for="inputPassword">Password</label>
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
                </div>

                <div class="form-label-group">
                    <label for="inputPassword">Confirm Password</label>
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="confirmPassword" required>
                </div>

                <button type="submit" class="btn btn-lg text-uppercase btn-block" >S'inscrire</button>
                <hr class="my-4">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

@endsection
