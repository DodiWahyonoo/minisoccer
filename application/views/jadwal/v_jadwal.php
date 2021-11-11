        <div class="page-wrapper">
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Bread crumb and right sidebar toggle -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Management Jadwal Pertandingan</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Management Jadwal Pertandingan</li>
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
                                    <button class="btn btn-success" id="refresh"><i class="fa fa-paper-plane-o pr-2"></i> Reset Jadwal</button>         
                                </div><br>
        <table class="table" border="1"> 
            <tr> 
                <th rowspan="2" style="text-align: center; padding-top: 50px;">No</th>
                <th rowspan="2" style="text-align: center; padding-top: 50px;">Waktu</th> 
                <th colspan="7" style="text-align: center;">Hari</th> 
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
                <td><span class="hasil"><?= $value->senin; ?></span><button class="edit" style="float: right;">+</button>
                    <input class="txt_edit" type="text" data-id="<?= $value->id;?>" data-field="senin" id="senin-<?= $value->id; ?>" value="<?= $value->senin; ?>"></td>
                <td><span class="hasil"><?= $value->selasa; ?></span><button class="edit" style="float: right;">+</button>
                <input class="txt_edit" type="text" data-id="<?= $value->id;?>" data-field="selasa" id="Selasa-<?= $value->id; ?>" value="<?= $value->selasa; ?>"></td>
                <td><span class="hasil"><?= $value->rabu; ?></span><button class="edit" style="float: right;">+</button>
                <input class="txt_edit" type="text" data-id="<?= $value->id;?>" data-field="rabu" id="rabu-<?= $value->id; ?>" value="<?= $value->rabu; ?>"></td>
                <td><span class="hasil"><?= $value->kamis; ?></span><button class="edit" style="float: right;">+</button>
                <input class="txt_edit" type="text" data-id="<?= $value->id;?>" data-field="kamis" id="kamis-<?= $value->id; ?>" value="<?= $value->kamis; ?>"></td>
                <td><span class="hasil"><?= $value->jumat; ?></span><button class="edit" style="float: right;">+</button>
                <input class="txt_edit" type="text" data-id="<?= $value->id;?>" data-field="jumat" id="jumat-<?= $value->id; ?>" value="<?= $value->jumat; ?>"></td>
                <td><span class="hasil"><?= $value->sabtu; ?></span><button class="edit" style="float: right;">+</button>
                <input class="txt_edit" type="text" data-id="<?= $value->id;?>" data-field="sabtu" id="sabtu-<?= $value->id; ?>" value="<?= $value->sabtu; ?>"></td>
                <td><span class="hasil"><?= $value->minggu; ?></span><button class="edit" style="float: right;">+</button>
            <input class="txt_edit" type="text" data-id="<?= $value->id;?>" data-field="minggu" id="minggu-<?= $value->id; ?>" value="<?= $value->minggu; ?>"></td>
            </tr> 
        <?php } ?>
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
       