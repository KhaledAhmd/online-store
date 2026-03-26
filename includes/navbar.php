
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand">VIBE STORE</a>

    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="shop.php">Shop</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php">
            <i class="bi bi-cart"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<script>
window.addEventListener("scroll", function(){
  let nav = document.querySelector(".navbar");
  nav.style.background = window.scrollY > 50 ? "#000" : "transparent";
});
</script>