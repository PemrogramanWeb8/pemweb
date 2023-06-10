<?php

error_reporting(0);

session_start();

include 'php/connect.php';
include 'php/fungsi.php';
include 'php/wishlist_process.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/counter.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="css/promo.css" />

    <title>Promo</title>
    <link rel="website icon" type="png" href="img/bahan lain/logo2.png" />
  </head>
  <body>
    <div class="container-fluid" style="background-color: #ffffff">
      <div class="container">
        <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="#">CLICKPROMO</a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="dashboard.php"
                  >Home <span class="sr-only">(current)</span></a
                >
              </li>

              <li class="nav-item">
                <a class="nav-link" href="e-com.php"
                  >E-Commerce <span class="sr-only">(current)</span></a
                >
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Kontak
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="alang.html"
                    >Alang Artha Iwana</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="amdila.html"
                    >Amdilla Rahmadi</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="kia.html">Kia Putri</a>
                </div>
              </li>
              <li class="nav-item active">
                <a
                  class="nav-link"
                  href="promo.php"
                  tabindex="-1"
                  aria-disabled="true"
                  >Promo</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="profil.php"
                  tabindex="-1"
                  aria-disabled="true"
                  >Profil</a
                >
              </li>
            </ul>
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a  href="wishlist.php" class="btn btn-lg btn-danger text-light ml-5"
                  ><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a
                >
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>

    <!--counter start-->
    <div class="container counter">
      <div
        class="row justify-content-center mt-5 mb-2"
        style="padding-top: 70px"
      >
        <h1 class="text-capitalize">
          <strong>Mega sale akan segera dimulai </strong>
        </h1>
      </div>

      <div
        class="row justify-content-center rounded-pill mt-5"
        style="padding-bottom: 100px; font-size: 50px"
        id="countdown"
      ></div>
    </div>

    <!-- promo e-commerce -->
    <div class="container mt-5">
  <?php
  $query = "SELECT * FROM e_comerce";
  $result = mysqli_query($conn, $query);

  while ($row = mysqli_fetch_assoc($result)) {
    $ecommerce_id = $row['id_ecom'];
    $nama_ecom = $row['Nama_Ecom'];

    ?>
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-center"><?php echo $nama_ecom; ?></h2>
      </div>
    </div>

    <div class="row">
      <?php
      $promo_query = "SELECT * FROM promo WHERE id_ecom = $ecommerce_id";
      $promo_result = mysqli_query($conn, $promo_query);

      if (mysqli_num_rows($promo_result) > 0) {
        while ($promo_row = mysqli_fetch_assoc($promo_result)) {
          $gambar_promo = $promo_row['gambar_promo'];
          $nama_promo = $promo_row['nama_promo'];
          $link_promo = $promo_row['link_promo'];
          ?>
          <div class="col-md-6">
            <div class="outer-div mb-4">
              <div class="inner-div">
                <img src="img/promo/<?php echo $gambar_promo; ?>" alt="<?php echo $nama_promo; ?>" class="center-img promo-img">
              </div>
            </div>
            <div class="promo-details">
              <h4><?php echo $nama_promo; ?></h4>
              <form action = "php\wishlist_process.php" method = "POST">
              <a href="<?php echo $link_promo; ?>" class="btn btn-primary">App >></a>
              <input type="hidden" name="id_promo" value="<?php echo $promo_row['id_promo']; ?>">
              <button class="btn btn-secondary wishlist-btn" data-promo-id="<?php echo $promo_row['id_promo']; ?>">Wishlist >></button>
              </form>
            </div>
          </div>
          <?php
        }
      } else {
        echo "<div class='col-md-12'><p class='text-center'>Tidak ada promo saat ini untuk $nama_ecom</p></div>";
      }
      ?>
    </div>
    <?php
  }
  ?>
</div>



<style>
  .promo-img {
    max-height: 300px;
    object-fit: cover;
  }
  .promo-img {
  display: block;
  margin: 0 auto;
  width: 50%;
}

.promo-details {
  text-align: center;
}

.promo-details h4 {
  margin-top: 10px;
}

.promo-details .btn {
  margin-top: 10px;
}

