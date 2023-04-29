<?php
include_once "../../src/koneksi.php";

if (isset($_POST['btnSimpan'])) {
    $id_dok = $_POST['id_dok'];
    $nama_dok = $_POST['nama_dok'];
    $ttl_dok = $_POST['ttl_dok'];
    $telp_dok = $_POST['telp_dok'];
    $bidang_dok = $_POST['bidang_dok'];

    $sqlEdit = mysqli_query($koneksi, "UPDATE dokter SET telp_dok$telp_dok='$telp_dok', bidang_dok='$bidang_dok', jenis_kelamin='$jenis_kelamin', telp_pas='$telp_pas', ttl_pas='$ttl_pas' 
                WHERE id_dok='$id_dok'");

    if ($sqlEdit) {
        header("location:dokter.php");
    } else {
        header("location:edit_dokter.php");
    }
    exit;
}

$id_dok = $_GET['id_dok'];
$sql = mysqli_query($koneksi, "SELECT * FROM dokter WHERE id_dok = '$id_dok'");
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
            <td>ID Dokter</td>
            <td>:</td>
            <td><input type="text" name="id_dok" value="<?php echo $data['id_dok']; ?>" readonly="true" /></td>
        </tr>
        <tr>
            <td>Nama Dokter</td>
            <td>:</td>
            <td><input type="text" name="nama_dok" value="<?php echo $data['nama_dok']; ?>" readonly="true" /></td>
        </tr>
        <tr>
            <td>TTL Dokter</td>
            <td>:</td>
            <td><input type="text" name="ttl_dok" value="<?php echo $data['ttl_dok']; ?>" readonly="true" /></td>
        </tr>

        <tr>
            <td>Telpon Dokter</td>
            <td>:</td>
            <td><input type="text" name="telp_dok$telp_dok" value="<?php echo $data['telp_dok']; ?>" /></td>
        </tr>
        <tr>
            <td>Bidang Dokter</td>
            <td>:</td>
            <td><input type="text" name="bidang_dok" value="<?php echo $data['bidang_dok']; ?>" /></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" name="btnSimpan" value="SIMPAN"></td>
        </tr>

    </table>
</form>