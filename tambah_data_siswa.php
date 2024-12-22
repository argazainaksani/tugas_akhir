<?php



require 'functions.php';

if( isset($_POST["submit"]) ) {

if( tambah_data_siswa($_POST) > 0 ) {
  
   echo "<script>
           
           alert('data berhasil ditambahkan !!');

           document.location.href = 'index.php?halaman=data_siswa';

         </script>";

}else{

  echo
   
   "<script>
           
           alert('data gagal ditambahkan !!');

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
  <h2>Tambah Data</h2>
  </center>
  <form action="" method="post">
    <label for="nama">Nama</label>
    <input type="text" id="nama" name="nama">

    <label for="alamat">Alamat</label>
    <input type="text" id="alamat" name="alamat">

    <label for="no_telepon">No_telepon</label>
    <input type="text" id="no_telepon" name="no_telepon">
     
    <input type="submit"  name="submit" value="Tambah Data">
  </form>
</div>

</body>
</html>