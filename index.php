<?php 
  require_once("./admin/proses/uservalidation.php"); 
  $keterangan = $_SESSION["keterangan"];
  $username = $_SESSION["username"];
  $nama = $_SESSION["nama"];
  if($keterangan != "1") {
    header("Location: ./admin/proses/configuser.php");
  }
  
?>

<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- color of address bar in mobile browser -->
  <!-- <meta name="theme-color" content="#2B2B35"> -->
  <!-- favicon  -->
  <link rel="shortcut icon" href="img/thumbnail.ico" type="image/x-icon">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/plugins/bootstrap.min.css">
  <!-- font awesome css -->
  <link rel="stylesheet" href="css/plugins/font-awesome.min.css">
  <!-- swiper css -->
  <link rel="stylesheet" href="css/plugins/swiper.min.css">
  <!-- fancybox css -->
  <link rel="stylesheet" href="css/plugins/fancybox.min.css">
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css">

  <title>Client Side LAB</title>
</head>

<body>

  <!-- app -->
  <div class="art-app art-app-onepage">

    <!-- mobile top bar -->
    <div class="art-mobile-top-bar"></div>

    <!-- app wrapper -->
    <div class="art-app-wrapper">

      <!-- app container end -->
      <div class="art-app-container">

        <!-- info bar -->
        <div class="art-info-bar">

          <!-- menu bar frame -->
          <div class="art-info-bar-frame">

            <!-- info bar header -->
            <div class="art-info-bar-header">
              <!-- info bar button -->
              <a class="art-info-bar-btn" href="#.">
                <!-- icon -->
                <i class="fas fa-ellipsis-v"></i>
              </a>
              <!-- info bar button end -->
            </div>
            <!-- info bar header end -->

            <!-- info bar header -->
            <div class="art-header">
              <!-- avatar -->
              <div class="art-avatar">
                <a data-fancybox="avatar" href="img/profile-pic.png" class="art-avatar-curtain">
                  <img src="img/profile-pic.png" alt="avatar">
                  <i class="fas fa-expand"></i>
                </a>
                <!-- available -->
                <div class="art-lamp-light">
                  <!-- add class 'art-not-available' if not available-->
                  <div class="art-available-lamp"></div>
                </div>
              </div>
              <!-- avatar end -->
              <!-- name -->
              <h5 class="art-name mb-10">Lili</h5>
              <!-- post -->
              <div class="art-sm-text">Pasien Laboratorium <br>Dalam Pantauan, </div>
            </div>
            <!-- info bar header end -->

            <!-- scroll frame -->
            <div id="scrollbar2" class="art-scroll-frame">

              <!-- info bar about -->
              <div class="art-table p-15-15">
                <!-- about text -->
                <ul>
                  <!-- country -->
                  <li>
                    <h6>No. Telp:</h6><span>0000000</span>
                  </li>
                  <!-- city -->
                  <li>
                    <h6>Email:</h6><span>lili@gmail.com</span>
                  </li>
                  <!-- age -->
                  <li>
                    <h6>Jenis Kelamin:</h6><span>Perempuan</span>
                  </li>
                  <li>
                    <h6>Tanggal Lahir:</h6><span>17/18/2022</span>
                  </li>
                </ul>
              </div>
              <!-- info bar about end -->

              <!-- divider -->
              <div class="art-ls-divider"></div>

              <!-- divider -->
              <div class="art-ls-divider"></div>

              <!-- hard skills -->
              <div class="art-hard-skills p-30-15">

                <!-- skill -->
                <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>Progress Yang Sudah Selesai</h6>
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog1"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

              </div>
              <!-- language skills end -->

              <!-- divider -->
              <div class="art-ls-divider"></div>

              <!-- knowledge list -->
              <ul class="art-knowledge-list p-15-0">
                <!-- list item -->
                <li>Gula Darah Puasa</li>
                <!-- list item -->
                <li>Pemeriksaan Profil Lipid</li>
                <!-- list item -->
                <li>Pemeriksaan Urine Lengkap</li>
              </ul>
              <!-- knowledge list end -->

              <!-- divider -->
              <div class="art-ls-divider"></div>

            </div>
            <!-- scroll frame end -->

            <!-- sidebar social -->
            <div class="art-ls-social">
              <!-- social link -->
              <a href="#."><i class="far fa-circle"></i></a>
              <!-- social link -->
              <!-- social link -->
              <a href="./admin/proses/proses-logout.php" class="logout">LOGOUT <i class="fas fa-sign-out-alt"></i></a>
              <!-- social link -->
              <!-- social link -->
              <a href="#."><i class="far fa-circle"></i></a>
            </div>
            <!-- sidebar social end -->

          </div>
          <!-- menu bar frame end -->

        </div>
        <!-- info bar end -->

        <!-- content -->
        <div class="art-content">

          <!-- curtain -->
          <div class="art-curtain"></div>

          <!-- top background -->
          <div class="art-top-bg">
            <!-- overlay -->
            <div class="art-top-bg-overlay"></div>
            <!-- overlay end -->
          </div>
          <!-- top background end -->

          <!-- swup container -->
          <div class="transition-fade" id="swup">

            <!-- scroll frame -->
            <div id="scrollbar" class="art-scroll-frame">

              <!-- container -->
              <div class="container-fluid">

                <!-- row -->
                <div class="row p-60-0 p-lg-30-0 p-md-15-0">
                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- banner -->
                    <div class="art-a art-banner" style="background-image: url(img/bg-lab.png)">
                      <!-- banner back -->
                      <div class="art-banner-back"></div>
                      <!-- banner dec -->
                      <div class="art-banner-dec"></div>
                      <!-- banner overlay -->
                      <div class="art-banner-overlay">
                        <!-- main title -->
                        <div class="art-banner-title">
                          <!-- title -->
                          <h1 class="mb-15">Hallo, Lili</h1>
                          <h4 class="mb-15" style="color: white;">We Help people, like you.</h4>
                          <!-- suptitle -->
                          <div class="art-lg-text art-code mb-25"><i>Melayani</i> Pasien <span class="txt-rotate"
                              data-period="2000"
                              data-rotate='[ "Penderita Kolesterol", "Penderita Diabetes", "untuk pemeriksaan darah", "Cek urine" ]'></span>
                          </div>
                          <div class="art-buttons-frame">
                            <!-- button -->
                            <a href="#." class="art-btn art-btn-md"><span>Explore now</span></a>
                            <!-- button -->
                          </div>
                        </div>
                        <!-- main title end -->
                        <!-- photo -->
                        <img src="img/face-2.png" class="art-banner-photo" alt="Your Name">
                      </div>
                      <!-- banner overlay end -->
                    </div>
                    <!-- banner end -->

                  </div>
                  <!-- col end -->
                </div>
                <!-- row end -->

              </div>
              <!-- container end -->

              <!-- container -->
              <div class="container-fluid">

                <!-- row -->
                <div class="row p-30-0">

                  <!-- col -->

                </div>
                <!-- row end -->

              </div>
              <!-- container end -->

              <!-- container -->
              <div class="container-fluid">

                <!-- row -->
                <div class="row">

                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- section title -->
                    <div class="art-section-title">
                      <!-- title frame -->
                      <div class="art-title-frame">
                        <!-- title -->
                        <h4>Catatan Sebelum Pemeriksaan Laboratorium</h4>
                      </div>
                      <!-- title frame end -->
                    </div>
                    <!-- section title end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-4 col-md-6">

                    <!-- service -->
                    <div class="art-a art-service-icon-box">
                      <!-- service content -->
                      <div class="art-service-ib-content">
                        <!-- title -->
                        <h5 class="mb-15">Gula Darah Puasa</h5>
                        <!-- text -->
                        <div class="mb-15">Apakah anda akan melakukan pemeriksaan laboratorium? jangan lupa puasa selama
                          <span style="font-weight: 600;">10 - 12 jam</span> ya</div>
                        <!-- button -->
                        <div class="art-buttons-frame"><a href="#." class="art-link art-color-link art-w-chevron">Tandai
                            Sudah Selesai</a></div>
                      </div>
                      <!-- service content end -->
                    </div>
                    <!-- service end -->
                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-4 col-md-6">

                    <!-- service -->
                    <div class="art-a art-service-icon-box">
                      <!-- service content -->
                      <div class="art-service-ib-content">
                        <!-- title -->
                        <h5 class="mb-15">Pemeriksaan Profil Lipid</h5>
                        <!-- text -->
                        <div class="mb-15">Anda akan melakukan pemeriksaan Kolesterol, Trigliserida, HDL atau LDL? <br>
                          Sudahkah anda berpuasa selama <span style="font-weight: 600;">10 - 12 jam</span> ?</div>
                        <!-- button -->
                        <div class="art-buttons-frame"><a href="#." class="art-link art-color-link art-w-chevron">Tandai
                            Sudah Selesai</a></div>
                      </div>
                      <!-- service content end -->
                    </div>
                    <!-- service end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-4 col-md-6">

                    <!-- service -->
                    <div class="art-a art-service-icon-box">
                      <!-- service content -->
                      <div class="art-service-ib-content">
                        <!-- title -->
                        <h5 class="mb-15">Pemeriksaan Urine Lengkap</h5>
                        <!-- text -->
                        <div class="mb-15">Apakah anda akan melakukan pemeriksaan urine Lengkap ? dianjurkan jangan
                          konsumsi obat - obatan terlebih dahulu ya</div>
                        <!-- button -->
                        <div class="art-buttons-frame"><a href="#." class="art-link art-color-link art-w-chevron">Tandai
                            Sudah Selesai</a></div>
                      </div>
                      <!-- service content end -->
                    </div>
                    <!-- service end -->

                  </div>
                  <!-- col end -->
                </div>
                <!-- row end -->
                <hr>
              </div>
              <!-- container end -->

              <!-- container -->
              <div class="container-fluid">

                <!-- row -->
                <div class="row">

                  <!-- col -->
                  <div class="card-content">
                    <h5 class="head-title">GULA DARAH PUASA</h5>
                    <p class="subhead-title">1. Puasa selama 10 – 12 jam<br>
                      2. Tidak boleh minum minuman berasa, kecuali air putih tawar <br>
                      3. Tidak minum obat selama 24 jam sebelum pengambilan spesimen <br>
                      4. Apabila pemberian obat tidak memungkinkan untuk dihentikan, harus diinformasikan kepada petugas
                      laboratorium <br>
                      5. Hindari aktivitas berlebih sebelum pengambilan spesimen <br>
                      6. Dianjurkan untuk duduk tenang sekurang-kurangnya 15 menit sebelum pengambilan specimen <br>
                      7. Jangan lupa besok ke klinik saat kondisi basal tubuh, antara pukul 08.00 – 09.00 ya
                    </p>
                    <h5 class="head-title">Sumber</h5>
                    <p class="subhead-title">Departemen Kesehatan Republik Indonesia, 2013, Peraturan Menteri Kesehatan
                      Republik Indonesia Nomor 43 Tahun 2013 tentang Cara Penyelenggaraan Laboratorium Klinik yang baik.
                      <br> <a
                        href="http://labcito.co.id/wp-content/uploads/2015/ref/ref/PMK_No_43_ttg_Penyelenggaraan_Laboratorium_Klinik_Yang_Baik.pdf."
                        style="font-style: italic; color:deepskyblue; margin-top: 20px;">Lihat
                        Sumber Selengkapnya</a> <br>
                      Siregar, Maria Tuntun dkk, 2018, Bahan Ajar Teknologi Laboratorium Medik (TLM) Kendali Mutu, Edisi
                      tahun 2018, Jakarta.
                    </p>
                  </div>
                  <!-- col end -->
                  <div class="card-content">
                    <h5 class="head-title">KOLESTEROL</h5>
                    <p class="subhead-title">1. Puasa selama 10 – 12 jam <br>
                      2. Tidak boleh minum minuman berasa, kecuali air putih tawar <br>
                      3. Tidak minum obat selama 24 jam sebelum pengambilan spesimen <br>
                      4. Apabila pemberian obat tidak memungkinkan untuk dihentikan, harus diinformasikan kepada petugas
                      laboratorium <br>
                      5. Hindari aktivitas berlebih dan merokok sebelum pengambilan spesimen <br>
                      6. Dianjurkan untuk duduk tenang sekurang-kurangnya 15 menit sebelum pengambilan spesimen <br>
                      7. Jangan lupa besok ke klinik saat kondisi basal tubuh, antara pukul 08.00 – 09.00 ya
                    </p>
                    <h5 class="head-title">Sumber</h5>
                    <p class="subhead-title">Departemen Kesehatan Republik Indonesia, 2013, Peraturan Menteri Kesehatan
                      Republik Indonesia Nomor 43 Tahun 2013 tentang Cara Penyelenggaraan Laboratorium Klinik yang baik.
                      <br> <a
                        href="http://labcito.co.id/wp-content/uploads/2015/ref/ref/PMK_No_43_ttg_Penyelenggaraan_Laboratorium_Klinik_Yang_Baik.pdf."
                        style="font-style: italic; color:deepskyblue; margin-top: 20px;">Lihat
                        Sumber Selengkapnya</a> <br>
                      Siregar, Maria Tuntun dkk, 2018, Bahan Ajar Teknologi Laboratorium Medik (TLM) Kendali Mutu, Edisi
                      tahun 2018, Jakarta.
                    </p>
                  </div>
                  <div class="card-content">
                    <h5 class="head-title">TRIGLISERIDA</h5>
                    <p class="subhead-title">1. Puasa selama 12 jam <br>
                      2. Tidak boleh minum minuman berasa, kecuali air putih tawar <br>
                      3. Tidak minum obat selama 24 jam sebelum pengambilan spesimen <br>
                      4. Apabila pemberian obat tidak memungkinkan untuk dihentikan, harus diinformasikan kepada petugas
                      laboratorium <br>
                      5. Hindari aktivitas berlebih, konsumsi alkohol dan merokok sebelum pengambilan spesimen <br>
                      6. Dianjurkan untuk duduk tenang sekurang-kurangnya 15 menit sebelum pengambilan spesimen <br>
                      7. Jangan lupa besok ke klinik saat kondisi basal tubuh, antara pukul 08.00 – 09.00 ya
                    </p>
                    <h5 class="head-title">Sumber</h5>
                    <p class="subhead-title">Departemen Kesehatan Republik Indonesia, 2013, Peraturan Menteri Kesehatan
                      Republik Indonesia Nomor 43 Tahun 2013 tentang Cara Penyelenggaraan Laboratorium Klinik yang baik.
                      <br> <a
                        href="http://labcito.co.id/wp-content/uploads/2015/ref/ref/PMK_No_43_ttg_Penyelenggaraan_Laboratorium_Klinik_Yang_Baik.pdf."
                        style="font-style: italic; color:deepskyblue; margin-top: 20px;">Lihat
                        Sumber Selengkapnya</a> <br>
                      Siregar, Maria Tuntun dkk, 2018, Bahan Ajar Teknologi Laboratorium Medik (TLM) Kendali Mutu, Edisi
                      tahun 2018, Jakarta.
                    </p>
                  </div>
                  <div class="card-content">
                    <h5 class="head-title">URINE TERLENGKAP</h5>
                    <p class="subhead-title">1. Tidak minum obat selama 72 jam sebelum pengambilan spesimen <br>
                      2. Dianjurkan untuk melakukan pengambilan spesimen saat kondisi basal tubuh, antara pukul 08.00 –
                      09.00 <br>
                      3. Cara Pengambilan Spesimen Urine: <br> Cuci tangan 7 langkah -> Bilas alat kelamin dengan air
                      kemudian keringkan dengan tissue -> Keluarkan urine, aliran yang pertama keluar dibuang -> Aliran
                      selanjutnya ditampung dalam wadar steril dari laboratorium sampai batas yang telah ditentukan ->
                      Aliran sisanya dibuang -> Tutup wadah dengan rapat -> Berikan spesimen ke Petugas Laboratorium
                    </p>
                    <h5 class="head-title">Sumber</h5>
                    <p class="subhead-title">Departemen Kesehatan Republik Indonesia, 2013, Peraturan Menteri Kesehatan
                      Republik Indonesia Nomor 43 Tahun 2013 tentang Cara Penyelenggaraan Laboratorium Klinik yang baik.
                      <br> <a
                        href="http://labcito.co.id/wp-content/uploads/2015/ref/ref/PMK_No_43_ttg_Penyelenggaraan_Laboratorium_Klinik_Yang_Baik.pdf."
                        style="font-style: italic; color:deepskyblue; margin-top: 20px;">Lihat
                        Sumber Selengkapnya</a> <br>
                      Siregar, Maria Tuntun dkk, 2018, Bahan Ajar Teknologi Laboratorium Medik (TLM) Kendali Mutu, Edisi
                      tahun 2018, Jakarta.
                    </p>
                  </div>

                </div>
                <!-- row end -->

              </div>
              <!-- container end -->

              <!-- container -->
              <div class="container-fluid">

                <!-- footer -->
                <footer>
                  <!-- copyright -->
                  <!-- <div>© 2020 Artur Carter</div> -->
                  <div>© 2022 Laboratoium </div>
                  <!-- author ( Please! Do not delete it. You are awesome! :) -->
                  <!-- <div>Template author:&#160; <a href="https://themeforest.net/user/millerdigitaldesign"
                      target="_blank">Nazar Miller</a></div> -->
                </footer>
                <!-- footer end -->

              </div>
              <!-- container end -->

            </div>
            <!-- scroll frame end -->

          </div>
          <!-- swup container end -->

        </div>
        <!-- content end -->

      </div>
      <!-- app container end -->

    </div>
    <!-- app wrapper end -->

    <!-- preloader -->
    <div class="art-preloader">
      <!-- preloader content -->
      <div class="art-preloader-content">
        <!-- title -->
        <h4 class="load-title">Client Akses LAB</h4> <!-- progressbar -->
        <div id="preloader" class="art-preloader-load"></div>
      </div>
      <!-- preloader content end -->
    </div>
    <!-- preloader end -->

  </div>
  <!-- app end -->
  <div id="swupMenu"></div>

  <!-- jquery js -->
  <script src="js/plugins/jquery.min.js"></script>
  <!-- anime js -->
  <script src="js/plugins/anime.min.js"></script>
  <!-- swiper js -->
  <script src="js/plugins/swiper.min.js"></script>
  <!-- progressbar js -->
  <script src="js/plugins/progressbar.min.js"></script>
  <!-- smooth scrollbar js -->
  <script src="js/plugins/smooth-scrollbar.min.js"></script>
  <!-- overscroll js -->
  <script src="js/plugins/overscroll.min.js"></script>
  <!-- typing js -->
  <script src="js/plugins/typing.min.js"></script>
  <!-- isotope js -->
  <script src="js/plugins/isotope.min.js"></script>
  <!-- fancybox js -->
  <script src="js/plugins/fancybox.min.js"></script>
  <!-- swup js -->
  <script src="js/plugins/swup.min.js"></script>

  <!-- main js -->
  <script src="js/main.js"></script>

</body>

</html>