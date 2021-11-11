<div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Galeri</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <div class="row">
                <form id="form-tambah" method="POST" enctype="multipart/form-data">
                    <!-- <input type="file" name="file"> -->
                    <div class="col-md-6">
                        <label class="form-control" style="height: 225px;"><input id="inpt-gmbr" style="display: none; padding: 90px; cursor: pointer;" type="file" name="file" required="on"><img src="<?php echo base_url(); ?>/assets/images/no.jpg" style="height: 210px; width: 248px; cursor: pointer;" class="tampil-gambar"></label>
                    </div><br>
                </div>
               
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" id="simpan">Simpan</button>
             </div>
            </form>
        </div>
      </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="modal-update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Galeri</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <div class="row">
                <form id="form-update" method="POST" enctype="multipart/form-data">
                    <!-- <input type="file" name="file"> -->
                    <div class="col-md-6">
                        <input type="text" name="poto_lama" id="poto_lama" style="display: none;">
                        <label class="form-control" style="height: 225px;"><input id="inpt-gmbr-u" style="display: none; padding: 90px; cursor: pointer;" type="file" name="file"><img src="<?php echo base_url(); ?>/assets/images/no.jpg" style="height: 210px; width: 248px; cursor: pointer;" class="tampil-gambar"></label>
                    </div><br>
                    <div class="col-md-6">
                        <input type="hidden" name="id" id="id">
                    </div>
                </div>
               
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" id="simpan">Simpan</button>
             </div>
            </form>
        </div>
      </div>
    </div>