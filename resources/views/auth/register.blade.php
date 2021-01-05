    <!doctype html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Home University | Register</title>
        <!-- web fonts -->
        <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900&display=swap" rel="stylesheet">
        <!-- //web fonts -->
        <!-- Template CSS -->
        <link rel="stylesheet" href="{{asset('temp/welcome-style/assets/css/style-liberty.css')}}">
        <link rel="stylesheet" href="{{asset('temp/welcome-style/assets/css/style-starter.css')}}">
      </head>
      <body>

    <body>

    <section class="w3l-login">
      <div class="login-box">
        <div class="container">
          <div class="logo text-center mb-3">
            <a class="navbar-brand" href="{{ url('/') }}"><strong style="color: #2B3483">Home University.</strong></a>
            <!-- if logo is image enable this
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
          </div>
          <div class="login-form py-5 px-4 mx-auto">
            <h3 class="account-title mb-4">Sign up now, or <a href="{{ route('login') }}">Log in</a></h3>
            <form action="#" method="GET">
              <div class="form-group">
                <label class="field-info" for="inputUsernameEmail">Name</label>
                <input type="text" class="form-control" name="name" id="inputUsernameEmail" required="">
              </div>
              <div class="form-group">
                <label class="field-info" for="inputEmail">Email</label>
                <input type="email" class="form-control" name="Email" id="inputEmail" required="">
              </div>
              <div class="form-group">
                <label class="field-info" for="inputPassword">Password</label>
                <input type="password" class="form-control" id="inputPassword" required="">
              </div>

              {{--  <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                <label class="custom-control-label" for="defaultUnchecked">I agree to the <a href="#terms" class="editContent">Terms of Use</a>
                </label>
              </div>  --}}

              <button type="submit" class="btn btn-primary btn-theme mt-4">
                Register
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
    </body>

    </html>
