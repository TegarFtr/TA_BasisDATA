<?php
include_once "../../src/koneksi.php";

if (isset($_POST['btnSimpan'])) {
    $id_pas = $_POST['id_pas'];
    $id_daftar = $_POST['id_daftar'];
    $id_cm = $_POST['id_cm'];
    $nama_pas = $_POST['nama_pas'];
    $nik = $_POST['nik'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $telp_pas = $_POST['telp_pas'];
    $ttl_pas = $_POST['ttl_pas'];

    $sqlEdit = mysqli_query($koneksi, "UPDATE pasien SET nama_pas='$nama_pas', nik='$nik', jenis_kelamin='$jenis_kelamin', telp_pas='$telp_pas', ttl_pas='$ttl_pas' 
                WHERE id_pas='$id_pas'");

    if ($sqlEdit) {
        header("location:pasien.php");
    } else {
        header("location:edit_pasien.php");
    }
    exit;
}

$id_pas = $_GET['id_pas'];
$sql = mysqli_query($koneksi, "SELECT * FROM pasien WHERE id_pas = '$id_pas'");
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
            <td>ID Pasien</td>
            <td>:</td>
            <td><input type="text" name="id_pas" value="<?php echo $data['id_pas']; ?>" readonly="true" /></td>
        </tr>
        <tr>
            <td>ID Daftar</td>
            <td>:</td>
            <td><input type="text" name="id_daftar" value="<?php echo $data['id_daftar']; ?>" readonly="true" /></td>
        </tr>
        <tr>
            <td>ID CM</td>
            <td>:</td>
            <td><input type="text" name="id_cm" value="<?php echo $data['id_cm']; ?>" readonly="true" /></td>
        </tr>

        <tr>
            <td>Nama Pasien</td>
            <td>:</td>
            <td><input type="text" name="nama_pas" value="<?php echo $data['nama_pas']; ?>" /></td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>:</td>
            <td><input type="text" name="nik" value="<?php echo $data['nik']; ?>" /></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="text" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin']; ?>" /></td>
        </tr>

        <tr>
            <td>No Telpon</td>
            <td>:</td>
            <td><input type="text" name="telp_pas" value="<?php echo $data['telp_pas']; ?>" /></td>
        </tr>

        <tr>
            <td>TTL Pasien</td>
            <td>:</td>
            <td><input type="text" name="ttl_pas" value="<?php echo $data['ttl_pas']; ?>" /></td>
        </tr>

        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" name="btnSimpan" value="SIMPAN"></td>
        </tr>

    </table>
</form>