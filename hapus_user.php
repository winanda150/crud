<?php
session_start();
include 'koneksi.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    $_SESSION['error'] = 'ID user tidak valid.';
    header('Location: user.php');
    exit;
}

$id = intval($_GET['id']);
$delete = mysqli_query($conn, "DELETE FROM user WHERE id=$id");

if ($delete) {
    $_SESSION['success'] = 'User berhasil dihapus.';
} else {
    $_SESSION['error'] = 'Gagal menghapus user: ' . mysqli_error($conn);
}
header('Location: user.php');
exit;