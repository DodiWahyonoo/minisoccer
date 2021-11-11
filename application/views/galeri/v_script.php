<script type="text/javascript">
$(document).ready( function () {

  $("#inpt-gmbr").change(readURL);
        $("#inpt-gmbr-u").change(readURL);

        function readURL() {
          var $input = $(this);
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $input.next('.tampil-gambar').attr('src', e.target.result).show();
                }
                reader.readAsDataURL(this.files[0]);
            }
        }


	tampil();

	 function tampil(){ 
          var table;
          table = $('#table-galeri').DataTable({
            responsive: true, 
              "processing": true, 
              "serverSide": true, 
              "ajax": {
                  "url": '<?php echo site_url('administrator/galeri/tampil_galeri'); ?>',
                  "type": "POST",
              },

              "columns": [
                {"mData": "id",
                    render:function(data,type,row,meta){
                       return meta.row + meta.settings._iDisplayStart +1; 
                    }
                },
                {"mData": "image",
                render:function(data,type,row,meta){
                    if (data) {
                        return '<img class="avatar avatar-md rounded-circle" style="border-radius:0px; height:50px;" alt="image placeholder" src="'+data+'" >';
                    }
                }
            },
                {"data": "action"},

              ],

          });
    }

    $("#btn-tambah").on('click',function(data){
        $("#modal-tambah").modal('show');
    });

    $(document).on('submit',"#form-tambah",function(){
        $.ajax({
            type : "POST",
            url : "<?= site_url('administrator/galeri/tambah') ?>",
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
                $("#table-galeri").DataTable().ajax.reload();
                berhasil("Berhasil");
                $("#form-tambah").trigger("reset");
            },
            error:function(data){
                $(".preloader").hide();
                gagal("Gagal");
            },
        })
        return false;

    });


    $(document).on('click','.update',function(e){
            $(".form-update").trigger("reset")
            var id = $(this).attr('data');
            $.ajax({
                method:"POST",
                url: "<?php echo site_url('administrator/galeri/get') ?>",
                data:{id:id},
                success:function(data){
                    var json = JSON.parse(data);
                    $("#modal-update").modal('show');
                    $("#id").val(json[0].id);
                    $("#poto_lama").val(json[0].image);
                    $(".tampil-gambar").attr("src",json[0].image);

                }


            });
            return false;

        });


     $(document).on('submit',"#form-update",function(){
        $.ajax({
            type : "POST",
            url : "<?= site_url('administrator/galeri/update') ?>",
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
                $("#table-galeri").DataTable().ajax.reload();
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


     $("#table-galeri").on('click','.delete',function(){
        var id = $(this).attr("data");
        var konfir = confirm("Apakah Yakin ?");
        if (konfir == true) {
            $.ajax({
                type: "POST",
                url: "<?= site_url('administrator/galeri/delete') ?>",
                data:{id:id},
                beforeSend:function(data){
                    $(".preloader").show();
                },success:function(data){
                    $(".preloader").hide();
                    berhasil("Berhasil Hapus Data");
                    $("#table-galeri").DataTable().ajax.reload();
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

   });
</script>