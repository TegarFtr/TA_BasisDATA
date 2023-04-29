<?php
include_once "../../src/koneksi.php";

if (isset($_POST['btnSimpan'])) {
    $id_daftar = $_POST['id_daftar'];
    $tgl_daftar = $_POST['tgl_daftar'];
    $keluhan = $_POST['keluhan'];
    
    $sqlEdit = mysqli_query($koneksi, "UPDATE pendaftaran SET tgl_daftar='$tgl_daftar', keluhan='$keluhan'
                WHERE id_daftar='$id_daftar'");

    if ($sqlEdit) {
        header("location:daftar.php");
    } else {
        header("location:edit_daftar.php");
    }
    exit;
}

$id_daftar = $_GET['id_daftar'];
$sql = mysqli_query($koneksi, "SELECT * FROM pendaftaran WHERE id_daftar = '$id_daftar'");
$data = mysqli_fetch_array($sql);

?>


<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <table>
        <tr>
            <td>UBAH DATA PELANGGAN</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>

        <tr>
            <td>ID Daftar</td>
            <td>:</td>
            <td><input type="text" name="id_daftar" value="<?php echo $data['id_daftar']; ?>" readonly="true" /></td>
        </tr>
        <tr>
            <td>Tanggal Daftar</td>
            <td>:</td>
            <td><input type="text" name="tgl_daftar" value="<?php echo $data['tgl_daftar']; ?>"  /></td>
        </tr>

        <tr>
            <td>Keluhan</td>
            <td>:</td>
            <td><input type="text" name="keluhan" value="<?php echo $data['keluhan']; ?>" /></td>
        </tr>
        
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" name="btnSimpan" value="SIMPAN"></td>
        </tr>

    </table>
</form>