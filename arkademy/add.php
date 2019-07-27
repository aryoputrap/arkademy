
<?php

    include("config/koneksi.php");

    $nama = $_POST['nama'];
    $kerja = $_POST['kerja'];
    $gaji = $_POST['gaji'];

    $tampil = mysqli_query($con,"INSERT INTO name(name,id_work,id_salary)
    VALUES('$nama','$kerja','$gaji')");

   if ($tampil) {
       echo "<script>alert('Berhasil Menambahkan Data Ke Database');document.location.href='index.php'</script>";
   }else {
       echo "<script>alert('Gagal Menambahkan Data Ke Database');document.location.href='index.php'</script>";
   }


?>
