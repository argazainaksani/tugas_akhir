<?php



require 'functions.php';

if( isset($_POST["submit"]) ) {

if( tambah_pembayaran($_POST) > 0 ) {
  
   echo "<script>
           
           alert('data berhasil ditambahkan !!');

           document.location.href = 'index.php?halaman=pembayaran';

         </script>";

}else{
   
   "<script>
           
           alert('data gagal ditambahkan !!');

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
  <h2>Tambah Data</h2>
  </center>
  <form action="" method="post">
    <label for="nis">Nis</label>
    <input type="text" id="nis" name="nis">

    <label for="nama_siswa">Nama Siswa</label>
    <input type="text" id="nama_siswa" name="nama_siswa">

    <label for="kelas">Kelas</label>
    <input type="text" id="kelas" name="kelas">

    <label for="jenis_biaya">Jenis Biaya</label>
    <input type="text" id="jenis_biaya" name="jenis_biaya">

    <label for="total_beban">Total Beban</label>
    <input type="text" id="total_beban" name="total_beban">

    <label for="status">Status</label>
    <select id="status" name="status">
      <option value="sudah lunas">sudah lunas</option>
      <option value="belum lunas">belum lunas</option>
      
     
    <input type="submit"  name="submit" value="Tambah Data">
  </form>
</div>

</body>
</html>