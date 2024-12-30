<?php
include "koneksi.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebFahrial</title>
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="path/to/dist/feather.js"></script>
    <style>
    .social-icons a {
        text-decoration: none; /* Menghilangkan garis bawah */
        outline: none; /* Menghilangkan outline saat diklik */
        border: none; /* Menghilangkan border */
    }

    .social-icons a:focus {
        outline: none; /* Menghilangkan outline saat fokus */
    }

@media (max-width: 768px) {
    .display-2 {
        font-size: 2rem;
    }
    .display-6 {
        font-size: 1.5rem;
    }
}

@media (max-width: 576px) {
    #hero {
        padding: 30px 0;
    }
}

.responsive-iframe {
    position: relative;
    padding-bottom: 56.25%; /* Rasio aspek 16:9 */
    height: 0;
    overflow: hidden;
    max-width: 100%;
    background: #000;
}

.responsive-iframe iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.log-out {
  background-color: green; /* Warna hijau */
  color: white; /* Warna teks putih */
  border: none; /* Hilangkan border default */
  padding: 6px 12px; /* Spasi di dalam tombol */
  font-size: 14px; /* Ukuran font */
  border-radius: 8px; /* Membuat sudut membulat */
  cursor: pointer; /* Mengubah kursor menjadi pointer saat dihover */
  transition: transform 0.2s, background-color 0.2s; /* Efek transisi */
}

/* Efek hover */
.log-out:hover {
  background-color: darkgreen; /* Warna hijau lebih gelap saat dihover */
}

/* Efek klik */
.log-out:active {
  transform: scale(0.95); /* Tombol sedikit mengecil saat diklik */
}


</style>

    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- navigation section -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container">
          <a class="navbar-brand" href="index.php">Fahrial Daily Jurnal</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-dark" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="#gallery">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="#article">Article</a>
              </li>
                  <li class="nav-item">
                      <a class="nav-link text-dark" href="login.php"><button class="log-out"> login </button></a>
                    </li>
            </ul>
          </div>
        </div>
      </nav>
      


    <!-- hero section -->
    <section id="hero" style="background-color: #e9ecef; padding: 60px 0;">
        <div class="container text-sm-start">
          <div class="d-sm-flex flex-sm-row-reverse align-items-center">
            <img src="../web_daily_lanjutan/gambar/madrid.jpg" class="img-fluid me-sm-4" width="300" alt="Image description">
            <div class="text-center text-sm-start">
              <h1 class="fw-bold display-2">Real Madrid</h1>
              <h4 class="lead display-7">Real Madrid Club de Fútbol, didirikan pada 6 Maret 1902 di Madrid, Spanyol, adalah salah satu klub sepak bola paling legendaris di dunia. Dengan gelar "Real" 
                yang diberikan Raja Alfonso XIII pada 1920, klub ini telah menjadi simbol kejayaan sepak bola, baik di Spanyol maupun internasional. Dominasi Real Madrid dimulai pada dekade 1950-an 
                dengan lima gelar Piala Eropa berturut-turut, berlanjut dengan proyek "Los Galácticos" di abad ke-21, hingga puncaknya saat meraih La Décima pada 2014 dan empat gelar Liga Champions dalam lima tahun di bawah Zinedine Zidane. 
                Dikenal dengan akademi La Fábrica, stadion ikonik Santiago Bernabéu, dan dukungan fanatik Madridistas, Real Madrid tidak hanya mencetak sejarah, tetapi juga menjadi inspirasi global sebagai simbol ambisi, kerja keras, dan kejayaan sepak bola..</h4>
            </div>
          </div>
        </div>
        <br><br><br>
      </section>      

    <!-- article section -->
    <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="gambar/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->

    <!-- gallery section -->
    <section id="gallery"  style="background-color: #e9ecef; padding: 60px 0;">
        <h2 class="text-center fw-bold display-6">Gallery</h2>
        
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Item Pertama -->
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center">
                        <img src="../web_daily_lanjutan/gambar/gallmd1.jpg" class="d-block" style="max-width: 90%; height: auto;" alt="Gambar 1">
                    </div>
                </div>
                <!-- Item Kedua -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <img src="../web_daily_lanjutan/gambar/gallmd2.jpg" class="d-block" style="max-width: 90%; height: auto;" alt="Gambar 2">
                    </div>
                </div>
                <!-- Item Ketiga -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <img src="../web_daily_lanjutan/gambar/gallmd3.jpg" class="d-block" style="max-width: 90%; height: auto;" alt="Gambar 3">
                    </div>
                </div>
                <!-- Item Keempat -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <img src="../web_daily_lanjutan/gambar/gallmd4.jpg" class="d-block" style="max-width: 90%; height: auto;" alt="Gambar 4">
                    </div>
                </div>
                <!-- Item Kelima -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <img src="../web_daily_lanjutan/gambar/gallmd5.jpg" class="d-block" style="max-width: 90%; height: auto;" alt="Gambar 5">
                    </div>
                </div>
                <!-- Item Keenam -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <img src="../web_daily_lanjutan/gambar/gallmd6.jpg" class="d-block" style="max-width: 90%; height: auto;" alt="Gambar 6">
                    </div>
                </div>
            </div>
            
            <!-- Kontrol Carousel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <br><br>
    
        <div class="video text-center">
    <h2><b>Video</b></h2>
    <div class="responsive-iframe" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
        <iframe 
            src="https://www.youtube.com/embed/Yc-7IQqcqeM?si=rVWRkB8wrQZgSL1_" 
            title="YouTube video player" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            allowfullscreen 
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
        </iframe>
    </div>
</div>

        
    </section>
    
    <!-- footer -->
    <footer class="bg-light text-center p-3">
        <div class="social-icons">
            <a href="https://www.instagram.com/irvianoo/" class="h2 p-2 text-dark" target="_blank">
                <i class="bi bi-instagram"></i> <!-- Gunakan ikon dari Bootstrap Icons -->
            </a>
            <a href="https://www.tiktok.com/@irvianooo?_t=8seAYTxa0dp&_r=1" class="h2 p-2 text-dark" target="_blank">
                <i class="bi bi-tiktok"></i> <!-- Gunakan ikon dari Bootstrap Icons -->
            </a>
            <a href="https://x.com/fahrialseptian?s=11" class="h2 p-2 text-dark" target="_blank">
                <i class="bi bi-twitter"></i> <!-- Gunakan ikon dari Bootstrap Icons -->
            </a>
        </div>
        <div class="copyright text-dark mt-2">
            <p>&copy; 2024 Daily Jurnal. Fahrial Septian Irviano.</p>
        </div>
    </footer>
</body>
</html>