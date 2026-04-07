<?php include("./includes/header.php"); ?>
<?php include("./includes/navbar.php"); ?>

<style>
.contact-section {
  padding: 80px 0;
}

.contact-box {
  background: #1a1a1a;
  padding: 30px;
  border-radius: 15px;
  transition: 0.4s;
  box-shadow: 0 5px 15px rgba(0,0,0,0.3);
}

.contact-box:hover {
  transform: translateY(-10px);
}

.btn-main {
  background: linear-gradient(45deg, #ff416c, #ff4b2b);
  border: none;
  color: #fff;
  transition: 0.3s;
}

.btn-main:hover {
  transform: scale(1.05);
}

.contact-box h4, .contact-box h5, .contact-box p {
  color: #fff;
}
</style>

<div class="container contact-section">

  <h1 class="text-center mb-5">Contact Us 📩</h1>

  <div class="row">

    <!-- Contact Form -->
    <div class="col-md-6">
      <div class="contact-box">

        <form method="POST" action="actions/send_message.php">

          <input type="text" name="name" class="form-control mb-3" placeholder="Your Name" required>

          <input type="email" name="email" class="form-control mb-3" placeholder="Your Email" required>

          <textarea name="message" class="form-control mb-3" rows="5" placeholder="Your Message" required></textarea>

          <button type="submit" class="btn btn-main w-100">Send Message</button>

        </form>

      </div>
    </div>

    <!-- Contact Info -->
    <div class="col-md-6">
      <div class="contact-box">

        <h4>Get in Touch</h4>

        <p>📍 Menofia, Egypt</p>
        <p>📞 01000000000</p>
        <p>📧 vibestore@email.com</p>

        <hr style="border-color: #444;">

        <h5>Follow Us</h5>
        <p>Instagram | Facebook | TikTok</p>

      </div>
    </div>

  </div>

</div>

<?php include("./includes/footer.php"); ?>