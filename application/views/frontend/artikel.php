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
                    <?php foreach ($artikel as $value) { ?>
                    <!-- Single Blog -->
                    <div class="blog-item col-sm-6 col-xs-12 mb-30">
                        <!-- Image -->
                        <div class="image"><img src="<?= $value->thumbnail; ?>" alt=""></div>
                        <!-- Content -->
                        <div class="content">
                            <!-- Meta -->
                            <div class="meta">
                                <p class="date"><?= $value->date; ?></p>
                                <p class="author">BY <?= $value->name; ?></p>
                            </div>
                            <!-- Title -->
                            <h3 class="title"><a href="<?php echo base_url('welcome/baca_artikel/'.$value->id); ?>"><?= $value->title; ?></a></h3>
                            <p><?= word_limiter($value->content,20); ?></p>
                            <a href="<?php echo base_url('welcome/baca_artikel/'.$value->id); ?>" class="read-more">READ MORE</a>
                        </div>
                    </div>
                    <!-- Single Blog -->
                <?php } ?>
                </div>
                <!-- Pagination -->
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <div class="pagination mt-30">
                            <ul>
                                <li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
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