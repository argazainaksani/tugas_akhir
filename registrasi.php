<?php  

require 'functions.php';

if(isset($_POST["register"])){

if( registrasi($_POST) > 0 ){

echo "<script>

       alert('user baru berhasil ditambahkan!!');

     </script>";

}else{

	echo mysqli_error($conn);
}
}


 ?>






<html>

<head>

	<title>halaman registrasi</title>

	<style>

		label{

			display: block;
		}

	</style>

</head>

<body>

	<h2>Halaman registrasi</h2>

	<form action="" method="post">

		<ul>

			<li>

				<label for="username">Username : </label>

				<input type="text" name="username" id="username">

			</li>

			<li>

				<label for="password">Password : </label>

				<input type="password" name="password" id="password">

			</li>

			<li>

			<label for="password2">Konfirmasi password : </label>

				<input type="password" name="password2" id="password2">
             
             </li>

             <li>

             	<button type="submit" name="register">Registrasi : </button>

             </li>

         </ul>

     </form>

 </body>

 </html>


