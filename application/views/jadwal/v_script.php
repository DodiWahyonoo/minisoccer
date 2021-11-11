<script type="text/javascript">
$(document).ready( function () {

   $('.edit').click(function(){
          // Hide input element
          $('.txtedit').hide();

          // Show next input elemen
   $(this).next('.txt_edit').show().focus();

          // Hide clicked element
          $(this).hide();
        });

   $('.txt_edit').focusout(function(){
          // Get edit id, field name and value
          var edit_id = $(this).data('id');
          var hari = $(this).data('field');
          var value = $(this).val();

          // assign instance to element variable
          var element = this;

          // Send AJAX request
          $.ajax({
            url: '<?php echo site_url('administrator/pertandingan/update'); ?>',
            type: 'post',
            data: { hari:hari, value:value, id:edit_id },
            success:function(response){

              // Hide Input element
              $(element).hide();

              // Update viewing value and display it
              $(element).prev('.edit').show();
              $(element).prev('.hasil').text(value);
              $(element).prev('.hasil').show();
              location.reload();
              
            }
          });
        });

   $("#refresh").click(function(){
    $.ajax({
      url: '<?php echo site_url('administrator/pertandingan/refresh') ?>',
      success:function(response){
        berhasil("Berhasil");
        location.reload();
      }
    });
   });

   });
</script>