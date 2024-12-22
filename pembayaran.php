
<?php

require 'functions.php';

$siswa = query("SELECT * FROM pembayaran");

if( isset($_POST["cari"]) ) {

	$siswa = cari($_POST["keyword"]);

}


?>




<html>

<head>

	<title>pembayaran</title>

	<link rel="stylesheet" href="css/style2.css">

</head>

</head>
<body>   

	 
          <br><br>
		<caption class="title">Pembayaran keuangan siswa</caption><br><br>
        
		 <form action="" method="post">
                    <input type="text" name="keyword" size="30" autofocus placeholder="enter data..." autocomplete="off" id="keyword">
                    <button class="buttonsubs" name="cari" id="tombol-cari">cari</button> 
         </form>

         <a href="tambah_pembayaran.php" class="tambah">+ Tambah </a>
              <br><br>
	  
	<select  name="kelas">
      <option value="rpl">Rpl</option>
      
</select><br><br>
              <div id="container">


	<table class="data-table">
         
		<thead>
			

			<tr>
				<th>NO</th>
				<th>Nis</th>
				<th>Nama Siswa</th>
				<th>Kelas</th>
				<th>Jenis Biaya</th>
				<th>Total Beban</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
            <?php $i = 1; ?>
			<?php foreach($siswa as $row) : ?>
		
		</thead>

		<tbody>

			<tr>
				
                   <td><?= $i;  ?></td>

                   <td><?= $row['nis']; ?></td>

                   <td><?= $row['nama_siswa']; ?></td>

                   <td><?= $row['kelas']; ?></td>

                   <td><?= $row['jenis_biaya']; ?></td>

                   <td><?= $row['total_beban']; ?></td>

                   <td><?= $row['status']; ?></td>

                   <td>

                   	<a href="hapus_pembayaran.php?id=<?= $row['id']; ?>" onclick="return confirm('yakin');"><img src="img/delete.png"></a> |
					 <a href="ubah_pembayaran.php?id=<?= $row['id']; ?>"><img src="img/ubah.png"></a>

                   </td>
                   
                  </tr>
               <?php $i++; ?>

              <?php endforeach; ?>
		</tbody>
	</table>
	
	    </div>

		<script src="js/script.js"></script>
</body>
</html>