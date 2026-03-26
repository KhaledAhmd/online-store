<?php include("includes/header.php"); ?>
<?php include("includes/navbar.php"); ?>

<div class="container mt-5">
  <h2>Checkout</h2>

  <form action="actions/place_order.php" method="POST">
    <input class="form-control mb-2" name="name" placeholder="Your Name" required>
    <input class="form-control mb-2" name="phone" placeholder="Phone" required>
    <input class="form-control mb-2" name="address" placeholder="Address" required>

    <button class="btn btn-success">Place Order</button>
  </form>
</div>

<?php include("includes/footer.php"); ?>