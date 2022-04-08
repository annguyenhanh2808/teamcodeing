
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

        <link rel="stylesheet"  href="{{asset('login/LoginComponent/style.css')}}">

</head>

<body>

    <div class="container">
        <div class="forms-container">
            <div class="sign-in-form-container">
                <form action="#" class="sign-in-form" action="" method="post">
                    @csrf
                    <img class="logo" src="{{asset('login/LoginComponent/Shared/Login-02.svg')}}" alt="">

                    <h2 class="title">Sign in</h2>
                    <div class="form-group input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="email" id="username" class="form-control">
                    </div>
                    <div class="form-group input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="remember-me"
                               class="text-info"><span>Remember me</span> <span>
                                    <input id="remember-me" name="remember_me" type="checkbox"></span></label><br>
                        <input type="submit" name="submit" class="btn btn-info btn-md btn solid" value="login">
                    </div>
                </form>
            </div>
        </div>

            <div class="panels-container">
                <div class="panel left-panel">
                  <div class="content">
                    <h1>WELCOME BACK</h1>
                    <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                      ex ratione. Aliquid!
                    </p>
                  </div>
                  <img src="{{asset('login/LoginComponent/Shared/Login-02.svg')}}" class="image" alt="" />
                </div>
            </div>
    </div>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
</body>
</html>
