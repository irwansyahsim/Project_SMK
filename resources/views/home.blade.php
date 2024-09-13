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
    <title>Restaurant Web Site</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
        
    <header class="header">
      <a href="home" class="logo">
        <img src="images/logo.png" alt="logo" />
      </a>
      <nav class="navbar">
        <a  href="home" class="active">Home</a>
        <a href="about" >About</a>
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

    <!--! Home section start -->
    <section class="home" id="home">
      <div class="content">
        <h3>RESTAURANT CATERING</h3>
        <p>
        Kami dengan senang hati menyambut Anda di Restaurant Catering, tempat di mana cita rasa terbaik dipadukan dengan kenyamanan. Dengan tampilan yang segar dan ramah pengguna, kami berkomitmen untuk memberikan pengalaman kuliner yang memuaskan, baik secara visual maupun rasa.
        </p>
        <a href="menu" class="btn">Order Now</a>
      </div>
    </section>
    <!--! Home section end -->
    <!--! Menü section start -->
    <section class="menu" id="menu">
      <h1 class="heading">our <span>menu</span></h1>
      <div class="box-container">
        <div class="box">
          <div class="box-head">
            <img src="images/menu-1.png" alt="menu" />
            <span class="menu-category">PIZZA</span>
            <h3>Mini Pizzas</h3>
            <div class="price">Rp.50.000<span>Rp.50.000</span></div>
            <a href="menu" class="btn">Order Now</a>
          </div>
        </div>
        <div class="box">
          <div class="box-head">
            <img src="images/menu-2.png" alt="menu" />
            <span class="menu-category">BURGER</span>
            <h3>Mini Burgers</h3>
            <div class="price">Rp.50.000 <span>Rp.50.000</span></div>
            <a href="menu" class="btn">Order Now</a>
          </div>
        </div>
        <div class="box">
          <div class="box-head">
            <img src="images/menu-3.png" alt="menu" />
            <span class="menu-category">PIZZA</span>
            <h3>Mixed Pizzas</h3>
            <div class="price">Rp.50.000 <span>Rp.50.000</span></div>
            <a href="menu" class="btn">Order Now</a>
          </div>
        </div>
        <div class="box">
          <div class="box-head">
            <img src="images/menu-4.png" alt="menu" />
            <span class="menu-category">BURGER</span>
            <h3> Burgers</h3>
            <div class="price">Rp.50.000 <span>Rp.50.000</span></div>
            <a href="menu" class="btn">Order Now</a>
          </div>
        </div>
      </div>
    </section>


    <!--! about section start -->
    <section class="about" id="about">
      <h1 class="heading">about <span>us</span></h1>
      <div class="row">
        <div class="image"><img src="images/about.jpg" alt="" /></div>
        <div class="content">
          <h3>Apa Resep Rahasia Burger Kami?
          </h3>
          <p>
          Resep rahasia kami terletak pada bahan-bahan segar, daging berkualitas, dan racikan bumbu spesial yang dibuat dengan cinta. Setiap gigitan adalah perpaduan sempurna dari kelezatan dan tekstur yang memanjakan lidah Anda.

Selalu fresh, selalu nikmat!
          </p>
         
          
          <a href="#" class="btn">Learn More</a>
        </div>
      </div>
    </section>
    <!--! about section end -->

    <!--! review section start -->
    <section class="review" id="review">
      <h1 class="heading">customer's <span>review</span></h1>
      <div class="box-container">
        <div class="box">
          <img src="images/quote.png" alt="quote" />
          <p>
          Makanan dan pelayanan luar biasa!
