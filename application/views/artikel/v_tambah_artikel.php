     <div class="page-wrapper">
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Bread crumb and right sidebar toggle -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Management Artikel</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Management Artikel</li>
                            </ol>
                           
                        </div>
                    </div>
                </div>
                <!-- End Bread crumb and right sidebar toggle -->
             
                <div class="row">
                    <div class="col-12">
                        <form action="<?= site_url('administrator/artikel/proses_tambah'); ?>" method="post" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-grup">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control" required="on">
                                </div>
                                <div class="form-grup"><br>
                                    <label>Gambar</label>
                                    <input type="file" name="file" class="form-control" style="display: inline;" required="on">
                                </div><br>
                                <label>Konten Artikel</label>
                                <textarea class="summernote" name="content" required="on">
                                    

                                </textarea>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <button id="save" class="btn btn-info btn-rounded"  type="submit" style="float: right;">Save</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <!-- End Container fluid  -->
        </div>