.outer-div {
  text-align: center;
  margin-bottom: 20px;
}
</style>


    <div class="container">
      <div class="row mt-2 mb-5">
        <div class="col-md-12">
          <h1 class="text-center">Pilih Sesuai Kategori</h1>
        </div>
      </div>
    </div>

    <div class="container mt-5">
      <div class="row">
        <div class="col-md-6">
          <div class="outer-div">
            <div class="inner-div1">
              <h1 class="zoom-box-text">Baju</h1>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="outer-div">
            <div class="inner-div2">
              <h1 class="zoom-box-text">Celana</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-5">
      <div class="row">
        <div class="col-md-6">
          <div class="outer-div">
            <div class="inner-div3">
              <h1 class="zoom-box-text">Jam</h1>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="outer-div">
            <div class="inner-div4">
              <h1 class="zoom-box-text">Sepatu</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-5 pb-5">
      <div class="col-md-12 text-center">
        <a class="btn btn-danger text-light btn-lg">Lainnya</a>
      </div>
    </div>
  </div>

    <!--counter end-->

    <div class="container">
      <div class="row mt-2 mb-5">
        <div class="col-md-12">
          <h1 class="text-center">Hari Ini</h1>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="owl-carousel">
        <div>
          <div class="card product-card">
            <img class="card-img-top img-fluid" src="img/baju/baju3.jpg" />
            <div class="card-body">
              <div class="card-title">Product1</div>
              <div class="card-text">
              <a class="btn btn-info" >App >></a> &nbsp; &nbsp;
                <a class="btn btn-success" >Wishlist >></a>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="card product-card">
            <img class="card-img-top img-fluid" src="img/baju/baju4.jpg" />
            <div class="card-body">
              <div class="card-title">Product2</div>
              <div class="card-text">
              <a class="btn btn-info" >App >></a> &nbsp; &nbsp;
                <a class="btn btn-success" >Wishlist >></a>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="card product-card">
            <img
              class="card-img-top img-fluid"
              src="img/celana/celanapendek.webp"
            />
            <div class="card-body">
              <div class="card-title">Product3</div>
              <div class="card-text">
              <a class="btn btn-info" >App >></a> &nbsp; &nbsp;
                <a class="btn btn-success" >Wishlist >></a>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="card product-card">
            <img class="card-img-top img-fluid" src="img/jam/jam2.webp" />
            <div class="card-body">
              <div class="card-title">Product4</div>
              <div class="card-text">
              <a class="btn btn-info" >App >></a> &nbsp; &nbsp;
                <a class="btn btn-success" >Wishlist >></a>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="card product-card">
            <img class="card-img-top img-fluid" src="img/sepatu/sepatu1.webp" />
            <div class="card-body">
              <div class="card-title">Product5</div>
              <div class="card-text">
              <a class="btn btn-info" >App >></a> &nbsp; &nbsp;
                <a class="btn btn-success" >Wishlist >></a>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="card product-card">
            <img
              class="card-img-top img-fluid"
              src="img/celana/promocelana.jpg"
            />
            <div class="card-body">
              <div class="card-title">Product6</div>
              <div class="card-text">
              <a class="btn btn-info" >App >></a> &nbsp; &nbsp;
                <a class="btn btn-success" >Wishlist >></a>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="card product-card">
            <img class="card-img-top img-fluid" src="img/sendal/sendal1.webp" />
            <div class="card-body">
              <div class="card-title">Product7</div>
              <div class="card-text">
              <a class="btn btn-info" >App >></a> &nbsp; &nbsp;
                <a class="btn btn-success" >Wishlist >></a>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="card product-card">
            <img class="card-img-top img-fluid" src="img/jam/jam4.jpg" />
            <div class="card-body">
              <div class="card-title">Product8</div>
              <div class="card-text">
              <a class="btn btn-info" >App >></a> &nbsp; &nbsp;
                <a class="btn btn-success" >Wishlist >></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row mt-2 mb-5">
        <div class="col-md-12">
          <h1 class="text-center">Akan Datang</h1>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="owl-carousel">
        <div>
          <div class="card product-card">
            <img class="card-img-top img-fluid" src="img/baju/baju.jpg" />
            <div class="card-body">
              <div class="card-title">Product1</div>
              <div class="card-text">
              <a class="btn btn-info" >App >></a> &nbsp; &nbsp;
                <a class="btn btn-success" >Wishlist >></a>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="card product-card">
            <img class="card-img-top img-fluid" src="img/celana/celana1.jpg" />
            <div class="card-body">
              <div class="card-title">Product2</div>
              <div class="card-text">
              <a class="btn btn-info" >App >></a> &nbsp; &nbsp;
                <a class="btn btn-success" >Wishlist >></a>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="card product-card">
            <img class="card-img-top img-fluid" src="img/sepatu/M3.jpg" />
            <div class="card-body">
              <div class="card-title">Product3</div>
              <div class="card-text">
              <a class="btn btn-info" >App >></a> &nbsp; &nbsp;
                <a class="btn btn-success" >Wishlist >></a>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="card product-card">
            <img class="card-img-top img-fluid" src="img/celana/M4.jpg" />
            <div class="card-body">
              <div class="card-title">Product4</div>
              <div class="card-text">
              <a class="btn btn-info" >App >></a> &nbsp; &nbsp;
                <a class="btn btn-success" >Wishlist >></a>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="card product-card">
            <img class="card-img-top img-fluid" src="img/celana/M5.jpg" />
            <div class="card-body">
              <div class="card-title">Product5</div>
              <div class="card-text">
              <a class="btn btn-info" >App >></a> &nbsp; &nbsp;
                <a class="btn btn-success" >Wishlist >></a>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="card product-card">
            <img class="card-img-top img-fluid" src="img/celana/M6.jpg" />
            <div class="card-body">
              <div class="card-title">Product6</div>
              <div class="card-text">
              <a class="btn btn-info" >App >></a> &nbsp; &nbsp;
                <a class="btn btn-success" >Wishlist >></a>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="card product-card">
            <img class="card-img-top img-fluid" src="img/jam/jam3.jpg" />
            <div class="card-body">
              <div class="card-title">Product7</div>
              <div class="card-text">
              <a class="btn btn-info" >App >></a> &nbsp; &nbsp;
                <a class="btn btn-success" >Wishlist >></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="container-fluid mt-5">
      <div class="container pt-5 pb-5">
        <div class="row">
          <div class="col-md-6">
            <h3>CLICKPROMO.COM</h3>
            <p>
              Menyediakan informasi terkini tentang promo dan penawaran dari
              berbagai platform. Sehingga Anda dapat mencari produk tertentu dan
              penawaran yang terbaik juga dari berbagai platform e-commerce.
            </p>
            <section class="footer">
              <div class="box-container">
                <div class="box">
                  <h3>Follow Kami</h3>
                  <a href="#"> <i class="fa fa-facebook-f"></i> facebook </a>
                  <a href="https://wa.me/6287750116539"> <i class="fa fa-whatsapp"></i> whatsapp </a>
                  <a href="https://www.instagram.com/cli.ckpromo/"> <i class="fa fa-instagram"></i> instagram </a>
                  <a href="#"> <i class="fa fa-linkedin"></i> linkedin </a>
                </div>
              </div>
            </section>
          </div>
          <div class="col-md-3">
            <h3>Produk Promo</h3>
            <div class="media mt-5">
              <img
                class="mr-3 img-fluid"
                src="img/footer images/c31.jpg"
                alt=""
              />
              <div class="media-body">
                <h5>Baju Wanita</h5>
                <del>Rp. 175.000</del> <br />&nbsp;Rp. 135.000
              </div>
            </div>

            <div class="media mt-5">
              <img
                class="mr-3 img-fluid"
                src="img/footer images/c51.jpg"
                alt=""
              />
              <div class="media-body">
                <h5>Atasan Wanita</h5>
                <del>Rp. 123.000</del> <br />&nbsp;Rp. 89.000
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <h3>Top E-Commerce</h3>
            <div class="media mt-5">
              <img
                class="mr-3 img-fluid"
                src="img/bahan lain/zalora.jpg"
                alt=""
              />
            </div>

            <div class="media mt-5">
              <img
                class="mr-3 img-fluid"
                src="img/bahan lain/shopee.webp"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </footer>

    <div class="container-fluid bg-dark">
      <div class="row">
        <div class="col-md-12 text-capitalize text-center text-light">
          Copyright <span>Click Promo</span> 2023 - CLICKPROMO.COM
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script src="js/counter.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script>
      $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: true,
          },
          600: {
            items: 3,
            nav: false,
          },
          1000: {
            items: 4,
            nav: false,
            loop: false,
          },
        },
      });
    </script>
<script>
  var wishlistButtons = document.querySelectorAll('.wishlist-btn');

  wishlistButtons.forEach(function(button) {
    button.addEventListener('click', function() {
      var promoId = this.getAttribute('data-promo-id');

      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'php/wishlist_process.php', true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          alert('Promo berhasil ditambahkan ke wishlist!');
        } else if (xhr.readyState === 4 && xhr.status !== 200) {
          alert('Terjadi kesalahan. Promo gagal ditambahkan ke wishlist.');
        }
      };
      xhr.send('promo_id=' + promoId);
    });
  });
</script>

  </body>
</html>