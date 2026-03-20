<?php
include 'koneksi.php';

$profile = mysqli_query($conn, "SELECT * FROM profile LIMIT 1");
$dataProfile = mysqli_fetch_assoc($profile);

$education = mysqli_query($conn, "SELECT * FROM education LIMIT 1");
$dataEdu = mysqli_fetch_assoc($education);

$skills = mysqli_query($conn, "SELECT * FROM skills");
$experience = mysqli_query($conn, "SELECT * FROM experience");
$certificates = mysqli_query($conn, "SELECT * FROM certificates");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Zahra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="70">


<nav id="navbar" class="navbar navbar-expand-lg bg-navbar fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">Zahra Aurellya Herdiansyah</a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About Me</a></li>
        <li class="nav-item"><a class="nav-link" href="#certificates">Certificates</a></li>
      </ul>
    </div>
  </div>
</nav>


<section id="home" class="hero-section d-flex align-items-center">
  <div class="container">
    <div class="row align-items-center">

      <div class="col-lg-6 d-flex justify-content-center">
        <img src="profile.jpeg" class="profile-img">
      </div>

      <div class="col-lg-6 text-center text-lg-start">
        <h1 class="h2 fw-bold hero-title">
          Halo, saya Zahra Aurellya Herdiansyah
        </h1>
        <p class="lead hero-subtitle">
          Saya adalah mahasiswa Sistem Informasi yang memiliki ketertarikan pada pengembangan perangkat lunak dan analisis data. Saya terbiasa mengerjakan proyek berbasis web dan mobile, serta memiliki kemampuan dalam manajemen database dan perancangan sistem. Portofolio ini dibuat sebagai dokumentasi perjalanan akademik dan profesional saya.
        </p>
      </div>

    </div>
  </div>
</section>


<section id="about" class="py-5">
  <div class="container">

    <h2 class="text-center mb-4">About Me</h2>

    <div class="row g-4">

      <div class="col-md-6">
        <div class="about-box h-100">
          <h4>Profile</h4>
          <p><?= $dataProfile['deskripsi']; ?></p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="about-box h-100">
          <h4>Education</h4>
          <p>
            <strong><?= $dataEdu['jurusan']; ?></strong><br>
            <?= $dataEdu['tahun']; ?><br>
            <?= $dataEdu['deskripsi']; ?>
          </p>
        </div>
      </div>

    </div>

    <div class="row mt-4">
      <div class="col-12">
        <div class="about-box">
          <h4>Skills</h4>

          <ul class="mt-3 list-unstyled">
          <?php while($s = mysqli_fetch_assoc($skills)) { ?>
            
            <li class="mb-4">
              <strong>
                <?php
                  if($s['nama_skill'] == 'Graphic Design') echo '🎨 ';
                  elseif($s['nama_skill'] == 'Photography') echo '📸 ';
                  elseif($s['nama_skill'] == 'Video Editing') echo '🎬 ';
                ?>
                <?= $s['nama_skill']; ?>
              </strong>

              <p class="mb-2"><?= $s['deskripsi']; ?></p>

              <div class="progress">
                <div class="progress-bar 
                  <?php
                    if($s['level'] >= 90) echo 'bg-success';
                    elseif($s['level'] >= 85) echo 'bg-info';
                    else echo 'bg-warning';
                  ?>"
                  style="width: <?= $s['level']; ?>%;">
                  <?= $s['level']; ?>%
                </div>
              </div>
            </li>

          <?php } ?>
          </ul>

        </div>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-12">
        <div class="about-box">
          <h4>Experience</h4>

          <ul>
          <?php while($e = mysqli_fetch_assoc($experience)) { ?>
            <li class="mt-3">
              <strong><?= $e['jabatan']; ?></strong><br>
              <?= $e['deskripsi']; ?>
            </li>
          <?php } ?>
          </ul>

        </div>
      </div>
    </div>

  </div>
</section>

<section id="certificates" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-5 fw-bold">Certificates</h2>

    <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php while($c = mysqli_fetch_assoc($certificates)) { ?>

      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="<?= $c['gambar']; ?>" class="card-img-top">
          <div class="card-body text-center">
            <h5 class="card-title fw-semibold"><?= $c['nama']; ?></h5>
          </div>
        </div>
      </div>

    <?php } ?>
    </div>

  </div>
</section>


<footer>
  &copy; 2026 Zahra Aurellya. All rights reserved.
</footer>


<script>
const boxes = document.querySelectorAll('.about-box');

function showBoxes() {
  const triggerBottom = window.innerHeight * 0.85;
  boxes.forEach(box => {
    const boxTop = box.getBoundingClientRect().top;
    if(boxTop < triggerBottom) {
      box.classList.add('visible');
    }
  });
}

window.addEventListener('scroll', showBoxes);
window.addEventListener('load', showBoxes);
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>