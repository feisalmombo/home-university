    <!doctype html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Home University | Reset Passord</title>
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
            <h3 class="account-title mb-4">Please use Active Email</h3>
            <form action="#" method="GET">
              <div class="form-group">
                <label class="field-info" for="inputUsernameEmail">E-Mail address</label>
                <input type="text" class="form-control" name="username" id="inputUsernameEmail" required="">
              </div>

              <button type="submit" class="btn btn-primary btn-theme">
                Send Password Reset Link
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
    </body>

    </html>
