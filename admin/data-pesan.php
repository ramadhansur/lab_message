<?php 
  require_once("./proses/uservalidation.php"); 
  $keterangan = $_SESSION["keterangan"];
  require_once("./proses/authuser.php");

  include './proses/koneksi.php';
  $tabel = mysqli_query($koneksi,"SELECT * FROM tb_pesan ORDER BY id asc");
  error_reporting(0);

  // Search
  if(isset($_POST['tombol-cari'])){
    $cari = $_POST['cari'];
    $_SESSION['cari'] = $cari;
  }else{
    $cari = $_SESSION['cari'];
  }

  // pagination
  $perPage = 100; //isi data perhalaman
  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;


  $data_pesan = "SELECT * FROM tb_pesan WHERE pemeriksaan LIKE '%$cari%' ORDER BY id asc LIMIT $start, $perPage";
  $data_pesan_limit = mysqli_query($koneksi, $data_pesan);

  $data = mysqli_query($koneksi,"select * from tb_pasien_resepsionis");
  $totaldata = mysqli_num_rows($data);

  $halaman = ceil($totaldata/$perPage);


  $jumlahlink = 3;

  if($page > $jumlahlink){
      $start_number = $page - $jumlahlink;
  } else {
      $start_number = 1;
  }

  if($page < $halaman - $jumlahlink){
      $end_number = $page + $jumlahlink;
  } else{
      $end_number = $halaman;
  }
?>
<!DOCTYPE html>


