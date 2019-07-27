<?php

    include("config/koneksi.php");

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kerja = $_POST['kerja'];
    $gaji = $_POST['gaji'];

    $sql= mysqli_query($con,"UPDATE name SET name='$nama', id_work='$kerja', id_salary='$gaji' WHERE id='$id'");

    if ($sql) {
        echo "<script>alert('Berhasil Mengubah Data Ke Database');document.location.href='index.php'</script>";
    }else {
        echo "<script>alert('Gagal Mengubah Data Ke Database');document.location.href='index.php'</script>";
    }
?>
