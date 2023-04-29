<?php
include_once "../../src/koneksi.php";

if (isset($_POST['btnSimpan'])) {
    $id_cm = $_POST['id_cm'];
    $id_pas = $_POST['id_pas'];
    $id_dok = $_POST['id_dok'];
    $id_pen = $_POST['id_pen'];
    $riw_pen = $_POST['riw_pen'];
    $diagnosa = $_POST['diagnosa'];

    $sqlEdit = mysqli_query($koneksi, "UPDATE cmedik SET id_pas='$id_pas', id_dok='$id_dok', id_pen='$id_pen', riw_pen='$riw_pen', diagnosa='$diagnosa'
                WHERE id_cm='$id_cm'");

    if ($sqlEdit) {
        header("location:cmedik.php");
    } else {
        header("location:edit_cmedik.php");
    }
    exit;
}

$id_cm = $_GET['id_cm'];
$sql = mysqli_query($koneksi, "SELECT * FROM cmedik WHERE id_cm = '$id_cm'");
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
            <td>ID CM</td>
            <td>:</td>
            <td><input type="text" name="id_cm" value="<?php echo $data['id_cm']; ?>" readonly="true" /></td>
        </tr>
        <tr>
            <td>ID Pasien</td>
            <td>:</td>
            <td><input type="text" name="id_pas" value="<?php echo $data['id_pas']; ?>" readonly="true" /></td>
        </tr>
        <tr>
            <td>ID Dokter</td>
            <td>:</td>
            <td><input type="text" name="id_dok" value="<?php echo $data['id_dok']; ?>" readonly="true" /></td>
        </tr>
        <tr>
            <td>ID Penyakit</td>
            <td>:</td>
            <td><input type="text" name="id_pen" value="<?php echo $data['id_pen']; ?>" readonly="true" /></td>
        </tr>
        <tr>
            <td>Riwayat Penyakit</td>
            <td>:</td>
            <td><input type="text" name="riw_pen" value="<?php echo $data['riw_pen']; ?>" /></td>
        </tr>
        <tr>
            <td>Diagnosa</td>
            <td>:</td>
            <td><input type="text" name="diagnosa" value="<?php echo $data['diagnosa']; ?>" /></td>
        </tr>

        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" name="btnSimpan" value="SIMPAN"></td>
        </tr>

    </table>
</form>