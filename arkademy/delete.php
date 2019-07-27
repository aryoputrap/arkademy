<?php

    include("config/koneksi.php");
    $query = $db->query("DELETE FROM name WHERE id='$_GET[id]'");
    header('location:index.php');
