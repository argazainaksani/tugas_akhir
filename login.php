<?php



require 'functions.php';

if( isset($_POST["login"])) {

	$username = $_POST["username"];

	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	// cek username

	if(mysqli_num_rows($result) === 1 ) {

    // cek password

	$row = mysqli_fetch_assoc($result);

	if(password_verify($password, $row["password"]) ) {

		// set session

		$_SESSION["login"] = true;

		header("Location: index.php");
	}

       $error = true;

	}
}

?>


<html>

<head>

	<meta charset="utf-8">

	<title>login spp</title>

	<link rel="stylesheet" type="text/css" href="css/style4.css">

	<meta name="viewport" content="width=width-device">

</head>
<body background = "img/os.jpg">



	<section id="showcase">
            <div class="container"><br><br><br><br>
		
	   <div class="gambar"><img src= "img/arvo.png" width="100" height="123"><br><font color= "yellow"><h3>
		APLIKASI<br><br>PEMBAYARAN SEKOLAH<br><br>SMK NEGERI 9 SEMARANG</h3></font></div>

	</div>

 

		<section id="newsletter">
            <div class="container">
            	<form action="" method="post">
                    <input type="text" name="username"><br>
               
                
                    <input type="password" name="password"><br>

                    <button class="buttonsubs" name="login"><font color="white">Login</font></button>
                    
                </form>
            </div>

            <footer>
    <p><font color="yellow"><h3>copyright &copy;Argazae</h3></font></p>

</footer>
</section>
</section>
    </body>
</html>

