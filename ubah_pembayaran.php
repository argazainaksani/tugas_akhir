<?php



require 'functions.php';

$id = $_GET["id"];

$mhs = query("SELECT * FROM pembayaran WHERE id = $id")[0];

if( isset($_POST["submit"]) ) {

if( ubah_pembayaran($_POST) > 0 ) {
  
   echo "<script>
           
           alert('data berhasil diubah !!');

           document.location.href = 'index.php?halaman=pembayaran';

         </script>";

}else{

  echo
   
   "<script>
           
           alert('data gagal diubah !!');

           document.location.href = 'index.php?halaman=pembayaran';

         </script>";

}

}

?>


<!DOCTYPE html>
<html>
<body>
 <link rel="stylesheet" href="css/style3.css">

<div>
  <center>
  <h2>Ubah Data</h2>
  </center>
  <form action="" method="post">
    <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
    <label for="nis">Nis</label>
    <input type="text" id="nis" name="nis" value="<?= $mhs['nis']; ?>">

    <label for="nama_siswa">Nama Siswa</label>
    <input type="text" id="nama_siswa" name="nama_siswa" value="<?= $mhs['nama_siswa']; ?>">

    <label for="kelas">Kelas</label>
    <input type="text" id="kelas" name="kelas" value="<?= $mhs['kelas']; ?>">

    <label for="jenis_biaya">Jenis Biaya</label>
    <input type="text" id="jenis_biaya" name="jenis_biaya" value="<?= $mhs['jenis_biaya']; ?>">

    <label for="total_beban">Total Beban</label>
    <input type="text" id="total_beban" name="total_beban" value="<?= $mhs['total_beban']; ?>">

    <label for="status">Status</label>
    <select id="status" name="status" value="<?= $mhs['status']; ?>">
      <option value="sudah lunas">sudah lunas</option>
      <option value="belum lunas">belum lunas</option>
      
     
    <input type="submit"  name="submit" value="Ubah Data">
  </form>
</div>

</body>
</html>