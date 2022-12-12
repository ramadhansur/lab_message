<?php 
  require_once("./proses/uservalidation.php"); 
  $keterangan = $_SESSION["keterangan"];
  require_once("./proses/authuser.php");
  
  include './proses/koneksi.php';

  $drop_pemeriksaan = "SELECT * FROM tb_pesan ORDER BY id ASC";
  $data_pemeriksaan = mysqli_query($koneksi, $drop_pemeriksaan);
 
?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./img/mbacit-logo-2.png">
  <link rel="icon" type="image/png" href="./img/mbacit-logo-2.png">
  <title>
    Data Pasien - Admin Control
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
  <p class="font-weight-bolder text-blue page-title-bg">Data Pasien</p>
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
            <a class="nav-link active justify-content-center" href="data-pasien.php">
              <span class="active-custom">Data Pasien</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link justify-content-center" href="data-pesan.php">
              <span class="text-item-custom">Data Pesan Pasien</span>
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
          <p class="font-weight-bolder text-blue page-title">Tambah Pasien</p>
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
      <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <div class="card mb-4 p-4">
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0 ">
                  <form action="./proses/proses-tambah-pasien.php" method="post">
                    <h4 class="nama-head text-blue ms-0">Nama Lengkap</h4>
                    <input class="form-control mb-3" type="text" name="nama" autocomplete="off">
                    <h4 class="nama-head text-blue ms-0">Email</h4>
                    <input class="form-control mb-3" type="email" name="email" autocomplete="off">
                    <h4 class="nama-head text-blue ms-0">No WA</h4>
                    <input class="form-control mb-3" type="text" name="notelp" required autocomplete="off">
                    <h4 class="nama-head text-blue ms-0">Jenis Kelamin</h4>
                    <div class="mb-3">
                      <select name="jeniskelamin" id="" class="form-select">
                        <option value="-">Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                        <option value="Tidak Disebutkan">Tidak Disebutkan</option>
                      </select>
                    </div>
                    <h4 class="nama-head text-blue ms-0">Pilih Pemeriksaan</h4>
                    <div class="item row row-cols-auto">
                      <?php 
                        while($d = mysqli_fetch_array($data_pemeriksaan)){
                      ?>
                        <div class="checkbox-rect col mt-3">
                          <input type="checkbox" id="<?php echo $d['pemeriksaan'] ?>" name="pemeriksaan[]" value="<?php echo $d['pemeriksaan'] ?>">
                          <label for="<?php echo $d['pemeriksaan'] ?>"><?php echo $d['pemeriksaan'] ?></label>
                        </div>
                      <?php } ?>
                    </div>
                    <div class="btn-form-container">
                      <button class="btn-cancel-dokter">Batal</button>
                      <button type="submit" class="btn-tambah-dokter" name="simpan-dokter">Simpan</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Class Tampil Data -->
    <!-- End Content -->

    <!-- Footer -->
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-end">
                Copyright © 
                <a href="#" class="font-weight-lighter" align="center">Laboratorium.</a>
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
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>
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
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/argon-dashboard.js"></script>
</body>

</html><!--  -->