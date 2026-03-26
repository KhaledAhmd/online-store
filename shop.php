<?php
include("config/db.php");
include("includes/header.php");
include("includes/navbar.php");
?>

<div class="container pt-5">


<h2 class="text-center my-4">Our Products 🔥</h2>

<input type="text" id="search" class="form-control mb-4" placeholder="Search...">

<div class="row" id="products">

<?php
$result = mysqli_query($conn, "SELECT * FROM products");

while($row = mysqli_fetch_assoc($result)) {
?>

<div class="col-md-4 mb-3 product-item">
  <div class="card p-3 bg-dark text-white">

    <img src="uploads/<?php echo $row['image']; ?>" style="height:500px;object-fit:cover;">

    <h5 class="mt-5"><?php echo $row['name']; ?></h5>

    <p><?php echo $row['price']; ?> EGP</p>

    <a href="product.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">
  View Details
</a>

    <a href="actions/add_to_cart.php?id=<?php echo $row['id']; ?>" 
       class="btn btn-danger mt-3">
       Add to Cart
    </a>
    

  </div>
</div>

<?php } ?>

</div>
</div>

<script>
document.getElementById("search").addEventListener("keyup", function() {
  let value = this.value.toLowerCase();
  let items = document.querySelectorAll(".product-item");

  items.forEach(item => {
    item.style.display = item.innerText.toLowerCase().includes(value)
      ? "block"
      : "none";
  });
});
</script>

<?php include("includes/footer.php"); ?>