<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Catering</title>
    <link href="http://127.0.0.1:8000/images/logo.png" rel="icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Menu</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
    <!--! Header section start -->

    <header class="header">
      <a href="home" class="logo">
        <img src="images/logo.png" alt="logo" />
      </a>
      <nav class="navbar">
        <a  href="home">Home</a>
        <a href="about">About</a>
        <a href="menu" class="active">Menu</a>
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
                <div class="price">Rp.50.000/-</div>
            </div>
        </div>
        <div class="cart-item">
            <i class="fas fa-items"></i>
            <img src="images/menu-2.png" alt="menu">
            <div class="content">
                <h3>cart item 02</h3>
                <div class="price">Rp.50.000/-</div>
            </div>
        </div>
        <div class="cart-item">
            <i class="fas fa-items"></i>
            <img src="images/menu-3.png" alt="menu">
            <div class="content">
                <h3>cart item 03</h3>
                <div class="price">Rp.50.000/-</div>
            </div>
        </div>
        <div class="cart-item">
            <i class="fas fa-items"></i>
            <img src="images/menu-4.png" alt="menu">
            <div class="content">
                <h3>cart item 04</h3>
                <div class="price">Rp.50.000/-</div>
            </div>
        </div>
        <a href="#" class="btn">checkout now</a>
      </div>
    </header>
    <!--! Header section end -->


    <!--! Menü section start -->
    <section class="menu" id="menu">
      <h1 class="heading">our <span>menu</span></h1>
      <div class="box-container">
        <div class="box">
          <div class="box-head">
            <img src="images/menu-1.png" alt="menu" />
            <span class="menu-category">PIZZA</span>
            <h3>Mini Pizzas</h3>
            <div class="price">Rp.50.000</div>
          </div>
          <div class="box-bottom">
            <a href="/create" class="btn">add to cart</a>
          </div>
        </div>
        <div class="box">
          <div class="box-head">
            <img src="images/menu-2.png" alt="menu" />
            <span class="menu-category">BURGER</span>
            <h3>Mini Burgers</h3>
            <div class="price">Rp.50.000</div>
          </div>
          <div class="box-bottom">
            <a href="/create" class="btn">add to cart</a>
          </div>
        </div>
        <div class="box">
          <div class="box-head">
            <img src="images/menu-3.png" alt="menu" />
            <span class="menu-category">PIZZA</span>
            <h3> Mixed Pizzas</h3>
            <div class="price">Rp.50.000</div>
          </div>
          <div class="box-bottom">
            <a href="create" class="btn">add to cart</a>
          </div>
        </div>
        <div class="box">
          <div class="box-head">
            <img src="images/menu-4.png" alt="menu" />
            <span class="menu-category">BURGER</span>
            <h3>Burgers</h3>
            <div class="price">Rp.50.000 </div>
          </div>
          <div class="box-bottom">
            <a href="/create" class="btn">add to cart</a>
          </div>
        </div>
      </div>
    </section>