<?php
  include 'header.php';
  require_once 'includes/dbh.inc.php';
?>

    <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">RS AAA<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php#about">Facility</a></li>
          
          <li class="active"><a href="index.php#services">Services</a>
          </li>
          <li><a href="index.php#testimonials">Testimonials</a></li>
          <li><a href="index.php#portofolio">Artikel</a></li>
          <li><a href="index.php#contact">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
    
    

  <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title" style="margin-top: 100px;">
          
          <h3>Our Medical <span>Checkup</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row" style="margin-top: 50px;">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/checkup.jpg" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
                <h4>Woman Silver Packet</h4>
                <span>Pemeriksaan mendasar/basic yang harus secara rutin diperiksa meliputi, 
                darah lengkap, fungsi hati, fungsi ginjal, asam urat, gula darah, jantung, 
                paru-paru</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/checkup-anak.jpg" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
                <h4>Children Packet</h4>
                <span>Pemeriksaan pada anak-anak yang meliputi, mata, telinga
                hidung, mulut, pencernaan, nutrisi, dan saluran kemih untuk
                mendeteksi gejala penyimpangan sedini mungkin</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/checkup.jpg" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
                <h4>Woman Gold Packet</h4>
                <span>Pemeriksaan komprehensif meliputi, darah lengkap, 
                fungsi hati, fungsi ginjal, asam urat, gula darah, jantung, 
                paru-paru. Paket ini juga meliputi pemeriksaan jantung lengkap, 
                HbA1c (rata-rata gula darah 3 bulan terakhir), 
                skrining Hepatitis C, penanda tumor, dan evaluasi fungsi tiroid.</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/checkup-men1.jpg" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
                <h4>Men Silver Packet</h4>
                <span>Pemeriksaan mendasar/basic yang harus secara rutin diperiksa meliputi, 
                darah lengkap, fungsi hati, fungsi ginjal, asam urat, gula darah, jantung, 
                paru-paru</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/covid2.jpeg" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
                <h4>Covid-19 Checkup</h4>
                <span>Pemeriksaan khusus untuk mendeteksi adanya virus covid-19
                pada tubuh dengan metode rapid maupun swab, termasuk penyediaan
                surat bebas covid setelah hasil didapatkan</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/checkup-men1.jpg" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
                <h4>Men Gold Packet</h4>
                <span>Pemeriksaan komprehensif meliputi, darah lengkap, 
                fungsi hati, fungsi ginjal, asam urat, gula darah, jantung, 
                paru-paru. Paket ini juga meliputi pemeriksaan jantung lengkap, 
                HbA1c (rata-rata gula darah 3 bulan terakhir), 
                skrining Hepatitis C, penanda tumor, dan evaluasi fungsi tiroid.</span>
              </div>
            </div>
          </div>

          <div class="col-lg-12 col-md-6" style="margin-top: 100px;">
                        <div class="card" style="border: 0px;">
                            <div class="card-body" style="outline: none;">

                                    <?php
                                        if(!isset($_SESSION['idUser'])) {
                                            echo "<p style='color: red;'>Harap login terlebih dahulu</p>";
                                        } else {
                                    ?>
                                
                                        <form action="includes/checkup.inc.php" method="post" class="form-horizontal form-material">
                                        
                                        <div class="form-group">
                                            <label class="col-sm-12 mb-0">Pilih Paket</label>
                                            <div class="col-sm-12">
                                                <select class="form-control pl-2 pr-2 mt-2 form-control-line" name="paket" required>
                                                    
                                                    <option>Woman Silver Packet</option>
                                                    <option>Woman Gold Packet</option>
                                                    <option>Men Silver Packet</option>
                                                    <option>Men Gold Packet</option>
                                                    <option>Children Packet</option>
                                                    <option>Covid-19 Checkup</option>
                                                
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-md-12 mb-0">Tanggal</label>
                                            
                                            <div class="col-md-12">
                                                <input type="date" class="form-control pl-2 mt-2 form-control-line" name="tanggal" required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 mb-0">Pesan</label>
                                            <div class="col-md-12">
                                                <textarea rows="5" class="form-control pl-2 mt-2 form-control-line" name="pesan"></textarea>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <div class="col-sm-12 d-flex">
                                                <button type="submit" name="submit" class="btn btn-success mx-auto mx-md-0 text-white">Daftar Paket
                                                    </button>
                                            </div>
                                        </div>
                                    </form>
                                <?php
                                        }
                                ?>
                            </div>
                        </div>
                    </div>


        </div>

        

      </div>
    </section><!-- End Team Section -->

    
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
