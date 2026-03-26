<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>VIBE STORE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #0f0f0f;
      color: #fff;
      overflow-x: hidden;
    }


    .navbar {
      background: rgba(0,0,0,0.6);
      backdrop-filter: blur(10px);
      transition: 0.3s;
    }

    .navbar-brand {
      font-weight: 600;
      letter-spacing: 2px;
    }

    .nav-link {
      color: #fff !important;
      margin-left: 15px;
      position: relative;
    }

    .nav-link::after {
      content: "";
      width: 0%;
      height: 2px;
      background: #ff4b2b;
      position: absolute;
      bottom: 0;
      left: 0;
      transition: 0.3s;
    }

    .nav-link:hover::after {
      width: 100%;
    }


    .hero {
      height: 100vh;
      background: url('assets/images/banners/banner.jpg') center/cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      position: relative;
    }

    .hero::before {
      content: "";
      position: absolute;
      width: 100%;
      height: 100%;
      background: linear-gradient(to top, #000, transparent);
    }

    .hero-content {
      position: relative;
      z-index: 2;
      animation: fadeUp 1.5s ease;
    }

    .hero h1 {
      font-size: 4rem;
      font-weight: 600;
    }

    .btn-main {
      background: linear-gradient(45deg, #ff416c, #ff4b2b);
      border: none;
      padding: 12px 30px;
      color: #fff;
      transition: 0.3s;
    }

    .btn-main:hover {
      transform: scale(1.1);
    }


    .card {
      background: #1a1a1a;
      border: none;
      overflow: hidden;
      transition: 0.4s;
      border-radius: 15px;
    }

    .card img {
      transition: 0.4s;
    }

    .card:hover img {
      transform: scale(1.1);
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 40px rgba(255,75,43,0.3);
    }


    .section-title {
      text-align: center;
      margin-bottom: 50px;
      font-weight: 600;
    }


    @keyframes fadeUp {
      from {opacity:0; transform:translateY(50px);}
      to {opacity:1; transform:translateY(0);}
    }
  </style>
</head>
<script>
window.onload = () => {
  document.getElementById("loader").style.display = "none";
}
</script>

<body>


