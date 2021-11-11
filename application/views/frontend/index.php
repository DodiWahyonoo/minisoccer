<!-- Hero Area Start -->
<div id="hero-area" class="hero-area section">
    <!-- Hero Slider Start -->
    <div class="hero-slider">
        <!-- Single Hero Item --> 
        <div class="hero-item">
            <!-- Hero Slider Image -->
            <img src="<?= base_url('assets') ?>/img/hero/1.jpg" alt="">
            <div class="container">
                <div class="row">
                    <!-- Hero Slider Content -->
                    <div class="hero-content col-md-10 col-xs-12">
                        <h1>Apa itu <span>Indosoccernesia ?</span></h1>
                        <p>Indosoccernesia merupakan Lapangan mini soccer dengan fasilitas premium bagi Anda para penggila sepak bola. Lapangan mini soccer ini dibangun dengan luas lebih dari 1800 m2 dan berada di sebuah tempat yang strategis dan terjangkau.<br><br>Fasilitas yang ditawarkan pun tidak main-main. Rumput yang digunakan dalam lapangan adalah rumput sintetis standard FIFA dengan grade-A dari Italia. Setelah bermain, Anda dapat membersihkan diri di kamar bilas yang lengkap dan nyaman</p>
                        <a href="http://bit.ly/2ntToQe"   target="_blank">Booking Lapangan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Hero Item --> 
        <div class="hero-item">
            <!-- Hero Slider Image -->
            <img src="<?= base_url('assets') ?>/img/hero/2.jpg" alt="">
            <div class="container">
                <div class="row">
                    <!-- Hero Slider Content -->
                    <div class="hero-content col-md-10 col-xs-12">
                        <h1>Kenapa harus memilih <span>Indosoccernesia ?</span></h1>
                        <p>Kami memberikan Fasilitas yang tidak main-main. Rumput yang digunakan dalam lapangan adalah rumput sintetis standard FIFA dengan grade-A dari Italia. <br><br>
Tak hanya para pemain, penonton pun dimanjakan dengan berbagai fasilitas menarik. Anda dapat menyaksikan serunya pertandingan dari tribune yang nyaman dan menyejukan dengan dilengkapi lampu sorot yang dapat mempermudah anda melihat dalam kegelapan malam.</p>
                        <a href="http://bit.ly/2ntToQe"   target="_blank">Booking Lapangan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Hero Item --> 
        <div class="hero-item">
            <!-- Hero Slider Image -->
            <img src="<?= base_url('assets') ?>/img/hero/3.jpg" alt="">
            <div class="container">
                <div class="row">
                    <!-- Hero Slider Content -->
                    <div class="hero-content col-md-10 col-xs-12">
                        <h1>Booking Lapangan <span>Semudah Dalam Genggaman</span></h1>
                        <p>Indosoccernesia adalah salah satu mini soccer pertama yang dapat melakukan pembookingan lapangan secara online.<br>
						Anda dapat dengan mudah melakukan pembookingan lapangan, Cukup dengan menginstall aplikasi di playstore dengan kata kunci <b>Indosoccernesia</b></p>
                        <a href="http://bit.ly/2ntToQe"   target="_blank">Booking Lapangan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---- Hero Slider End ---->
</div>
<!-- Hero Area End -->

<!-- About Area Start -->
<div id="about-area" class="about-area section pb-120 pt-120">
    <div class="container">
        <div class="row">
            <!-- About Image -->
            <div class="about-image col-md-5 col-xs-12">
                <img src="<?= base_url('assets') ?>/img/about/1.jpg" alt="">
            </div>
            <!-- About Content -->
            <div class="about-content col-md-7 col-xs-12">
                <h4>TENTANG KAMI</h4>
                <h2>SELAMAT DATANG <span>DI INDOSOCCERNESIA</span></h2>
                <p>Indosoccernesia adalah minisoccer pertama di tasikmalaya yang menyediakan berbagai fasilitas premium berstandar FIFA, berada di sebuah tempat yang strategis dan terjangkau dengan memakai rumput sintetis standard FIFA dengan grade-A dari Italia.</p>
               <a href="http://bit.ly/2ntToQe"   target="_blank">Booking Lapangan Sekarang</a>
            </div>
        </div>
    </div>
</div>
<!-- About Area End -->

