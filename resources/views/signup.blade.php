<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

  <title>sign Up app</title>
</head>

<body>

  <section class="signup-user">
    <div class="right">
 <img src="{{ asset('images/logo.png ')}}" class="logo" alt="">
            <h1 class="header-third">
                Get Ready for the Founder's Journey!
            </h1>
            <p class="subheader">
                First-time Founder? Or is this your second time? No problem, <br>we're here to help. Make sure you fill out the <br> form and choose the incubation method you prefer. <br>
                <br>The next wave will be held in October 2024 - January 2025 <br> (For Mentored Incubation) Self-incubation can be done anytime
            </p>
            <img src="{{ asset('images/signup.png') }}" alt="">
            <p class="subheader">
                Have you successfully created an account?
            </p>

            <a href="{{ route('login') }}" class="btn btn-master btn-primary">
                Sign In
            </a>
      </div>

    <div class="left">
      <h1 class="header-third">
        SIGN UP
      </h1>

      <h2 class="header-second">
        CREATE AN ACCOUNT
      </h2>

      <p class="subheader">
        Come on, fill in your account details <br>
         completely immediately and accurately
      </p>

      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="fullName" placeholder="Full Name">
        <label for="fullName">Full Name</label>
      </div>

      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="username" placeholder="Username">
        <label for="username">Username</label>
      </div>

      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>

      <div class="form-floating mb-3">
        <input type="tel" class="form-control" id="phoneNumber" placeholder="Phone Number">
        <label for="phoneNumber">Phone Number</label>
      </div>

      <div class="form-floating mb-3">
        <select class="form-select form-select-lg mb-3"  placeholder="Nationality">
          <option selected>Nationality</option>
          <option value="AF">Afghanistan</option>
          <option value="AS">Arab Saudi</option>
          <option value="IDN">Indonesian</option>
          <option value="SG">SINGAPORE</option>
          </select>
      </div>

      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>

      <div class="form-floating mb-3">
        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
        <label for="confirmPassword">Confirm Password</label>
      </div>

      <div class="form-floating mb-3">
        <input type="city" class="form-control" id="floatingcity" placeholder="City">
        <label for="floatingcity">city</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
        <label class="form-check-label" for="inlineRadio1">Self-Paced</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
        <label class="form-check-label" for="inlineRadio2">Guided</label>
      </div>

      <p>
        <a class="btn btn-border btn-primary" href="{{ route('success') }}">
            Sign Up
        </a>
    </p>
      
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHe