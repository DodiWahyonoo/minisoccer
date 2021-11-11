
function scroll_to_class(element_class, removed_height) {
	var scroll_to = $(element_class).offset().top - removed_height;
	if($(window).scrollTop() != scroll_to) {
		$('html, body').stop().animate({scrollTop: scroll_to}, 0);
	}
}

function bar_progress(progress_line_object, direction) {
	var number_of_steps = progress_line_object.data('number-of-steps');
	var now_value = progress_line_object.data('now-value');
	var new_value = 0;
	if(direction == 'right') {
		new_value = now_value + ( 100 / number_of_steps );
	}
	else if(direction == 'left') {
		new_value = now_value - ( 100 / number_of_steps );
	}
	progress_line_object.attr('style', 'width: ' + new_value + '%;').data('now-value', new_value);
}

jQuery(document).ready(function() {
	
    /*
        Fullscreen background
    */
    $.backstretch("assets/img/backgrounds/1.jpg");
    
    $('#top-navbar-1').on('shown.bs.collapse', function(){
    	$.backstretch("resize");
    });
    $('#top-navbar-1').on('hidden.bs.collapse', function(){
    	$.backstretch("resize");
    });
    
    /*
        Form
    */
    $('.f1 fieldset:first').fadeIn('slow');
    
    $('.f1 input[type="text"], .f1 input[type="password"], .f1 textarea').on('focus', function() {
    	$(this).removeClass('input-error');
    });
    
    // next step
    $('.f1 .btn-next').on('click', function() {
    	var parent_fieldset = $(this).parents('fieldset');
    	var next_step = true;
    	// navigation steps / progress steps
    	var current_active_step = $(this).parents('.f1').find('.f1-step.active');
    	var progress_line = $(this).parents('.f1').find('.f1-progress-line');


         if ($(".setuju").prop('checked') === false) {
              alert("Maaf, anda harus menyetujui pernyataan di atas untuk melanjutkan.");
              next_step = false;
            }
           
    	
    	// fields validation
    	parent_fieldset.find('input[type="text"], input[type="password"], textarea').each(function() {
    		if( $(this).val() == "" ) {
    			$(this).addClass('input-error');
    			next_step = false;
    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	});
    	// fields validation
    	
    	if( next_step ) {
    		parent_fieldset.fadeOut(400, function() {
    			// change icons
    			current_active_step.removeClass('active').addClass('activated').next().addClass('active');
    			// progress bar
    			bar_progress(progress_line, 'right');
    			// show next step
	    		$(this).next().fadeIn();
	    		// scroll window to beginning of the form
    			scroll_to_class( $('.f1'), 20 );
	    	});
    	}
    	
    });
    
    // previous step
    $('.f1 .btn-previous').on('click', function() {
    	// navigation steps / progress steps
    	var current_active_step = $(this).parents('.f1').find('.f1-step.active');
    	var progress_line = $(this).parents('.f1').find('.f1-progress-line');
    	
    	$(this).parents('fieldset').fadeOut(400, function() {
    		// change icons
    		current_active_step.removeClass('active').prev().removeClass('activated').addClass('active');
    		// progress bar
    		bar_progress(progress_line, 'left');
    		// show previous step
    		$(this).prev().fadeIn();
    		// scroll window to beginning of the form
			scroll_to_class( $('.f1'), 20 );
    	});
    });
    
    // submit
    $('.f1').on('submit', function(e) {
    	
    	// fields validation
    	$(this).find('input[type="text"], input[type="password"], textarea').each(function() {
    		if( $(this).val() == "" ) {
    			e.preventDefault();
    			$(this).addClass('input-error');
    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	});
    	// fields validation
    	
    });

    if ($(window).width() < 720) {
       $(".informasi").hide();
    }
    else {
         $(".informasi").show();
    }

    $("#tambah").on('click',function(){

      $(".tmp").append(
        ` <tr>
             <td data-th="Nama">
              <div class="form-group">
                <input v-model="item.nama" name="nama_terlapor[]" type="text" class="form-control">
              </div>
            </td>
            <td data-th="NIP">
              <div class="form-group">
                <input v-model="item.nip" type="text" class="form-control" name="nip[]">
              </div>
            </td>
            <td data-th="Jabatan">
              <div class="form-group">
                <input v-model="item.jabatan" type="text" name="jabatan[]" class="form-control">
              </div>
            </td>
            <td data-th="Unit Kerja">
              <div class="form-group">
                <input v-model="item.unitKerja" name="unit_kerja[]" type="text" class="form-control">
              </div>
            </td>
            <td data-th="Aksi">
               <a class="btn btn-danger btn-md hapus text-light"  style="padding: 5px 10px; border-radius: 50%;"><i class="fa fa-times"></i> </a>
            </td>
          </tr>`
        );
      return false;

    })


  $('.uang').mask('000.000.000.000', {reverse: true});
    
   $("#tbl").on('click','.hapus',function(){
       $(this).closest('tr').remove();
        return false;
   })

   $("#tambah-file").on('click',function(){

    var id = $('#tbl-file tr:last').attr('data');

      $(".tmp-file").append(
        ` <tr data=`+(+id + 1)+`>
             <td data-th="Nama">
              <div class="form-group">
                <input v-model="item.nama" name="nama_dokumen[]" type="text" class="form-control">
              </div>
            </td>
            
            <td data-th="Unit Kerja">
              <div class="file-field">
                <div class="btn btn-primary btn-file btn-sm float-left">
                  <span>Choose file</span>
                  <input class="input-file" data="`+(+id + 1)+`" name="file_`+(+id + 1)+`" type="file">
                </div>
                <div class="file-path-wrapper">
                  <input  class="file-path validate up-file f-`+(+id + 1)+`"  readonly="on" type="text" placeholder="Upload your file">
                </div>
              </div>    

            </td>
            <td data-th="Aksi">
               <a class="btn btn-danger hapus btn-md text-light" style="padding: 5px 10px; border-radius: 50%;"><i class="fa fa-times"></i> </a>
            </td>
          </tr>`
        );
      return false;

    })


    $("#tbl-file").on('click','.hapus',function(){
     $(this).closest('tr').remove();
      return false;
    })

   
    $(document).on("change",'.input-file', function(e){
      let  id = $(this).attr("data");
        var fileName = e.target.files[0].name;
        var file = URL.createObjectURL(event.target.files[0]);
      $(".f-"+id).val(fileName);

  });


    
    
});
