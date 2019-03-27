<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <script src="jquery-3.3.1.min.js"></script>
  <link rel="styleSheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>

  <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">

</head>
<body class="bg-white">

  <div class="container">  
    <nav class="navbar navbar-light bg-light static-top bg-dark">
      <div class="container">
        <a class="navbar-brand text-light" href="index.html">City Tour</a>
      </div>
    </nav>

    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">City Tour</h1>
            <h2 class="mb-5">Find the best place to go!</h2>
          </div>
      </div>
    </header>

    <div class="container bg-light text-center pt-4">
      <form action="sign.php" method="post">
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="user" placeholder="username">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" name="pass" placeholder="password">
        </div>
      </div>
      <button type="submit" class="btn btn-dark" name="signin" value="Sign In">Sign In</button>
      <button type="submit" class="btn btn-dark" name="signup" value="Sign Up">Sign Up</button>
      </form>
    </div>

    <!-- Footer -->
    <footer class="footer bg-light" position="fixed">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
            </ul>
            <p class="text-muted small mb-4 mb-lg-0">&copy; City Tour 2018. All Rights Reserved.</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-twitter fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>
     <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>