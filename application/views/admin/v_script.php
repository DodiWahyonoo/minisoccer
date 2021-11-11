<script type="text/javascript">
$(document).ready( function () {

	tampil();

	 function tampil(){ 
          var table;
          table = $('#table-admin').DataTable({
            responsive: true, 
              "processing": true, 
              "serverSide": true, 
              "ajax": {
                  "url": '<?php echo site_url('administrator/admin/tampil'); ?>',
                  "type": "POST",
              },

              "columns": [
                {"mData": "id",
                    render:function(data,type,row,meta){
                       return meta.row + meta.settings._iDisplayStart +1; 
                    }
                },
                {"data": "name"},
                {"data": "email"},
                {"data": "action"},

              ],

          });
    }

    $("#btn-tambah").on('click',function(data){
        $("#modal-tambah").modal('show');
    })

    $(document).on('submit',"#form-tambah",function(){
        $.ajax({
            type : "POST",
            url : "<?= site_url('administrator/admin/tambah') ?>",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend:function(data){
                $("#modal-tambah").modal('hide');
                $(".preloader").show();
            },
            success:function(data){
                $(".preloader").hide();
                $("#table-admin").DataTable().ajax.reload();
                berhasil("Berhasil");
                $("#form-tambah").trigger("reset");
            },
            error:function(data){
                $(".preloader").hide();
                gagal("Gagal");
            },
        })
        return false;

    })
    $("#table-admin").on('click','.delete',function(){
        var id = $(this).attr("data");
        var konfir = confirm("Apakah Yakin ?");
        if (konfir == true) {
            $.ajax({
                type: "POST",
                url: "<?= site_url('administrator/admin/hapus') ?>",
                data:{id:id},
                beforeSend:function(data){
                    $(".preloader").show();
                },success:function(data){
                    $(".preloader").hide();
                    berhasil("Berhasil Hapus Data");
                    $("#table-admin").DataTable().ajax.reload();
                },
                error:function(data){
                    gagal("Gagal Hapus Data");
                    $(".preloader").hide();
                }
            })
        }else{

        }
        return false;
    })

    $(document).on('click','.update',function(e){
            $(".form-update").trigger("reset")
            var id = $(this).attr('data');
            $.ajax({
                method:"POST",
                url: "<?php echo site_url('administrator/admin/get') ?>",
                data:{id:id},
                success:function(data){
                    var json = JSON.parse(data);
                    $("#modal-update").modal('show');
                    $(".id").val(json[0].id);
                    $("#update-nama").val(json[0].name);
                    $("#update-email").val(json[0].email);
                    $("#password_lama").val(json[0].password);
                }


            });
            return false;

        });

    $(document).on('submit',"#form-update",function(){
        $.ajax({
            type : "POST",
            url : "<?= site_url('administrator/admin/update') ?>",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend:function(data){
                $("#modal-update").modal('hide');
                $(".preloader").show();
            },
            success:function(data){
                $(".preloader").hide();
                $("#table-admin").DataTable().ajax.reload();
                berhasil("Berhasil");
                $("#form-update").trigger("reset");
            },
            error:function(data){
                $(".preloader").hide();
                gagal("Gagal");
            },
        })
        return false;

    })

});
</script>