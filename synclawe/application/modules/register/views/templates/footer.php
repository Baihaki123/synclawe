<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 1.0
  </div>
  <strong>Copyright &copy; <a href="https://poltektegal.ac.id/">Politeknik Harapan Bersama <?php echo date('Y') ; ?></a>.</strong> Created by Doa Ibu
</footer>
<script src="<?php echo base_url('assets/Template/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/Template/bower_components/jquery-ui/jquery-ui.min.js'); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/Template/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('assets/Template/bower_components/raphael/raphael.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/Template/bower_components/morris.js/morris.min.js'); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/Template/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js'); ?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/Template/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/Template/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/Template/bower_components/jquery-knob/dist/jquery.knob.min.js'); ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/Template/bower_components/moment/min/moment.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/Template/bower_components/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/Template/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'); ?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/Template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('assets/Template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/Template/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
<script src="<?php echo base_url('assets/Template/bower_components/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/Template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/Template/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/Template/dist/js/adminlte.min.js'); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/Template/dist/js/pages/dashboard.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/Template/dist/js/demo.js'); ?>"></script>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>



<!-- <script type="text/javascript">
$(document).ready(function(){
    var max_fields      = 3 - $('select#penyusun').length;
    var fields          = $("#tambah_anggota");
    var add_button      = $("#tombol_tambah_anggota");

    var x = 1;
    $(add_button).click(function(e){
        e.preventDefault();
        if(x < max_fields){
            x++;
            $(fields).append('<div class="row"><div class="col-xs-10"><div class="form-group"><label for="penyusun">Anggota</label><select class="itemName form-control" name="itemName" id="itemName" autocomplete="off"></select></div></div><button type="button" class="btn btn-danger" id="hapus_anggota" title="Hapus Anggota" style="margin-top:25px"><i class="fa fa-remove"></i></button></div>'); //add input box
	
			$('.cariMhs').select2({
				placeholder: '-- Pilih Mahasiswa/Siswa --',
				ajax: {
					url: "<?php echo base_url('login/User/cariMhs'); ?>",
					dataType: 'json',
					delay: 250,
					processResults: function (data){
						return {
							results: data
						};
					},
					cache: true
				},
				minimumInputLength: 2
			});

        }
    });

    $(fields).on("click","#hapus_anggota", function(e){ //user click on remove text
        e.preventDefault(); 
        $(this).parent('div').remove(); x--;
    });
});
</script> -->




<script>
            $('.custom-file-input').on('change', function() {
                let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
                });
            $('.form-check-input').on('click', function() {
                const menuId = $(this).data('menu');
                const roleId = $(this).data('role');

            $.ajax({
                url: "<?= base_url('login/Admin/changeaccess'); ?>",
                type: 'post',
                data: {
                menuId: menuId,
                roleId: roleId
                },
            success: function() {
                document.location.href = "<?= base_url('login/Admin/roleaccess/'); ?>" + roleId;
              }
          });
      });
</script>
</body>
</html>