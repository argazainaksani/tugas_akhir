<?php


require 'functions.php';

$id = $_GET["id"];

$mhs = query("SELECT * FROM data_siswa WHERE id = $id")[0];

if( isset($_POST["submit"]) ) {

if( ubah_data_siswa($_POST) > 0 ) {
  
   echo "<script>
           
           alert('data berhasil diubah !!');

           document.location.href = 'index.php?halaman=data_siswa';

         </script>";

}else{

  echo
   
   "<script>
           
           alert('data gagal diubah !!');

           document.location.href = 'index.php?halaman=data_siswa';

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
    <label for="nama">Nama</label>
    <input type="text" id="nama" name="nama" value="<?= $mhs['nama']; ?>">

    <label for="alamat">Alamat</label>
    <input type="text" id="alamat" name="alamat" value="<?= $mhs['alamat']; ?>">

    <label for="no_telepon">No_telepon</label>
    <input type="text" id="no_telepon" name="no_telepon" value="<?= $mhs['no_telepon']; ?>">
     
    <input type="submit"  name="submit" value="Ubah Data">
  </form>
</div>

</body>
</html>