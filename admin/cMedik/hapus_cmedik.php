<?php
include_once "../../src/koneksi.php";

if (isset($_GET['id_cm'])) {
    $id_cm = $_GET['id_cm'];
    $sql = mysqli_query($koneksi, "DELETE FROM cmedik WHERE id_cm='$id_cm'");
    if ($sql) {
        header("location:cmedik.php");
    }
} else {
    echo "<b>Data yang dihapus tidak ada</b>";
}
