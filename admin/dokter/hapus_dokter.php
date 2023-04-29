<?php
    include_once "../../src/koneksi.php";

    if(isset($_GET['id_dok'])){
        $id_dok = $_GET['id_dok'];
        $sql = mysqli_query($koneksi, "DELETE FROM dokter WHERE id_dok='$id_dok'");
        if($sql){
            header("location:dokter.php");
        }
       
    } else{
        echo "<b>Data yang dihapus tidak ada</b>";
    }
?>