<?php
include('../../config/database.php');
$datakategori = new Kategori();
$aksi = $_GET['aksi'];
if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $slug = preg_replace(
        '/[^a-z0-9]+/i',
        '-',
        trim(strtolower($_POST["nama"]))
    );
}
if ($aksi == "create") {
    $datakategori->create($nama, $slug);
    header("location:index.php");
} elseif ($aksi == "update") {
    $datakategori->update($id, $nama, $slug);
    header("location:index.php");
} elseif ($aksi == "delete") {
    $datakategori->delete($_GET['id']);
    header("location:index.php");
}