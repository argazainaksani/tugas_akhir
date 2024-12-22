
<?php


require 'functions.php';

$id = $_GET["id"];

$mhs = query("SELECT * FROM laporan WHERE id = $id")[0];

if( isset($_POST["submit"]) ) {


if( ubah_laporan($_POST) > 0 ) {
  
   echo "<script>
           
           alert('data berhasil diubah !!');

           document.location.href= 'index.php?halaman=laporan';

         </script>";

}else{

  echo 
   
   "<script>
           
           alert('data gagal diubah !!');

           document.location.href= 'index.php?halaman=laporan';

         </script>";

}

}

?>





<html>
<body>
 <link rel="stylesheet" href="css/style3.css">
 
<div>
  <center>
     <h2>Ubah Data</h2>
  </center>
  <form action="" method="post">
    <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
    <label for="nama_pembayaran">Nama Pembayaran</label>
    <input type="text" id="nama_pembayaran" name="nama_pembayaran" value="<?= $mhs['nama_pembayaran']; ?>">
    <label for="nominal">Nominal</label>
    <input type="text" id="nominal" name="nominal" value="<?= $mhs['nominal']; ?>">

    <label for="cicilan">Jumlah Cicilan</label>
    <input type="text" id="cicilan" name="cicilan" value="<?= $mhs['cicilan']; ?>">
     
    <label for="aktif">Keterangan</label>
    <select id="status" name="aktif" value="<?= $mhs['aktif']; ?>">
      <option value="aktif">Aktif </option>
      <option value="tidak aktif">Tidak Aktif</option>
    
    <input type="submit" name="submit" value="Ubah Data">
  </form>
</div>

</body>
</html>