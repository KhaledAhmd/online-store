<?php
include("config/db.php");
include("includes/header.php");
include("includes/navbar.php");

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM products WHERE id=$id");
$product = mysqli_fetch_assoc($result);
?>

<style>
.product-img {
  border-radius: 15px;
  transition: 0.4s;
}
.product-img:hover {
  transform: scale(1.05);
}

.box {
  background: #1a1a1a;
  padding: 30px;
  border-radius: 15px;
}

.price {
  color: #ff4b2b;
  font-size: 24px;
}

.btn-main {
  background: linear-gradient(45deg, #ff416c, #ff4b2b);
  border: none;
  color: #fff;
  transition: 0.3s;
}

.btn-main:hover {
  transform: scale(1.1);
}
</style>

<div class="container mt-5">

  <div class="row align-items-center">

    <div class="col-md-6 text-center">
      <img src="uploads/<?php echo $product['image']; ?>" class="img-fluid product-img">
    </div>

    <div class="col-md-6">
      <div class="box">

        <h2><?php echo $product['name']; ?></h2>

        <p class="text-muted">
          <?php echo $product['description']; ?>
        </p>

        <h4 class="price"><?php echo $product['price']; ?> EGP</h4>

        <label class="mt-3">Choose Size</label>
        <select id="size" class="form-control mb-3">
          <option>S</option>
          <option>M</option>
          <option>L</option>
          <option>XL</option>
        </select>

        <label>Quantity</label>
        <input type="number" id="qty" value="1" min="1" class="form-control mb-3">

        <button class="btn btn-main w-100" onclick="addToCart(<?php echo $product['id']; ?>)">
          Add to Cart 🛒
        </button>

      </div>
    </div>

  </div>

</div>

<script>
function addToCart(id){
  let size = document.getElementById("size").value;
  let qty = document.getElementById("qty").value;

  window.location.href = `actions/add_to_cart.php?id=${id}&size=${size}&qty=${qty}`;
}
</script>

<?php include("includes/footer.php"); ?>