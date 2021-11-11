        <div class="page-wrapper">
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Bread crumb and right sidebar toggle -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Management Hasil Pertandingan</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Management Hasil Pertandingan</li>
                            </ol>
                           
                        </div>
                    </div>
                </div>
                <!-- End Bread crumb and right sidebar toggle -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <a href="<?= site_url('administrator/hasil/tambah') ?>"><button class="btn btn-success" id="btn-tambah"><i class="fa fa-paper-plane-o pr-2"></i> Tambah</button></a>
                                </div>
                            </div>
                            <div class="table-responsivse pr-3 pl-3 pb-3">

                                <table class="table table-hover" id="table-blog">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tim</th>
                                            <th>Skor</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                   
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
       