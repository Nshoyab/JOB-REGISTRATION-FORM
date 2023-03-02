<?php

include 'a1connection.php';

$ids=$_GET['id'];
$delete="DELETE FROM `R_form` WHERE id={$ids}";
$deletequery=mysqli_query($conn,$delete);
header('location:a3display.php');

?>