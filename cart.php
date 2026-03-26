<?php
session_start();
include("config/db.php");
include("includes/header.php");
include("includes/navbar.php");
?>

<div class="container mt-5">

<h2>Your Cart 🛒</h2>

<?php if(empty($_SESSION['cart'])) { ?>
  <div class="alert alert-warning">Cart is empty 😢</div>
<?php } ?>

<?php
$total = 0;

foreach($_SESSION['cart'] ?? [] as $index => $item){

$res = mysqli_query($conn, "SELECT * FROM products WHERE id=".$item['id']);
$p = mysqli_fetch_assoc($res);

$subtotal = $p['price'] * $item['qty'];
$total += $subtotal;
?>

<div class="card p-3 mb-3 bg-dark text-white">
  <h5><?php echo $p['name']; ?></h5>
  <p>Size: <?php echo $item['size']; ?></p>
  <p>Qty: <?php echo $item['qty']; ?></p>
  <p>Subtotal: <?php echo $subtotal; ?> EGP</p>

  <a href="actions/remove_from_cart.php?index=<?php echo $index; ?>" class="btn btn-danger">
    Remove
  </a>
</div>

<?php } ?>

<h3>Total: <?php echo $total; ?> EGP</h3>

<a href="checkout.php" class="btn btn-success mt-3">Checkout</a>

</div>

<?php include("includes/footer.php"); ?>