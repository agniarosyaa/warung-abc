<?php
include 'cek_session.php';
include 'config/koneksi.php';

$id = $_POST['id_pelanggan'];
$nama = mysqli_real_escape_string($koneksi, $_POST['nama_pelanggan']);
$hp = mysqli_real_escape_string($koneksi, $_POST['no_hp']);
$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);

$sql = "UPDATE tbl_pelanggan SET nama_pelanggan='$nama', no_hp='$hp', ";
$sql .= "alamat='$alamat' WHERE id_pelanggan = '$id'";

if (mysqli_query($koneksi, $sql)) {
    $id_user = $_SESSION['id_user'];

}