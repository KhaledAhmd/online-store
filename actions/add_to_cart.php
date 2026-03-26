<?php
session_start();

$id = $_GET['id'];
$size = $_GET['size'] ?? "M";
$qty = $_GET['qty'] ?? 1;

$_SESSION['cart'][] = [
  "id" => $id,
  "size" => $size,
  "qty" => $qty
];

header("Location: ../cart.php?added=1");
?>