<?php  
	session_start();
	$con = mysqli_connect("localhost", "root", "", "citytour2");
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$_SESSION['user'] = $user;
	if (isset($_POST['signup'])) {
		$count = mysqli_num_rows(mysqli_query($con, "SELECT USERNAME FROM ACCOUNT WHERE USERNAME='$user'"));
		if ($count == 1) {
			echo "<script>alert('username sudah digunakan!')
			window.location.href='index.html';
			</script>";
		} else {
			mysqli_query($con, "INSERT INTO ACCOUNT VALUES (NULL, '$user', '$pass')");
			echo "<script>
			window.location.href='index.html';
			alert('Berhasil Mendaftar');
			</script>";
		}
	} else if (isset($_POST['signin'])) {
		$count = mysqli_num_rows(mysqli_query($con, "SELECT USERNAME FROM ACCOUNT WHERE USERNAME='$user' AND PASSWORD='$pass'"));
		if ($count == 1) {
			echo "<script>
			window.location.href='main.php';
			alert('Login sukses');
			</script>";
		} else {
			echo "<script>
			window.location.href='login.php';
			alert('Username atau Password salah');
			</script>";
		}
	}
?>