<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">
    <?php $this->head() ?>
</head>
<body="d-flex flex-column h-100">
<?php $this->beginBody() ?>

 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

     
    <h1 class="logo me-auto"><a href="#">Medika Clinic</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto" href="/">Home</a></li>
                <li class="dropdown"><a href="#"><span>Data</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/site/wilayah">Wilayah</a></li>
                        <li><a href="/site/user">User</a></li>
                        <li><a href="/site/pegawai">Pegawai</a></li>
                        <li><a href="/site/tindakan">Tindakan</a></li>
                        <li><a href="/site/obat">Obat</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Transaksi</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/site/pendaftaran">Pendaftaran Pasien</a></li>
                        <li><a href="/site/tindakan-pasien">Tindakan dan Obat</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="/site/pembayaran">Pembayaran Tagihan</a></li>
                <li><a class="nav-link scrollto" href="/site/laporan">Laporan</a></li>
                <?php if (Yii::$app->user->isGuest): ?>
                    <li><a class="nav-link scrollto" href="/site/login">Login</a></li>
                <?php else: ?>
                    <li class="dropdown"><a href="#"><span>Akun (<?= Yii::$app->user->identity->username ?>)</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li>
                                <?= Html::beginForm(['/site/logout'], 'post', ['class' => 'dropdown-item']) ?>
                                <?= Html::submitButton('Logout', ['class' => 'btn btn-link logout']) ?>
                                <?= Html::endForm() ?>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->


<div class="social-links">
    <a href="https://linkedin.com/in/exaudi-siregar-j080103/" class="linkedin"><i class="bi bi-linkedin"></i></a>
    <a href="https://www.instagram.com/exasrg/" class="instagram"><i class="bi bi-instagram"></i></a>
</div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center" data-aos="fade-up">
        <div class="col-lg-6 intro-info order-lg-first order-last" data-aos="zoom-in" data-aos-delay="100">
          <h2>Medical Clinic<br>Solution <span>For You</span></h2>
          <div>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>

        <div class="col-lg-6 intro-img order-lg-last order-first" data-aos="zoom-out" data-aos-delay="200">
          <img src="img/intro-img.svg" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">
    <?= $content?>
</main>

<!-- ======= Footer ======= -->
<footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">

              <div class="col-sm-6">

                <div class="footer-info">
                  <h3>Medical Clinic</h3>
                  <p>Clinic ini merupakan clinic yang menyediakan jasa pelayanan secara digital sehingga memudahkan user dengan admint</p>
                </div>

                <div class="footer-newsletter">
                  <h4>Our Newsletter</h4>
                  <p>Silahkan berikan pendapat anda melalui email pribadi</p>
                  <form action="" method="post">
                    <input type="email" name="email"><input type="submit" value="Submit">
                  </form>
                </div>

              </div>

                <div class="footer-links">
                  <h4>Contact Us</h4>
                  <p>
                    Bandung <br>
                    Cidadap, 01232<br>
                    Jawa Barat, Indonesia <br>
                    <strong>Phone:</strong> +62 821-6203-7203<br>
                    <strong>Email:</strong> exaudisiregar08@gmail.com<br>
                  </p>
                </div>

                <div class="social-links">
                <a href="https://linkedin.com/in/exaudi-siregar-j080103/" class="linkedin"><i class="bi bi-linkedin"></i></a>
                <a href="https://www.instagram.com/exasrg/" class="instagram"><i class="bi bi-instagram"></i></a>
                </div>

              </div>

            </div>

          </div>

          <div class="col-lg-6">

            <div class="form">

              <h4>Send us a message</h4>
              <p>Silahkan Beritahu Kami melalui Email </p>

              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>

                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>

                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>

            </div>

          </div>

        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Medical Clinic</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a>Exaudi Siregar</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <!-- Vendor JS Files -->
  <script src="vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
