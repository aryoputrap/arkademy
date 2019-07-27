<?php

    include("config/koneksi.php");
    $sql = mysqli_query($con,"DELETE FROM name WHERE id='$_GET[id]'");
    header('location:index.php');
