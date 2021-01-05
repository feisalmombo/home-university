    <!doctype html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Home University | Login</title>
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
          <div class="logo text-center mb-4">
            <a class="navbar-brand" href="{{ url('/') }}"><strong style="color: #2B3483">Home University.</strong></a>
            {{--  if logo is image enable this  --}}
            {{--  <a class="navbar-brand" href="#">
                <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
            </a>  --}}
          </div>
          <div class="login-form py-5 px-4 mx-auto">
            <h3 class="account-title mb-4">Please Log in, or <a href="{{ route('register') }}">Sign Up</a></h3>
            <form action="#" method="GET">
              <div class="form-group">
                <label class="field-info" for="inputUsernameEmail">Username or email</label>
                <input type="text" class="form-control" name="username" id="inputUsernameEmail" required="">
              </div>

              <div class="form-group">
                <a class="pull-right forgot" href="{{ route('password.request') }}">Forgot password?</a>
                <label class="field-info" for="inputPassword">Password</label>
                <input type="password" class="form-control" name="password" id="inputPassword" required="">
              </div>

              {{--  <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                <label class="custom-control-label" for="defaultUnchecked">Remember Me</label>
              </div>  --}}

              <button type="submit" class="btn btn-primary btn-theme">
                Log in
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
    </body>

    </html>