<!-- Result Area Start -->
<div id="result-area" class="result-area section pb-120">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
           <div class="section-title text-center col-xs-12 mb-70">
               <h1>Pertandingan Terakhir</h1>
               <h5>Oktober 2019</h5>
           </div>
        </div>
        <div class="row">
            <!-- Latest Result Wrapper -->
            <?php foreach ($hasil as $value) { ?>
            <div class="latest-result-wrapper fix">
                <!-- Single Result -->
                <div class="col-md-6 col-xs-12">
                    <div class="single-result result-left">
                        <img  class="team-banner" src="<?= base_url('assets') ?>/img/result/team-1.png" alt="">
                        <div class="content float-left">
                            <h3 class="team-name"><span class="left"><?= $value->tim_one; ?></span> <span class="total-goal right">( <?= $value->skor_tim_one; ?> )</span> <span class="border"></span></h3>
                            <ul class="goalers">
                                <li> KALAH</li>
                                <li> </li>
                            </ul>
                            <span class="final-result">KALAH</span>
                        </div>
                    </div>
                </div>
                <span class="vs">vs</span>
                <!-- Single Result -->
                <div class="col-md-6 col-xs-12">
                    <div class="single-result result-right">
                        <img  class="team-banner" src="<?= base_url('assets') ?>/img/result/team-2.png" alt="">
                        <div class="content float-right">
                            <h3 class="team-name"><span class="left"><?= $value->tim_two; ?></span> <span class="total-goal right">( <?= $value->skor_tim_two; ?> )</span> <span class="border"></span></h3>
                            <ul class="goalers">
                                <li> MENANG</li>
                                <li> </li>
                            </ul>
                            <span class="final-result">MENANG</span>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</div>
<!-- Result Area End -->

<!-- Next Match Area Start -->
<div id="next-match-area" class="next-match-area overlay section pb-110 pt-120">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
           <div class="section-title title-white text-center col-xs-12 mb-70">
               <h1>next match</h1>
           </div>
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                <!-- Upcoming Match -->
                <?php foreach ($jadwal as $value) { ?>
                <div class="upcoming-match">
                    <!-- Upcoming Match Teams -->
                    <div class="teams">
                        <div class="nms-team">
                            <div class="image float-left"><img src="<?= base_url('assets') ?>/img/next-match/team-1.png" alt=""></div>
                            <h4><?= $value->tim_one; ?></h4>
                        </div>
                        <span class="vs">vs</span>
                        <div class="nms-team">
                            <h4><?= $value->tim_two; ?></h4>
                            <div class="image float-right"><img src="<?= base_url('assets') ?>/img/next-match/team-2.png" alt=""></div>
                        </div>
                    </div>
                    <!-- Upcoming Match Time & Venue -->
                    <div class="match-time-venue text-center">
                        <span><?= $value->date; ?>  |  <?= $value->time; ?></span>
                        <h4><?=  $value->tempat; ?></h4>
                    </div>
                   
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- Next Match Area End -->

<!-- Staff Area Start -->
<div id="staff-area" class="staff-area section pb-120 pt-120">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
           <div class="section-title text-center col-xs-12 mb-70">
               <h1>KLUB YANG TELAH BEKERJASAMA DENGAN KAMI</h1>
           </div>
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                <!-- Staff Tab List -->
                <ul class="staff-tab-list nav nav-tabs text-center" role="tablist">
                  
                    <li><a href="#academy" data-toggle="tab">Akademi</a></li>
                </ul>
            </div>
          
                <!-- Academy Tab -->
                <div role="tabpanel" class="tab-pane" id="academy">
                    <!-- Stuff Slider -->
                    <div class="staff-slider">
                        <!-- Single Stuff -->
                        <div class="staff-item col-xs-12">
                            <div class="image"><img src="<?= base_url('assets') ?>/img/staff/academy/1.jpg" alt=""></div>
                            <div class="content">
                                
                            </div>
                        </div>
                        <!-- Single Stuff -->
                        <div class="staff-item col-xs-12">
                            <div class="image"><img src="<?= base_url('assets') ?>/img/staff/academy/2.jpg" alt=""></div>
                            <div class="content">
                                
                            </div>
                        </div>
                        <!-- Single Stuff -->
                        <div class="staff-item col-xs-12">
                            <div class="image"><img src="<?= base_url('assets') ?>/img/staff/academy/3.jpg" alt=""></div>
                            <div class="content">
                               
                            </div>
                        </div>
                        <!-- Single Stuff -->
                        <div class="staff-item col-xs-12">
                            <div class="image"><img src="<?= base_url('assets') ?>/img/staff/academy/4.jpg" alt=""></div>
                            <div class="content">
                              
                            </div>
                        </div>
                        <!-- Single Stuff -->
                        <div class="staff-item col-xs-12">
                            <div class="image"><img src="<?= base_url('assets') ?>/img/staff/academy/5.jpg" alt=""></div>
                            <div class="content">
                               
                            </div>
                        </div>
						
						<!-- Single Stuff -->
                        <div class="staff-item col-xs-12">
                            <div class="image"><img src="<?= base_url('assets') ?>/img/staff/academy/6.jpg" alt=""></div>
                            <div class="content">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<!-- Staff Area End -->

<!-- Funfact Area Start -->
<div class="funfact-area section overlay pb-60 pt-90">
    <div class="container">
        <div class="row">
            <!-- Single Funfact -->
            <div class="col-sm-3 col-xs-6 text-center mb-30">
                <div class="single-funfact text-right">
                    <h1 class="counter">2000</h1>
                    <h3>Goals</h3>
                </div>
            </div>
            <!-- Single Funfact -->
            <div class="col-sm-3 col-xs-6 text-center mb-30">
                <div class="single-funfact text-right">
                    <h1 class="counter">180</h1>
                    <h3>Pemain Aktif</h3>
                </div>
            </div>
            <!-- Single Funfact -->
            <div class="col-sm-3 col-xs-6 text-center mb-30">
                <div class="single-funfact text-right">
                    <h1 class="counter">580</h1>
                    <h3>Menang</h3>
                </div>
            </div>
            <!-- Single Funfact -->
            <div class="col-sm-3 col-xs-6 text-center mb-30">
                <div class="single-funfact text-right">
                    <h1 class="counter">190</h1>
                    <h3>Penghargaan</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Funfact Area End -->


<!-- Gallery Area Start -->
<div id="gallery-area" class="gallery-area section overlay pb-100 pt-120">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
           <div class="section-title title-white text-center col-xs-12 mb-70">
               <h1>photo gallery</h1>
           </div>
        </div>
        <div class="row row-10">
            <?php foreach ($galeri as $value) { ?>
            <!-- Single Gallery Image -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <a href="<?= $value->image; ?>" class="gallery-item overlay gallery-popup"><img src="<?= $value->image ?>" alt=""></a>
            </div>
            <!-- Single Gallery Image -->
        <?php } ?>
        </div>
    </div>
</div>
<!-- Gallery Area End -->


<!-- Video Area Start -->
<div class="video-area section overlay">
    <div class="container">
        <div class="row">
            <!-- Video Wrapper -->
            <div class="video-wrapper col-xs-12 text-center">
                <h1>Comingsoon Soft Launching Indosoccernesia</h1>
                <a class="video-popup" href="https://www.youtube.com/watch?v=4n55_OwKJig"><i class="zmdi zmdi-play-circle-outline"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Video Area End -->

<!-- Blog Area Start -->
<div id="blog-area" class="blog-area section pb-90 pt-120">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
           <div class="section-title text-center col-xs-12 mb-70">
               <h1>Berita Terbaru</h1>
           </div>
        </div>
        <div class="row">
            <?php foreach ($artikel as $value) { ?>
            <!-- Single Blog -->
            <div class="blog-item col-md-4 col-sm-6 col-xs-12 mb-30">
                <!-- Image -->
                <div class="image"><img src="<?= $value->thumbnail; ?>" alt=""></div>
                <!-- Content -->
                <div class="content">
                    <!-- Meta -->
                    <div class="meta">
                        <p class="date"><?= $value->date; ?></p>
                        <p class="author">BY <a href="#"><?= $value->name; ?></a></p>
                    </div>
                    <!-- Title -->
                    <h3 class="title"><a href="<?php echo base_url('welcome/baca_artikel/'.$value->id); ?>"><?= $value->title; ?></a></h3>
                    <p class="clamp"><?= word_limiter($value->content,20); ?></p>
                    <a href="<?php echo base_url('welcome/baca_artikel/'.$value->id); ?>" class="read-more">Klik Lebih Lengkap</a>
                </div>
            </div>
            <!-- Single Blog -->
        <?php } ?>
        </div>
    </div>
</div>
<!-- Blog Area End -->

<!-- Breaking News Area Start -->
<div class="breaking-news-area section overlay pb-40 pt-40">
    <div class="container">
        <div class="row">
            <!-- Breaking News Wrapper -->
            <div class="news-wrapper col-xs-12">
                <h4>Indosoccernesia :</h4>
                <!-- Breaking News Slider -->
                <div class="bnews-slider">
                    <a href="#">Kerja Sama Tim lebih penting dari Kemampuan Individu.</a>
                    <a href="#">Makin keras kita berlatih, makin besar peluang kita untuk menang.</a>
                    <a href="#">Ga ada kemenangan tanpa kerja keras dan semangat pantang menyerah.</a>
                    <a href="#">Sulit bukan berarti ga mungkin. Jago bukan berarti ga bisa dikalahkan.</a>
                    <a href="#">Berikan kemampuan terbaik & usaha terkerasmu dalam setiap pertandingan.</a>
                    <a href="#">Semakin keras kita berlatih, semakin baik kemampuan kita di atas lapangan.</a>
                    <a href="#">Gelar juara tidak mungkin didapat tanpa kerja keras dan semangat pantang menyerah.</a>
                    <a href="#">Tak masalah seberapa sering kau jatuh yang terpenting seberapa cepat kau bangkit.</a>
                    <a href="#">Lebih baik ningkatin skill diri sendiri daripada ngomentarin skill orang lain.</a>
                    <a href="#">Hasil akhir bukan masalah selama kita telah memberikan 100% kemampuan kita.</a>
                    <a href="#">Pemain biasa bermain untuk dirinya sendiri. Pemain hebat bermain untuk tim.</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breaking News Area End -->