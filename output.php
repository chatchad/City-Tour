<?php
	session_start();
	if (isset($_SESSION['user']))
		$user = $_SESSION['user'];

  $kota = $_POST['kota'];
  $kategori = $_POST['kategori'];
  if (isset($_POST['showtable'])) {
    $con = mysqli_connect("localhost", "root", "", "citytour2");
    
    $result = mysqli_query($con, "SELECT t.nama_tempat, t.location, t.img_link FROM tempat t 
                                JOIN tempat_kategori tk ON tk.id_tempat = t.id
                                JOIN kota k ON t.id_kota = k.id
                                JOIN kategori k2 ON k2.id = tk.id_kategori
                                WHERE k.nama = '".$kota."' and k2.nama = '".$kategori."'");

    echo '<div class="container pt-5">
        <div class="row pt-4 pb-3">';
    while($row = mysqli_fetch_array($result)){
          echo "<div class='card' align='center' style='width: 17.342rem;'>
            <img class='card-img-top thumbnail portrait' src='".$row[2]."' alt='Card image cap'>
            <div class='card-body'>
               <h5 class='card-text'>".$row[0]."</h5>
               <p class='card-text'>".$row[1]."</p>
               <a href='http://maps.google.com/?q=".$row[0]." ".$row[1]."'><button type='submit' class='btn btn-dark'>See Map</button></a>
            </div>
          </div>";
    }
    echo '</div></div>';
    exit();
  } else {

  }
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $kategori." in ".$kota; ?></title>
  <script src="jquery-3.3.1.min.js"></script>
	<style type="text/css">
		.imgSize{
    		width: 300px; 
    		height: 240px;
		}
.thumbnail {
  position: relative;
  width: 200px;
  height: 200px;
  overflow: hidden;
}
.thumbnail img {
  position: absolute;
  left: 50%;
  top: 50%;
  height: 100%;
  width: auto;
  -webkit-transform: translate(-50%,-50%);
      -ms-transform: translate(-50%,-50%);
          transform: translate(-50%,-50%);
}
.thumbnail img.portrait {
  width: 100%;
  height: auto;
}

	</style>

	<!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">
</head>
<body class="bg-dark">
	<div class="container bg-dark">
		<nav class="navbar navbar-light bg-light static-top fixed-top">
        <div class="container">
          <?php
          if (isset($_SESSION['user']))
          	echo "<a class='navbar-brand text-dark'>Welcome, ".$user." </a>";
          else 
          	echo '<a class="navbar-brand text-dark" href="index.html">City Tour</a>';
          ?>
          	<form action="output.php" method="post">
      	<div class="container">
      <select name="kategori" id="kategori" class="form-control-lg">
        <option value="Breakfast" <?php if($kategori=="Breakfast") echo 'selected="selected"'; ?> >Breakfast</option>
        <option value="Restaurant" <?php if($kategori=="Restaurant") echo 'selected="selected"'; ?> >Restaurant</option>
        <option value="Fast Food" <?php if($kategori=="Fast Food") echo 'selected="selected"'; ?> >Fast Food</option>
        <option value="Mall" <?php if($kategori=="Mall") echo 'selected="selected"'; ?> >Mall</option>
        <option value="Fun" <?php if($kategori=="Fun") echo 'selected="selected"'; ?> >Fun</option>
      </select>
      <select name="kota" id="kota" class="form-control-lg">
        <option value="Surabaya" <?php if($kota=="Surabaya") echo 'selected="selected"'; ?> >Surabaya</option>
        <option value="Jakarta" <?php if($kota=="Jakarta") echo 'selected="selected"'; ?> >Jakarta</option>
        <option value="Bali" <?php if($kota=="Bali") echo 'selected="selected"'; ?> >Bali</option>
      </select>
      <input type="button" class="btn btn-dark" value="Search" onClick="showdata()">
      <a href="map.php" class="navbar-brand text-dark">Search on Maps</a>
  		</div>
      </form>
      	<?php
      		if (isset($_SESSION['user'])) {
          	echo '<ul class="nav navbar">
        	  	<li class="btn dropdown">
        	  	<a class="dropdown-toggle text-dark" data-toggle="dropdown">Account
        		<span class="caret"></span></a>
        		<ul class="dropdown-menu">
         	 		<li><a href="#">Change Password</a></li>
         	 		<li><a href="logout.php">Logout</a></li>
        		</ul>
          		</li>
      			</ul>';
      		}
      	?>
        </div>
      </nav>

      <!-- PRINT CARD -->    
      <div id="showdata"></div> 

</div> <!-- DIV CONTAINER -->
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

</body>
</html>

<script type="text/javascript">
  $(document).ready(function(){
    showdata();
  });
  function showdata()
{
  var k = $('#kota').val();
  var k2 = $('#kategori').val();
  $.ajax({
    url : "output.php",
    type  : "POST",
    async : false,
    data  : {
    showtable : 1,
    kota : k,
    kategori : k2
       }, 
    success : function(res)
    {
      $('#showdata').html(res);
    }
  
  });
} 
</script>