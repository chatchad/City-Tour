<?php 
	session_start();
	$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>main</title>
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
<body>
	<div class="">
		<!-- Navigation -->
    
      <nav class="navbar navbar-light bg-light static-top bg-dark">
        <div class="container">
          
          <a class="navbar-brand text-light">Welcome, <?php echo $user; ?></a>
          <a href="map.php" class="navbar-brand text-light">Search on Maps</a>
          	<ul class="nav navbar">
        	  	<li class="btn dropdown">
        	  	<a class="dropdown-toggle text-white" data-toggle="dropdown">Account
        		<span class="caret"></span></a>
        		<ul class="dropdown-menu">
         	 		<li><a href="#">Change Password</a></li>
         	 		<li><a href="logout.php">Logout</a></li>
        		</ul>
          		</li>
      		</ul>
        </div>
      </nav>
    
    <!-- Masthead -->
    <Form Name ="form1" action="output.php" method="post">
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">City Tour</h1>
            <h2 class="mb-5">Find the best place to go!</h2>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <!-- FORM I/O -->
            
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <select name="kategori" id="kategori" class="form-control form-control-lg">
                    <option value="Breakfast">Breakfast</option>
                    <option value="Restaurant">Restaurant</option>
                    <option value="Fast Food">Fast Food</option>
                    <option value="Mall">Mall</option>
                    <option value="Fun">Fun</option>
                    <!-- <option value="Yogyakarta">Yogyakarta</option> -->
                  </select>
                  <br>
                  <select name="kota" id="kota" class="form-control form-control-lg">
                    <option value="Surabaya">Surabaya</option>
                    <option value="Jakarta">Jakarta</option>
                    <option value="Bali">Bali</option>
                    <!-- <option value="Yogyakarta">Yogyakarta</option> -->
                  </select>
                </div>
                <div class="col-12 col-md-3">
                  <input type="submit" class="btn btn-block btn-lg btn-primary" value="Search!" alt="submit">
                </div>
              </div>
            
            <!-- FORM INPUT -->
          </div>
        </div>
      </div>
    </header>
    </Form>
    <!-- Footer -->
    <footer class="footer bg-light">
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

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
	</div>
</body>
</html>