Saya sangat terkesan dengan pengalaman makan di sini. Makanannya tidak hanya enak, tapi juga disajikan dengan sangat menarik. Pelayanannya ramah dan cepat. Tempatnya pun nyaman, cocok untuk makan bersama keluarga. Saya pasti akan kembali lagi!


          </p>
          <img src="images/avatar-1.png" alt="avatar" class="user" />
          <h3>Jennifer Becker</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>
        <div class="box">
          <img src="images/quote.png" alt="quote" />
          <p>
          Restoran terbaik di kota!
          Dari mulai masuk, sudah terasa suasana hangat dan ramah. Menunya bervariasi dengan cita rasa yang memukau! Saya mencoba beberapa hidangan, dan semuanya luar biasa. Desain restorannya juga modern dan menarik. Highly recommended!
          </p>
          <img src="images/avatar-2.png" alt="avatar" class="user" />
          <h3>Jhon Doe</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>
        <div class="box">
          <img src="images/quote.png" alt="quote" />
          <p>
          Pengalaman kuliner yang tak terlupakan!
          Restoran ini benar-benar mengesankan! Pelayanan yang sangat baik, makanan yang disajikan tepat waktu, dan rasanya sungguh memanjakan lidah. Ditambah lagi suasana restorannya yang cozy, membuat betah berlama-lama. Wajib dicoba bagi pencinta kuliner!
          </p>
          <img src="images/avatar-3.png" alt="avatar" class="user" />
          <h3>Lisa Arambula</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>
      </div>
    </section>
    <!--! review section end -->

    <!--! contact section start -->

   
    <!--! contact section end -->

    <!--! blogs section start -->
    <section class="blogs" id="blogs">
      <h1 class="heading">our <span>blog</span></h1>
      <div class="box-container">
        <div class="box">
          <div class="image">
            <img src="images/blog-1.jpg" alt="blog" />
          </div>
          <div class="content">
            <a href="#" class="title">Sejarah burger</a>
            <span>by admin sigma / 22 Agustus , 2024</span>
            <p>
            Sejarah Singkat Burger
            Asal-usul burger bisa dilacak kembali ke abad ke-19, dengan akar yang berasal dari Jerman. Hamburger steak, yang merupakan cikal bakal burger modern, dibawa ke Amerika oleh para imigran Jerman. Seiring waktu, roti bulat dan daging sapi cincang digabungkan, menciptakan burger seperti yang kita kenal sekarang.
            </p>
            <a href="#" class="btn">read more</a>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="images/blog-2.jpg" alt="blog" />
          </div>
          <div class="content">
            <a href="#" class="title">cara membuat burger seenak ini dalam 10 menit</a>
            <span>by admin sigma / 22 Agustus , 2024</span>
            <p>
            Daging sapi cincang (100-150g per patty) - Bisa diganti dengan daging ayam, kalkun, atau patty berbasis tumbuhan jika lebih suka opsi vegetarian.
Garam dan merica secukupnya - Untuk memberi rasa pada daging.
Roti burger - Roti brioche, whole wheat, atau roti favorit Anda.
Keju (opsional) - Cheddar, mozzarella, atau keju favorit Anda.
Sayuran - Selada, tomat, bawang bombay, dan acar (opsional).
Saus - Mayones, saus tomat, saus mustard, atau saus BBQ sesuai selera.
Minyak zaitun atau mentega - Untuk memanggang roti dan memasak patty.
            </p>
            <a href="#" class="btn">read more</a>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="images/blog-3.jpg" alt="blog" />
          </div>
          <div class="content">
            <a href="#" class="title">Dari Inovasi Vegan hingga Burger dengan Sentuhan Teknologi</a>
            <span>by admin sigma /22 Agustus , 2024</span>
            <p>
            Pendahuluan
            Burger telah lama menjadi favorit banyak orang, tetapi di tahun 2024, burger mengalami transformasi besar-besaran. Tren terkini menunjukkan bahwa burger bukan lagi sekadar daging sapi di antara dua roti, melainkan sebuah kanvas kuliner yang siap dijelajahi dengan berbagai inovasi. Mari kita lihat bagaimana burger telah berevolusi dan tren apa saja yang sedang populer tahun ini.
            </p>
            <a href="blogs" class="btn">read more</a>
          </div>
        </div>
      </div>
    </section>


    <script src="js/script.js"></script>
  </body>
</html>
