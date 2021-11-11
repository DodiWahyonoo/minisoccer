        <!-- End Page wrapper  -->
        <!-- footer -->
        <footer class="footer  align-bottom">
            © 2019   - Neosantara Studio
        </footer>
        <!-- End footer -->
    </div>
    <script src="<?= base_url() ?>assets/node_modules/jquery/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap popper Core JavaScript -->
    <script src="<?= base_url() ?>assets/node_modules/popper/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= base_url() ?>assets/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url() ?>assets/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url() ?>assets/dist/js/sidebarmenu.js"></script>

    <!--Custom JavaScript -->
    <script src="<?= base_url() ?>assets/dist/js/custom.min.js"></script> 

     <!-- datatables -->
    <script src="<?php echo base_url() ?>assets/datatables/datatables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/datatables/dataTables.responsive.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/plugins/alert/alertify.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
    <script src="<?php echo base_url() ?>assets/node_modules/summernote/dist/summernote.min.js"></script>
    
</body>

<script type="text/javascript">
    function berhasil(pesan) {
         alertify.set('notifier','position', 'top-right');
         alertify.success(pesan);
    }
    function gagal(pesan) {
         alertify.set('notifier','position', 'top-right');
         alertify.error(pesan);
    }

</script>
<script>
    jQuery(document).ready(function() {

        $('.summernote').summernote({
            height: 350, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false // set focus to editable area after initializing summernote
        });

        $('.inline-editor').summernote({
            airMode: true
        });

    });
    </script>

</html>