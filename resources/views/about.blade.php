<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Catering</title>
  <link href="http://127.0.0.1:8000/images/logo.png" rel="icon">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>About</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
    <!--! Header section start -->
    <header class="header">
      <a href="#" class="logo">
        <img src="images/logo.png" alt="logo" />
      </a>
      <nav class="navbar">
        <a href="home">Home</a>
        <a href="about" class="active">About</a>
        <a href="menu">Menu</a>
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="logout-button">Logout</button>
                    </form>
      </nav>
      <div class="search-form">
        <input type="text" class="search-input" id="search-box" placeholder="search here">
        <i class="fas fa-search"></i>
      </div>
      <div class="cart-items-container">
        <div class="cart-item">
            <i class="fas fa-items"></i>
            <img src="images/menu-1.png" alt="menu">
            <div class="content">
                <h3>cart item 01</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <i class="fas fa-items"></i>
            <img src="images/menu-2.png" alt="menu">
            <div class="content">
                <h3>cart item 02</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <i class="fas fa-items"></i>
            <img src="images/menu-3.png" alt="menu">
            <div class="content">
                <h3>cart item 03</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <i class="fas fa-items"></i>
            <img src="images/menu-4.png" alt="menu">
            <div class="content">
                <h3>cart item 04</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <a href="#" class="btn">checkout now</a>
      </div>
    </header>
    <!--! Header section end -->



    <!--! about section start -->
    <section class="about" id="about">
      <h1 class="heading">about <span>us</span></h1>
      <div class="row">
        <div class="image"><img src="images/about.jpg" alt="" /></div>
        <div class="content">
          <h3></h3>
          <p>
          Selamat datang di Restaurant Catering, tempat di mana cita rasa bertemu dengan kenyamanan! Kami berdedikasi untuk menghadirkan pengalaman kuliner yang tak terlupakan bagi setiap pelanggan yang datang. Dengan menggunakan bahan-bahan segar dan berkualitas, setiap hidangan yang kami sajikan dibuat dengan penuh cinta dan keahlian.
          </p>
          <p>
          Restoran kami mengusung konsep modern dan minimalis. yang menawarkan suasana hangat dan nyaman, sempurna untuk menikmati waktu bersama keluarga, teman, atau bahkan untuk momen spesial.
          </p>
          <p>
          Kami percaya bahwa makanan yang baik tidak hanya memanjakan lidah, tetapi juga memberikan kebahagiaan. Oleh karena itu, setiap detail, dari rasa hingga penyajian, kami perhatikan dengan seksama untuk memberikan yang terbaik bagi Anda.
          </p>
          <a href="#" class="btn">Learn More</a>
        </div>
      </div>
    </section>
    <script src="js/script.js"></script>
  </body>
</html>
