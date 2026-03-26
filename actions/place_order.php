<?php
session_start();

unset($_SESSION['cart']);

echo "Order placed successfully!";
?>