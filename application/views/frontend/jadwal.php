<!-- Page Banner Area Start -->
<div id="page-banner-area" class="page-banner-area section">
    <div class="container">
        <div class="row">
            <div class="page-banner-title text-center col-xs-12">
                <h2>Jadwal Pertandingan</h2>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner Area End -->

<!-- Fixtures Area Start -->
<div id="fixtures-area" class="fixtures-area section pb-120 pt-120">
    <div class="container">
        <div class="row">
            
            <div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
                <!-- Fixtures Table -->
                <div class="table-responsive fixtures-table">
         <table class="table"> 
            <tr> 
                <th rowspan="2">No</th>
                <th rowspan="2">Waktu</th> 
                <th colspan="7">Hari</th> 
            </tr> 
            <tr> 
                <td>SENIN</td>
                <td>Selasa</td>
                <td>Rabu</td>
                <td>Kamis</td>
                <td>Jumat</td>
                <td>Sabtu</td>
                <td>Minggu</td> 
            </tr> 
            <?php 
            foreach ($jadwal as $value) {
                
             ?>
            <tr> 
                <td><?= $value->id; ?></td>
                <td><?= $value->time;?></td>
                <td><?= $value->senin; ?></td>
                <td><?= $value->selasa; ?></td>
                <td><?= $value->rabu; ?></td>
                <td><?= $value->kamis; ?></td>
                <td><?= $value->jumat; ?></td>
                <td><?= $value->sabtu; ?></td>
                <td><?= $value->minggu; ?></td>
            </tr> 
        <?php } ?>
            
        </table> 
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fixtures Area End -->

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