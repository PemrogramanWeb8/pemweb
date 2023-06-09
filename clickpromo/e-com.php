<?php

error_reporting(0);

session_start();

include 'php/connect.php';
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
    <link rel="stylesheet" href="css/home.css" />

    <title>E-Commerce</title>
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

              <li class="nav-item active">
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
              <li class="nav-item">
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
                <a class="btn btn-lg btn-danger text-light ml-5 " href="whislist.php"
                  ><i class="fa fa-cart-arrow-down" aria-hidden="true"></i
                ></a>
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
        style="padding-top: 150px"
      >
        <h1 class="text-capitalize">
          <strong>Mega sale akan segera dimulai </strong>
        </h1>
      </div>

      <div
        class="row justify-content-center rounded-pill mt-5"
        style="padding-bottom: 100px; font-size: 70px"
        id="countdown"
      ></div>
    </div>

    <div class="container mt-5 mb-5">
      <div class="row">
        <div class="col-md-12 text-center text-capitalize">
          <h1>e-commerce partners</h1>
        </div>
      </div>
    </div>

    <div class="container mt-5">
      <div class="row">
      <?php
      $query = "SELECT * FROM e_comerce";
      $result = mysqli_query($conn, $query);

      while ($row = mysqli_fetch_assoc($result)) {
        $gambar_ecom = $row['gambar_ecom'];
        $link_ecom = $row['link_ecom'];
        ?>
        <div class="col-md-6">
          <div class="outer-div">
            <div class="inner-div">
              <a href="<?php echo $link_ecom; ?>">
                <img src="img/e_com/<?php echo $gambar_ecom; ?>" alt="" srcset="" class="center-img">
              </a>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
      </div>
    </div>

    <style>
  .inner-div {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
  }

  .image-container {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
  }
  </style>

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
                  <a href="https://wa.me/6287750116539">
                    <i class="fa fa-whatsapp"></i> whatsapp
                  </a>
                  <a href="https://www.instagram.com/cli.ckpromo/">
                    <i class="fa fa-instagram"></i> instagram
                  </a>
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
  </body>
</html>
