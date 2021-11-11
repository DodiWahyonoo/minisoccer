<!-- Page Banner Area Start -->
<div id="page-banner-area" class="page-banner-area section">
    <div class="container">
        <div class="row">
            <div class="page-banner-title text-center col-xs-12">
                <h2>Artikel</h2>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner Area End -->

<!-- Blog Area Start -->
<div id="blog-area" class="blog-area section pb-70 pt-120">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12 mb-50">
                <div class="row">
                    <!-- Single Blog -->
                    <?php foreach ($artikel as $value) { ?>
                    <div class="blog-item col-sm-12 col-xs-12 mb-30">
                        <!-- Content -->
                        <div class="content">
                            <!-- Title -->
                            <center><img src="<?= $value->thumbnail; ?>" alt=""><br><br>
                            <h3 class="title"><a href="#"><?= $value->title; ?></a></h3></center>
                            <p><?= $value->content; ?></p>
                        </div>
                    </div>
                <?php } ?>
                    <!-- Single Blog -->
                </div>
            </div>
            <!-- Blog Sidebar -->
            <div class="col-md-4 col-xs-12 mb-50">
               
                <!-- Single Sidebar -->
                <div class="single-sidebar fix mb-30">
                    <h4>Search</h4>
                    
                    <form action="#" id="search-form">
                        <input type="text" placeholder="Search">
                        <button><i class="zmdi zmdi-search"></i></button>
                    </form>
                    
                </div>
               
               
                <!-- Single Sidebar -->
                <div class="single-sidebar fix mb-30">
                    <h4>Latest Post</h4>
                    <?php foreach ($lateartikel as $value) { ?>
                    <div class="sidebar-post">
                        <a href="#" class="image float-left"><img src="<?= $value->thumbnail; ?>" alt=""></a>
                        <div class="content fix">
                            <a href="<?php echo base_url('welcome/baca_artikel/'.$value->id); ?>"><?= $value->title; ?></a>
                        </div>
                    </div>
                <?php } ?>

                </div>
                
            </div>
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