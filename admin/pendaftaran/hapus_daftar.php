<?php
    include_once "../../src/koneksi.php";

    if(isset($_GET['id_daftar'])){
        $id_daftar = $_GET['id_daftar'];
        $sql = mysqli_query($koneksi, "DELETE FROM pendaftaran WHERE id_daftar='$id_daftar'");
        if($sql){
            header("location:daftar.php");
        }
       
    } else{
        echo "<b>Data yang dihapus tidak ada</b>";
    }
