<!-- Modal -->
<div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form-tambah" >
          <div class="form-group">
            <label>Nama Admin</label>
            <input type="text" class="form-control" name="nama" required="on">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" required="on">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" name="password" required="on">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button  class="btn btn-primary">Simpan</button>
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
        <h5 class="modal-title" id="exampleModalLabel">Update Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form-update">
          <input type="hidden" name="id" class="id">
          <input type="hidden" name="password_lama" id="password_lama">
          <div class="form-group">
            <label>Nama Admin</label>
            <input type="text" class="form-control" name="update-nama" id="update-nama" required="on">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="update-email" id="update-email" required="on">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" name="update-password" placeholder="Kosongkan jika tidak di ubah" id="update-password" >
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button  class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>