<?php
$koneksi = new mysqli('localhost', 'root', '', 'cofee_shop') or die(mysqli_error($koneksi));

if (isset($_POST['simpan'])) {
    $id_Pelanggan = $_POST['id_Pelanggan'];
    $NmPesanan = $_POST['NmPesanan'];
    $Jp = $_POST['Jp'];
    $Harga = $_POST['Harga'];
    $koneksi->query("INSERT INTO kopi (id_Pelanggan, NmPesanan, Jp, Harga) values ('$id_Pelanggan','$NmPesanan','$Jp','$Harga')");

    header('location:coffe.php');
}
if (isset($_GET['id_Pelanggan'])) {
    $id_Pelanggan = $_GET['id_Pelanggan'];
    $koneksi->query("DELETE FROM kopi where id_Pelanggan = '$id_Pelanggan'");
    header("location:coffe.php");
}

if (isset($_POST['edit'])) {
    $id_Pelanggan = $_POST['id_Pelanggan'];
    $nmPesanan = $_POST['nmPesanan'];
    $Jp = $_POST['Jp'];
    $Harga = $_POST['Harga'];

    $koneksi->query("UPDATE kopi SET id_Pelanggan='$id_Pelanggan',nmPesanan='$nmPesanan',Jp='$Jp',Harga='$Harga'WHERE id_Pelanggan=$id_Pelanggan");
    header("location:coffe.php");
}