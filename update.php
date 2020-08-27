<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

// update data ke database
mysqli_query($conn,"update pegawai set nama='$nama', alamat='$alamat' where nip='$nip'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>