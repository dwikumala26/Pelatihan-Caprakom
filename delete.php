<?php
// include database connection file
//include_once("config.php");
include 'koneksi.php';

// Get id from URL to delete that user
$id = $_GET['nip'];

// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM pegawai WHERE nip='$id'");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>