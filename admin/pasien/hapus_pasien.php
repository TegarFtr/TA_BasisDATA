<?php
    include_once "../../src/koneksi.php";

    if(isset($_GET['id_pas'])){
        $id_pas = $_GET['id_pas'];
        $sql = mysqli_query($koneksi, "DELETE FROM pasien WHERE id_pas='$id_pas'");
        if($sql){
            header("location:pasien.php");
        }
       
    } else{
        echo "<b>Data yang dihapus tidak ada</b>";
    }
?>