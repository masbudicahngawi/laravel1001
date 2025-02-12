<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Signin</title>
  <!-- Bootstrap core CSS -->
  <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="/css/signin.css" rel="stylesheet">
</head>
<body class="text-center">
  <main class="form-signin">
    <form action="{{ route('proses-login') }}" method="post">
      @csrf
      <h1 class="h3 mb-3 fw-normal">XXXXXXXXXXXXXXXXXXX</h1>

      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" name="name" placeholder="Username" required>
        <label for="floatingInput">Username</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
        <label for="floatingPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <!-- <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      -->      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p> -->
    </form>
  </main>



</body>
</html>
