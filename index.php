
<html>
<head>
	<title>Halaman Administrator</title>
	<link rel="stylesheet" href="style.css">
</head>
	<body>
		<form action="" method="post">
        <header class="header">
	       <div class="menu">
 
		<ul>
			<li class="img"><img src="img/ci2.png" width="20px" height="20">SPP</li>
			<li class="home"><a href="index.php?halaman=home">Home</a></li>
			<li><a href="index.php?halaman=pembayaran">Pembayaran</a></li>
			<li class="dropdown"><a href="index.php?halaman=laporan">Laporan</a>
				<ul class="isi-dropdown">
					<li><a href="index.php?halaman=laporan2">Laporan Keuangan Siswa</a></li>
					
				</ul>
				<span class="arrow">&#x25BC;</span>
			</li>
			<li class="dropdown"><a href="index.php?halaman=data_master">Data Master</a>
				<ul class="isi-dropdown">
					<li><a href="index.php?halaman=data_siswa">Data Siswa</a></li>
					
				</ul>
				<span class="arrow">&#x25BC;</span>
			</li>
			</ul>
                  
                 
			
             

			
	</div>
    </header>
	<div class="container2">

    <div class="select-box">

        <div class="options-container">



             <div class="option">
                <input
                type="radio"
                class="radio"
                id="user"
                name="user"
                />
                <label for="user"><a href="" style='text-decoration:none'><font color="white"> Petugas</a></font></label>


            </div>

            <div class="option">
                <input
                type="radio"
                class="radio"
                id="admin"
                name="admin"
                />
                <label for="admin">Siswa</label>

            </div>

            <div class="option">
                <input type="radio" class="radio" id="science" name="developer">
                <label for="developer">Administrator</label>
            </div>
              
            </div>
            <div class="selected">
             Adminsitrator
              </div>

 
 
        </div>
    </div>
 <a href="logout.php">Logout</a>
<script src="js/main.js"></script>
</form>
</body>
</html>

<?php 





if( isset($_GET["halaman"]) ) {

    if( $_GET["halaman"]=='pembayaran' ) {

        include 'pembayaran.php';

    }elseif( $_GET["halaman"]=='laporan' ) {

        include 'laporan.php';

}elseif( $_GET["halaman"]=='laporan2' ) {

    include 'laporan_keuangan_siswa.php';

}elseif( $_GET["halaman"]=='data_siswa' ) {

    include 'data_siswa.php';

}elseif( $_GET["halaman"]=='data_master' ) {

    include 'data_master.php';

}elseif( $_GET["halaman"]=='home' ) {

    include 'home.php';
}

}else{

    include 'home.php';
}

?>