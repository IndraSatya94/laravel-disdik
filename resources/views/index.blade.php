@extends('layout/main')

@section ('home')
 <!-- ======= Hero Section ======= -->
 <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">DINAS PENDIDIKAN <br><span>KABUPATEN BOLAANG MONGONDOW</span></h2>
              <p class="animate__animated animate__fadeInUp">Kabupaten Bolaang Mongondow adalah kabupaten di provinsi Sulawesi Utara, Indonesia. Ibu kotanya adalah Lolak. Etnis Mayoritas di kabupaten ini adalah Suku Mongondow. Bahasa ibu penduduk asli di daerah ini adalah Bahasa Mongondow.</p>
              <a href="http://bolmongkab.go.id" class="btn-get-started animate__animated animate__fadeInUp scrollto">Selengkapnya...</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <!-- <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2> -->
              <p class="animate__animated animate__fadeInUp">Kabupaten Bolaang Mongondow ditetapkan pada tanggal 23 Maret 1954, terletak pada salah satu daerah Sulawesi Utara yang secara historis geografis adalah bekas danau, serta merupakan daerah subur penghasil utama tambang dan hasil bumi lainnya.</p>
              <a href="http://bolmongkab.go.id" class="btn-get-started animate__animated animate__fadeInUp scrollto">Selengkapnya...</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
          <div class="container">
    
            <div class="section-title">
              <h2>Tentang</h2>
              <p>DINAS PENDIDIKAN</p>
            </div>
            
            <div class="section-image">
              <div class="col-xl12">
                <img src="assets/img/disdikabout.jpg" class="img-fluid" alt="">
              </div>


            </div>

            <div class="row">
              <div class="col-xl-6 col-lg-7" data-aos="fade-right">
                <img src="assets/img/disdik1.jpg" class="img-fluid" alt="">
              </div>
              <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0">
                <h3 data-aos="fade-up">DISDIK Bolmong</h3>
                <hr>
                <p data-aos="fade-up">
                  Dinas Pendidikan Kabupaten Bolaang Mongondow adalah SKPD yang memiliki tanggung jawab dalam merencanakan, melaksanakan, mengawasi, mengevaluasi, dan membuat pertanggungjawaban tentang pelaksanaan tugas bidang pendidikan di lingkungan Pemerintahan Kabupaten Bolaang Mongondow. Sebagai sebuah organisasi, tercapainya visi dan misi Dinas Pendidikan Kabupaten Bolaang Mongondow ditentukan oleh kerjasama antara seluruh sistem organisasi, bidang, lini, staf, dan unit pelaksana teknis yang telah dibentuk berdasarkan tugas, pokok, dan fungsinya masing-masing.
                </p>
                <div class="read-more">
                  <a href="tugasfungsi.html">Tugas dan Fungsi</a>
                </div>
              </div>
            </div>
    
          </div>
        </section><!-- End About Section -->

        <section id="blue" class="testimonials">

          <div class="container" data-aos="fade-up">
    
            <div class="section-title">
              <h2>PENDIDIKAN</h2>
              <p>MENURUT PARA AHLI</p>
            </div>
    
            <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
              <div class="swiper-wrapper">
    
                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="profile mt-auto">
                      <img src="assets/img/pendidikan/mahmud.jpg" class="testimonial-img" alt="">
                      <h3>Prof. H. Mahmud Yunus</h3>
                    </div>
                    <p>
                      Pendidikan adalah usaha yang dipilih untuk membantu anak dalam meningatkan ilmu pengetahuan, jasmani dan akhlak. Sehingga, tujuan dan cita-cita anak bangsa dapat tercapai. Agar mendapatkan kehidupan yang bahagia dan apa yang dilakukannya bisa bermanfaat bagi diri sendiri, masyarakat, agama, bangsa dan negara.
                    </p>
                  </div>
                </div><!-- End testimonial item -->
    
                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="profile mt-auto">
                      <img src="assets/img/pendidikan/johndewey.jpg" class="testimonial-img" alt="">
                      <h3>Prof. Dr. John Dewey</h3>
                    </div>
                    <p>
                      pendidikan adalah sebuah proses pengalaman. Karena kehidupan adalah pertumbuhan, berarti pendidikan membantu untuk pertumbuhan manusia tanpa adanya batasan usia. Proses pertumbuhan merupakan proses penyesuaian setiap fase kehidupan dan menambah kemampuan seseorang melalui pendidikan.
                    </p>
                  </div>
                </div><!-- End testimonial item -->
    
                 <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="profile mt-auto">
                      <img src="assets/img/pendidikan/langeveld.jpg" class="testimonial-img" alt="">
                      <h3>M.J. Langeveld</h3>
                    </div>
                    <p>
                      Pendidikan adalah suatu upaya untuk membimbing manusia yang belum dewasa menuju kedewasaan. Pendidikan merupakan suatu usaha damam membantu seseorang untuk melakukan tugas hidupnya, mampu mandiri dan bertanggung jawab secara susila. Pendidikan juga suatu usaha untuk mencapai penentuan diri dan tanggung jawab.
                    </p>
                  </div>
                </div><!-- End testimonial item -->
    
                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="profile mt-auto">
                      <img src="assets/img/pendidikan/kihajardewantara.jpg" class="testimonial-img" alt="">
                      <h3>Ki Hajar Dewantara</h3>
                    </div>
                    <p>
                      Ki Hajar Dewantara menyatakan bahwa pendidikan merupakan suatu tuntutan hidup tumbuh kembangnya anak-anak. Maksudnya adalah penddidikan mengantarkan peserta didik untuk mencapai keselamatan dan kebahagiaan hidup yang setinggi-tingginya.
                    </p>
                  </div>
                </div><!-- End testimonial item -->
    
                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="profile mt-auto">
                      <img src="assets/img/pendidikan/Kohnstamm.jpg" class="testimonial-img" alt="">
                      <h3>Kohnstamm dan Gunning</h3>
                    </div>
                    <p>
                      Pendidikan adalah suatu upaya pembentukan hati nurani manusia, artinya adalah proses pembentukan dan penentuan diri yang sesuai dengan hati nurani manusia.
                    </p>
                  </div>
    
                </div><!-- End testimonial item -->
    
              </div>
              <div class="swiper-pagination"></div>
            </div>
    
          </div>
    
        </section><!-- End Testimonials Section -->


    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">
        <div class="section-title">
          <h2>Berita</h2>
          <p>Terbaru</p>
        </div>
        <div class="row">

          <div class="col-lg-3  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/berita/beritadisdik1.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="berita-detail.html">Dinas Pendidikan Bolmong Tindak Lanjuti Surat Edaran Mendikbud Terkait Batalnya Ujian Nasional.</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="berita-detail.html">admin</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="berita-detail.html"><time datetime="2020-01-01"> 26-03-2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Bolmong,- Pemerintah Kabupaten Bolaang Mongondow (Bolmong) Dinas Pendidikan akan segera menindaklanjuti Surat Edaran (SE) Menteri Pendidikan dan Kebudayaan (Mendikbud) Republik Indonesia.

                  Hal ini  terkait dengan dibatalkanya pelaksanaan ujian Nasional, akibat dampak Corona Virus Disease 19 (Covid-19).
                  <br><br>
                  Kepala Dinas Pendidikan Kabupaten Bolaang Mongondow Renti Mokoginta, SPd, MAP menyatakan akan segera menindaklanjuti Surat Edaran yang diterbitkan Mendikbud, Nadiem Makarim.

                  Renti menuturkan terkait dengan penangan Covid-19, Dinas Pendidikan Bolmong, telah terlebih dahulu mengambil langkah dengan meliburkan anak sekolah beserta dengan tenaga guru pengajar.
                  
                  “Dengan daring dan modul-modul  untuk siswa yang desa terpecil terkait, dengan kelulusan  kls 6 SD dan kls 9 SMP tetntu berdasarkan SE kemendikbud,” jelas Kadis Penddikan Bolmong.
                  <br><br>
                  Seperti diketahui, Tindak lanjut yang dilakukan Dinas Pendidikan Bolmong, berdasarkan dengan Surat Edaran Nomor 4 Tahun 2020, Tentang Pelaksanaan Kebijakan Pendidikan Dalam Masa Darurat Penyebaran Coronavirus Disease 19 (Covid-19)

                  Salah satu dalam Surat Edaran Kemendikbud adalah, Sehubungan dengan Ujian Nasional tahun 2020 yang dibatalkan, termasuk Uji Kompetensi Keahlian 2020 Bagi Sekolah Menengah Kejuruan (SMK)
                  
                  Dalam isi Surat Edaran itu juga tertuang, dengan dibatalkannya Ujian Nasional Tahun 2020, maka Keikutsertaan UN tidak menjadi syarat kelulusan atau seleksi masuk jenjang pendidikan lebih tinggi.
                </p>
                <div class="read-more">
                  <a href="berita-detail.html">Selengkapnya...</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

          <div class="col-lg-3  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/berita/beritadisdik2.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="berita-detail.html">Mulai Hari ini Guru – Guru di  Bolmong Selama Satu Minggu Bekerja Dari Rumah</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="berita-detail.html">admin</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="berita-detail.html"><time datetime="2020-01-01"> 23-03-2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Bolmong,- Pemerintah Kabupaten Bolaang Mongondow (Bolmong) Melalui Dinas Pendidikan (Disdik) Bolmong mengeluarkan surat imbauan kepada seluruh guru-guru agar tidak melakukan aktivitas di sekolah mulai Senin hari ini  23 maret sampai dengan 31 Maret 2020.

                  Hal  ini disampaikan oleh Kepala Dinas Pendidikan, Renty Mokoginta, Senin (23/3/2020).

                  Ia mengatakan, surat imbauan ini dikeluarkan dalam rangka mencegah wabah virus corona atau Covid 19.
                  <br><br>
                  Renty Menghimbau Semua guru dan tenaga kependidikan agar tidak lagi melaksanakan aktivitas di sekolah. Untuk koordinasi tugas pokok dan fungsi, silahkan setiap satuan pendidikan melaksanakan koordinasi melalui teknologi informasi yang tersedia.

                  Renty menambahkan, bahwa dalam satu minggu ini semuanya taat terhadap kebijakan pemerintah, yakni social distancing. “Jangan sudah diliburkan, tapi masih juga melaksanakan kegiatan di keramaian dan berkumpul dengan banyak orang. Ingat! Sementara ini jangan dulu ketempat-tempat keramaian, maupun keluar daerah,” imbaunya.
                  <br><br>
                  Khusus kepala sekolah dan koordinator wilayah (Korwil) kata Renty, agar berkoordinasi dengan puskesmas setempat untuk melaksanakan disinfektan. Karena Dinas Pendidikan telah menyurat ke Dinas Kesehatan untuk penyemprotan cairan disinfektan di setiap sekolah.

                  “Kepsek dan Korwil, agar segera melakukan koordinasi dengan Puskesmas setempat, untuk menindaklanjuti surat tersebut. Sehingga pada saat anak-anak mulai masuk sekolah, upaya pencegahan ini telah selesai dilaksanakan,” tegas Renty.
                  
                  Diketahui, sebelumnya Dinas Pendidikan Bolmong telah meliburkan siswa-siswi SD dan SMP dengan menerapkan sistem belajar dirumah sampai pada tanggal 31 Maret.
                </p>
                <div class="read-more">
                  <a href="berita-detail.html">Selengkapnya...</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

          <div class="col-lg-3  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/berita/beritadisdik3.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="berita-detail.html">Dinas Pendidikan Sosialisasi Pencairan Dana BOS 2020</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="berita-detail.html">admin</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="berita-detail.html"><time datetime="2020-01-01">17-06-2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Bolmong,- Pemerintah Kabupaten Bolaang Mongondow (Bolmong) melalui  Dinas Pendidikan Bolmong melakukan sosialisasi  Penyaluran dana Bantuan Operasional Sekolah (BOS) tahun 2020 ini.

                  Penyaluran dana Bantuan Operasional Sekolah (BOS) tahun 2020 ini  akan berbeda dengan tahun sebelumnya. Di mana,  Nomor Induk Siswa Nasional (NISN) menjadi salah satu indikator penyaluran dana BOS.
                  <br><br>
                  Hal itu telah disosialiasi Dinas Pendidikan Kabupaten Bolaang Mongondow (Bolmong)  terkait penyaluran dana BOS tahun 2020 yang dihadiri 69 Kepala Sekolah (Kepsek) tingkat SMP, pengawas Kecamatan dan dari Inspektorat daerah, di SMP Negeri 5 Lolak, pekan lalu.

                  “Salah satu yang harus dipenuhi setiap siswa harus mengantongi NISN. Kalau siswanya tidak mengantongi NISN, belum terhitung dalam penyalurannya,” ucap Kepala Bidang Pendidikan Dasar Dinas Pendidikan Bolmong Rivai Mokagow.
                  <br><br>
                  Rivai mengatakan, sosialisasi ini dilakukan untuk memberikan pemahaman terkait dengan tata cara penyaluran dana BOS dengan metode petunjuk dan teknis (Juknis) terbaru 2020. Ini dilakukan, karena mekanisme penyaluran mengalami perubahan dari sebelumnya.
                  “Dijuknis terbaru hanya dilakukan tiga kali penyaluran saja. Sesuai dengan Permen yang baru dikeluarkan. Penyalurannya langsung dari pemerintah pusat ke rekening sekolah melalui KPPN,” jelas Rivai.
                  <br><br>
                  Susasan Sosialisasi Penyaluran Dana BOS yang dihadiri para kepala Sekolah, Pengawas dan pihak Inspektorat

                  Terpisah,  Kepala Dinas Pendidikan Renti Mokoginta menghimbau kepada kepala-kepala sekolah agar dalam penggunaan dana BOS dapat dimanfaatkan dengan baik sesuai dengan peruntukannya. Terlebih, dalam Juknis terbaru ini, benar-benar selektif dan harus taat aturan dan taat asas.
                  “Banyak-banyak melakukan koordinasi dengan inspektorat. Supaya dalam penggunaannya, tidak menyalahi aturan yang ditetapkan,” tegas Renti.
                  <br><br>
                  Sosialisasi dana BOS ini akan dilaksanakan dalam dua tahap. Tahap berikutnya akan dilaksanakan dengan menghadirkan para kepala sekolah tingkat Sekolah Dasar (SD). Hal ini dilakukan, agar para kepala sekolah dapat mengetahui mekanisme dan alur serta penggunaan dana BOS tahun 2020.
                  “Kita perkirakan setelah sosialisasi juknis BOS ini, baru dana BOS disalurkan ke rekening setiap sekolah,” tuturnya.

                  Pada tahun ini penyaluran dana BOS untuk SD berjumlah 900 ribu rupiah sedangkan SMP berjumlah 1.1 juta rupiah.
                </p>
                <div class="read-more">
                  <a href="berita-detail.html">Selengkapnya...</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

          <div class="col-lg-3  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/berita/beritadisdik4.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="berita-detail.html">Dinas Pendidkan Bolmong Gelar Kompetisi Siswa Nasional Tingkat Kabupaten</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="berita-detail.html">admin</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="berita-detail.html"><time datetime="2020-01-01">12-03-2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Bolmong,- Pemerintah Kabupaten Bolaang Mongondow (bolmong) melalui Dinas Pendidikan Kabupaten Bolaang Mongondow (Bolmong) resmi membuka kegiatan Kompetisi Siswa Nasional tingkat Kabupaten,

                  Kegiatan ini dibuka langsung oleh kepala Dinas Pendidikan Bolmong , Renty Mokoginta, Kamis (12/03/2020).

                  Pelaksanaan yang dipusatkan di SDN 1 Mongkoinit Kecamatan Lolak tersebut di ikuti oleh perwakilan Sekolah Dasar (SD) yang berhasil lolos pada Kompetisi Siswa Nasional tingkat Kecamatan.

                  <br/><br/>
                  Kadis Pendidikan Bolmong, Renty Mokoginta, menyampaikan, bahwa kompetisi siswa ini merupakan program dari Kementerian Pendidikan, yang dilaksanakan mulai dari tingkat Kecamatan, Kabupaten, Provinsi hingga ke tingkat Nasional.

                  “Setiap Sekolah mengutus tiga orang siswa yang menjuarai kompetisi tingkat Kecamatan, yakni pemenang juara 1, 2 dan 3, untuk mengikuti seleksi mata pelajaran Matematika dan IPA,” ujar Renty.
                  
                  Renty mengatakan, hasil seleksi tingkat Kabupaten akan mewakili Bolmong ke tingkat Provinsi. Ia berharap, kompetisi siswa nasional tahun 2020 ini akan melahirkan siswa siswi berprestasi yang mampu bersaing di tingkat Provinsi maupun ke tingkat Nasional.

                  <br><br>
                  Sementara itu, kepala bidang Pendidikan Dasar Abdulrivai Mokoagow, menambahkan, untuk soal seleksi mata pelajaran Matematika dan IPA tingkat Kabupaten, dikirim langsung dari pihak Kementerian Pendidikan dan Kebudayaan RI.

                  dikirim langsung oleh kementerian pendidikan dan kebudayaan, ke masing-masing Kabupaten melalui Diknas Provinsi,” tambah Rivai.

                </p>
                <div class="read-more">
                  <a href="berita-detail.html">Selengkapnya...</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

        </div>

        <div class="blog-pagination" data-aos="fade-up">
          <ul class="justify-content-center">
            <li class="disabled"><i class="icofont-rounded-left"></i></li>
            <li><a href="berita.html">Lainnya</a></li>
          </ul>
        </div>

      </div>
    </section><!-- End Blog Section -->

    <section id="blue" class="services">
      <div class="container">

        <div class="section-title">
          <h2>PENDIDIKAN</h2>
          <p>TUJUAN PENDIDIKAN</p>
        </div>

        <div class="row">
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="icofont-ebook"></i>
              <h4>Berdasarkan UU No. 2 Tahun 1985</h4>
              <p>yang berbunyi bahwa tujuan pendidikan yaitu mencerdaskan kehidupan bangsadan mengembangkan manusia yang seutuhnya yaitu yang beriman dan bertakwa kepada Tuhan Yang Maha Esa dan berbudi pekerti luhur, memiliki pengetahuan dan keterampilan, kesehatan jasmani dan rohani, kepribadian yang mantap dan mandiri serta rasa tanggung jawab kemasyarakatan bangsa.</P>
              </div>
          </div>

          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="icofont-law-document"></i>
              <h4>Berdasarkan MPRS No. 2 Tahun 1960</h4>
              <p>bahwa tujuan pendidikan adalah membentuk pancasilais sejati berdasarkan ketentuan-ketentuan yang dikehendaki oleh pembukaan UUD 1945 dan isi UUD 945.</p>
            </div>
          </div>

          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="icofont-ebook"></i>
              <h4>Berdasarkan UUD 1945 (versi Amandemen)</h4>
              <p>“Pemerintah mengusahakan dan menyelenggarakan satu sistem pendidikan nasional, yang meningkatkan keimanan dan ketakwaan serta ahlak mulia dalam rangka mencerdaskan kehidupan bangsa, yang diatur dengan undang-undang.” 2) Pasal 31, ayat 5 menyebutkan, “Pemerintah memajukan ilmu pengetahuan dan teknologi dengan menunjang tinggi nilai-nilai agama dan persatuan bangsa untuk kemajuan peradaban serta kesejahteraan umat manusia.”</P>
              </div>
          </div>

          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="icofont-law-document"></i>
              <h4>Berdasarkan UU. No.20 Tahun 2003</h4>
              <p>mengenai Sistem Pendidikan Nasional dalam pasal 3, bahwa tujuan pendidikan nasional adalah mengembangkan potensi peserta didik agar menjadi manusia yang beriman dan bertakwa kepada Tuhan Yang Maha Esa, berakhlak mulia, sehat, berilmu, cakap, kreatif, mandiri, dan menjadi warga negara yang demokratis serta bertanggung jawab.</p>
            </div>
          </div>

          </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>DOKUMENTASI</h2>
          <p>FOTO DAN VIDEO</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-foto">Foto</li>
              <li data-filter=".filter-video">Video</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-foto">
            <div class="portfolio-wrap">
              <img src="assets/img/berita/beritadisdik1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>foto</h4>
                <p>1</p>
                <div class="portfolio-links">
                  <a href="assets/img/berita/beritadisdik1.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>
    
          <div class="col-lg-4 col-md-6 portfolio-item filter-foto">
            <div class="portfolio-wrap">
              <img src="assets/img/berita/beritadisdik2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Foto</h4>
                <p>2</p>
                <div class="portfolio-links">
                  <a href="assets/img/berita/beritadisdik2.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>
    
          <div class="col-lg-4 col-md-6 portfolio-item filter-foto">
            <div class="portfolio-wrap">
              <img src="assets/img/berita/beritadisdik3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>foto</h4>
                <p>3</p>
                <div class="portfolio-links">
                  <a href="assets/img/berita/beritadisdik3.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>
    
          <div class="col-lg-4 col-md-6 portfolio-item filter-foto">
            <div class="portfolio-wrap">
              <img src="assets/img/berita/beritadisdik4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>foto</h4>
                <p>3</p>
                <div class="portfolio-links">
                  <a href="assets/img/berita/beritadisdik4.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  @endsection