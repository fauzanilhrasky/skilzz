<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <title>sign in app</title>
</head>

<body>

    <section class="login-user">
        <div class="left">
            <img src="{{ asset('images/logo.png ')}}" class="logo" alt=""> 
            <h1 class="header-third">
                Hello Welcome Back!
            </h1>
            <p class="subheader">
                we accept online learning services in this application, <br> <span>come on in and join together</span>
                come on in and join together
            </p>
            <img src="{{ asset('images/signin.png') }}" alt="">
            <p class="subheader">
                Do you have an account?
            </p>

            <a href="{{ route('signup') }}" class="btn btn-master btn-primary">
                Sign Up
            </a>
        </div>

        <div class="right"> 
            <h1 class="header-third">
                SIGN IN
            </h1>
            <p class="subheader">
                Welcome! please  fill username and password <br>
                to Sign In into your account 
            </p>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>

              <p>
                <button type="button" class="btn btn-link" >
                    <a href="#">
                        forgot the password?
                    </a>
                </button>
              </p>

              <p>
                <a class="btn btn-border btn-primary" href="{{ route('dashboard') }}">
                    Sign In
                </a>
            </p>
           
              <p>
                <a class="btn btn-border btn-google-login" href="#">
                    <img src="{{ asset('images/ic_google.svg') }}" class="icon" alt=""> Sign In with Google
                </a>
            </p>

        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>