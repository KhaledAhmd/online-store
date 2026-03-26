
<?php include("config/db.php");?>
<?php include("includes/header.php"); ?>
<?php include("includes/navbar.php"); ?>

<section class="hero">
  <div class="hero-content">
    <h1>Elevate Your Style</h1>
    <p>Modern fashion for everyone</p>
    <a href="shop.php" class="btn btn-main mt-3">Shop Now</a>
  </div>
</section>


<section class="container my-5">
  <h2 class="section-title">Featured Products 🔥</h2>

<div class="row" id="products">

<?php
$result = mysqli_query($conn, "SELECT * FROM products");

while($row = mysqli_fetch_assoc($result)) {
?>

<div class="col-md-4  mb-3 product-item">
  <div class="card p-3 bg-dark text-white">

    <img src="uploads/<?php echo $row['image']; ?>" style="height:500px;object-fit:cover;">

    <h5 class="mt-5"><?php echo $row['name']; ?></h5>

    <p><?php echo $row['price']; ?> EGP</p>


  </div>
</div>

<?php } ?>

</div>
</section>
<?php include("includes/footer.php"); ?>