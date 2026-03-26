<?php include("includes/header.php"); ?>
<?php include("includes/navbar.php"); ?>

<style>
.contact-section {
  padding: 80px 0;
}

.contact-box {
  background: #1a1a1a;
  padding: 30px;
  border-radius: 15px;
  transition: 0.4s;
}

.contact-box:hover {
  transform: translateY(-10px);
}

.btn-main {
  background: linear-gradient(45deg, #ff416c, #ff4b2b);
  border: none;
  color: #fff;
}
</style>

<div class="container contact-section">

  <h1 class="text-center mb-5">Contact Us 📩</h1>

  <div class="row">


    <div class="col-md-6">
      <div class="contact-box">

        <form>

          <input type="text" class="form-control mb-3" placeholder="Your Name" required>

          <input type="email" class="form-control mb-3" placeholder="Your Email" required>

          <textarea class="form-control mb-3" rows="5" placeholder="Your Message" required></textarea>

          <button class="btn btn-main w-100">Send Message</button>

        </form>

      </div>
    </div>


    <div class="col-md-6">
      <div class="contact-box">

        <h4>Get in Touch</h4>

        <p>📍 Cairo, Egypt</p>
        <p>📞 01000000000</p>
        <p>📧 vibestore@email.com</p>

        <hr>

        <h5>Follow Us</h5>
        <p>Instagram | Facebook | TikTok</p>

      </div>
    </div>

  </div>

</div>

<?php include("includes/footer.php"); ?>