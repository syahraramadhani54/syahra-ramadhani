<?php
include 'db.php';

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM aspirasi WHERE id_aspirasi='$id'");

header("Location: aspirasi.php");
?>