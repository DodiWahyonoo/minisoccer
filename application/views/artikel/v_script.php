<script type="text/javascript">
$(document).ready( function () {

    tampil();

     function tampil(){ 
          var table;
          table = $('#table-blog').DataTable({
            responsive: true, 
              "processing": true, 
              "serverSide": true, 
              "ajax": {
                  "url": '<?php echo site_url('administrator/artikel/tampil_artikel'); ?>',
                  "type": "POST",
              },

              "columns": [
                {"mData": "id",
                    render:function(data,type,row,meta){
                       return meta.row + meta.settings._iDisplayStart +1; 
                    }
                },
                {"data": "title"},
                {"mData": "thumbnail",
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

     $("#table-blog").on('click','.delete',function(){
        var id = $(this).attr("data");
        var konfir = confirm("Apakah Yakin ?");
        if (konfir == true) {
            $.ajax({
                type: "POST",
                url: "<?= site_url('administrator/artikel/delete') ?>",
                data:{id:id},
                beforeSend:function(data){
                    $(".preloader").show();
                },success:function(data){
                    $(".preloader").hide();
                    berhasil("Berhasil Hapus Data");
                    $("#table-blog").DataTable().ajax.reload();
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