<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./img/logo.png">
  <link rel="icon" type="image/png" href="./img/mbacit-logo-2.png">
  <title>
   Data Pesan - Admin Control
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
  <link id="pagestyle" href="./assets/css/Style.css" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-lab">
  <p class="font-weight-bolder text-blue page-title-bg">Data Pesan Pasien</p>
  <div class="bg-img-daqu">
    <img class="img-background" src="img/mbacit-logo-1.png" alt="">
  </div>
  <!-- Sidebar -->
  <aside class="sidenav bg-lab-blue navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <section class="brand-text">
        <a class="navbar-brand m-0" href="#">
            <h1>Lab<span>oratorium</span></h1>
            <h2>Halaman Admin Control</h2>
          </a>
      </section>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse " id="sidenav-collapse-main">
      <section class="navbar-custom-item">
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link justify-content-center" href="Index.php">
                <span class="text-item-custom">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link justify-content-center" href="data-pasien.php">
                <span class="text-item-custom">Data Pasien</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active justify-content-center" href="data-pesan.php">
                <span class="active-custom">Data Pesan Pasien</span>
              </a>
            </li>
          </ul>
      </section>
    </div>
    <div class="sidenav-footer nav-bottom">
      <div class="card card-plain shadow-none" id="sidenavCard">
        <img class="w-45 mx-auto mt-5" src="img/mbacit-logo-1.png" alt="sidebar_illustration">
        <div class="card-body text-center p-3 w-10 pt-0">
        </div>
      </div>
      <a class="logout-btn mb-0 w-100 button-footer-side text-blue" href="./proses/proses-logout.php" type="button">
        <span class="text-item-custom">Logout</span>
      </a>
    </div>
  </aside>

  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <p class="font-weight-bolder text-blue page-title">Data Pesan</p>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line text-blue"></i>
                  <i class="sidenav-toggler-line text-blue"></i>
                  <i class="sidenav-toggler-line text-blue"></i>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- container -->

    <!-- Content -->
    <div class="container-fluid">
      <!-- Button Tambah Data -->
      <div class="row justify-content-between">
        <div class="col-xxl-3 col-sm-12 mb-xl-0 mb-1">
            <div class="card-body">
              <div class="datahead-card-custom align-content-center">
                <div class="row">
                  <div class="">
                    <div class="numbers">
                        <a href="kirim-pesan.php"><button type="button" class="btn button-green text-white btn-tambah">Tambah Pesan <i class='fas fa-plus'></i></button></a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <!-- End Button Tambah Data -->
        <!-- Search Data -->
        <div class="col-xxl-3 col-sm-12 mb-xl-0 mb-1">
          <div class="card-body">
            <div class="datahead-card-custom">
              <div class="row">
                <div class="">
                  <div class="numbers">
                    <form action="data-dokter.php" method="POST">
                      <a type="submit" name="keyword" class="btn-search"><i class="fa-solid fa-magnifying-glass find-btn"></i></a>
                      <input class="search" name="keyword" type="text" placeholder="Search" autocomplete="off" autofocus>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Search Data -->
      </div>
      <!-- Tampil Data -->
      <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header pb-0 ">
                <h3 class="text-blue">Data Pesan</h3>
              </div>
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0 ">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-xxs font-weight-bolder opacity-7 text-blue">Pemeriksaan</th>
                        <th class="text-uppercase text-xxs font-weight-bolder opacity-7 text-blue">Pesan</th>
                        <th class="text-uppercase text-xxs font-weight-bolder opacity-7 text-blue">Action</th>
                        <th class="text-secondary opacity-0"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if(mysqli_num_rows($data_pesan_limit)>0){ ?>
                        <?php
                            $no = 1;
                            while($d = mysqli_fetch_array($data_pesan_limit)){
                        ?>
                          <tr>
                            <td class="align-left text-sm">
                              <span class="text-blue text-xs font-weight-bold me-3" style="margin-left: 18px;"><?= $d['pemeriksaan']; ?></span>
                            </td>
                            <td class="align-left text-sm">
                              <span class="text-blue text-xs font-weight-bold me-3" style="margin-left: 18px;">
                              <?php
                                $pesan = $d['pesan'];
                                $panjang_pesan = strlen($pesan);
                                $long = 25;
                                if($panjang_pesan >= $long){
                                  echo substr($pesan,0,$long).'...';
                                }else{
                                  echo $pesan;
                                }
                              ?></span>
                            </td>
                            <td class="align-middle">
                              <a href="./edit-data-pesan.php?id=<?= $d['id']; ?>" class="text-green font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                Edit
                              </a>
                              <a href="" onClick="confirm_modal('./proses/proses-hapus-pesan.php?id=<?= $d['id'] ?>')"120 data-bs-toggle="modal" data-bs-target="#ModalDelete" class="text-blue font-weight-bold text-xs ms-3 me-3" data-toggle="tooltip" data-original-title="Edit user">
                                Hapus
                              </a>
                            </td>
                              <td class="align-middle">
                                <a href="./proses/kirim-pemeriksaan.php?pemeriksaan=<?= $d['pemeriksaan']?>" class="button-kirim">
                                  <span class="default">Kirim</span>
                                  <span class="success">Terkirim</span>
                                  <div class="left"></div>
                                  <div class="right"></div>
                                </a>
                              </td>
                          </tr>
                      <?php $no++;}; ?>
                    <?php }; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="pagination-contain justify-content-center">
              <ul class="pagination pagination-danger">
                <li class="page-item">
                  <a class="page-link disabled" href="javascript:;" aria-label="Previous">
                    <span aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                  </a>
                </li>
                <li class="page-item disabled">
                  <a class="page-link" href="javascript:;">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="javascript:;" aria-label="Next">
                    <span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                  </a>
                </li> 
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- End Class Tampil Data -->
      <!-- Modal -->
      <div class="modal fade" id="ModalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Perhatian!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Yakin Untuk Menghapus data ?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <a href="#" type="button" class="btn btn-danger" id="delete_link">Hapus</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- End Content -->

    <!-- Footer -->
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-end">
                Copyright © 
                <a href="#" class="font-weight-">Laboratoium</a>
                <script>
                  document.write(new Date().getFullYear())
                </script>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/core/gsap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <script type="text/javascript">
        function confirm_modal(delete_url)
        {
        document.getElementById('delete_link').setAttribute('href' , delete_url);
        }
  </script>  
  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Script Button Kirim -->
  <script id="rendered-js">
        document.querySelectorAll('.button-kirim').forEach(button => {
        
          let getVar = variable => getComputedStyle(button).getPropertyValue(variable);
        
          button.addEventListener('click', e => {
        
            if (!button.classList.contains('active')) {
        
              button.classList.add('active');
        
              gsap.to(button, {
                keyframes: [{
                  '--left-wing-first-x': 50,
                  '--left-wing-first-y': 100,
                  '--right-wing-second-x': 50,
                  '--right-wing-second-y': 100,
                  duration: .2,
                  onComplete() {
                    gsap.set(button, {
                      '--left-wing-first-y': 0,
                      '--left-wing-second-x': 40,
                      '--left-wing-second-y': 100,
                      '--left-wing-third-x': 0,
                      '--left-wing-third-y': 100,
                      '--left-body-third-x': 40,
                      '--right-wing-first-x': 50,
                      '--right-wing-first-y': 0,
                      '--right-wing-second-x': 60,
                      '--right-wing-second-y': 100,
                      '--right-wing-third-x': 100,
                      '--right-wing-third-y': 100,
                      '--right-body-third-x': 60 });
        
                  } },
                {
                  '--left-wing-third-x': 20,
                  '--left-wing-third-y': 90,
                  '--left-wing-second-y': 90,
                  '--left-body-third-y': 90,
                  '--right-wing-third-x': 80,
                  '--right-wing-third-y': 90,
                  '--right-body-third-y': 90,
                  '--right-wing-second-y': 90,
                  duration: .2 },
                {
                  '--rotate': 50,
                  '--left-wing-third-y': 95,
                  '--left-wing-third-x': 27,
                  '--right-body-third-x': 45,
                  '--right-wing-second-x': 45,
                  '--right-wing-third-x': 60,
                  '--right-wing-third-y': 83,
                  duration: .25 },
                {
                  '--rotate': 55,
                  '--plane-x': -8,
                  '--plane-y': 24,
                  duration: .2 },
                {
                  '--rotate': 40,
                  '--plane-x': 45,
                  '--plane-y': -180,
                  '--plane-opacity': 0,
                  duration: .3,
                  onComplete() {
                    setTimeout(() => {
                      button.removeAttribute('style');
                      gsap.fromTo(button, {
                        opacity: 0,
                        y: -8 },
                      {
                        opacity: 1,
                        y: 0,
                        clearProps: true,
                        duration: .3,
                        onComplete() {
                          button.classList.remove('active');
                        } });
        
                    }, 2000);
                  } }] 
                });

              gsap.to(button, {
                keyframes: [{
                  '--text-opacity': 0,
                  '--border-radius': 0,
                  '--left-wing-background': getVar('--primary-darkest'),
                  '--right-wing-background': getVar('--primary-darkest'),
                  duration: .1 },
                {
                  '--left-wing-background': getVar('--primary'),
                  '--right-wing-background': getVar('--primary'),
                  duration: .1 },
                {
                  '--left-body-background': getVar('--primary-dark'),
                  '--right-body-background': getVar('--primary-darkest'),
                  duration: .4 },
                {
                  '--success-opacity': 1,
                  '--success-scale': 1,
                  duration: .25,
                  delay: .25 }] 
                });
            }
        
          });
        
        });
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/argon-dashboard.js"></script>
</body>

</html>