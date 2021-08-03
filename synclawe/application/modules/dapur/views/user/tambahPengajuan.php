<html>
	<head>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
		<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	</head>
	<body>

<div class="content-wrapper">
<div class="content-header"><br>
<div class="container">
    <div class="col-md-8">
				<div class="box box-solid box-primary">
					<div class="box-header with-border">
					  <h3 class="box-title">Form Pengajuan Magang</h3>
					</div>
					
					<!-- form start -->
					<form method="POST" action="">
					<input type="hidden" name="surat_id" value="">
					
					<div class="row">
						<div class="col-md-6">
						  <div class="box-body">
                          <div class="form-group">
                                <label>Nama Group</label>
                                    <input type="text" class="form-control" id="nama_group" name="nama_group" placeholder="Nama Group">
                                </div> 
							<div class="form-group">
							  <label>Kategori Group</label>
								<select class="form-control" id="kategori_group" name="kategori_group" required="">
                                    <option value="" disabel>- Pilih -</option>
									<option value="1">Personal</option>
									<option value="2">Group</option>
								</select>
							</div>
                            <div class="form-group">
                                <label>Kategori Pendidikan</label>
                                <select name="education_category" id="education_category" class="form-control">
                                    <option value="" disabel>- Pilih -</option>
                                    <option value="SMK">SMK</option>
                                    <option value="Kuliah">Kuliah</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Pendidikan</label>
                                <input type="text" class="form-control" id="education" name="education" placeholder="Pendidikan">
                            </div>
                            <div class="form-group">
                                <label>Program Studi</label>
                                <input type="text" class="form-control" id="study_program" name="study_program" placeholder="Program Studi">
                            </div>
                            <div class="form-group">
                                <label>Mulai</label>
                                <input type="date" class="form-control" id="start" name="start" placeholder="Mulai">
                            </div>
                            <div class="form-group">
                                <label>Selesai</label>
                                <input type="date" class="form-control" id="end" name="end" placeholder="Selesai">
                            </div>
							<div class="form-group">
								<label for="nama">Pilih File Surat Pengajuan</label>
								<input class="form-control" id="usr_foto" type="file" name="image" style="width:100%">
								<p class="help-block">File surat pengajuan harus pdf / jpeg / jpeg / png,<br>dan ukuran file harus di bawah 2MB.</p>
							</div>
                            <div class="form-group">
                                <label>Unit</label>
                                    <select name="opd_id" class="form-control">
                                    <option value="" disabel>- Pilih -</option>
                                </select>
                            </div>
						  </div>
						</div>
						<div class="col-md-6">
						  <div class="box-body">
							<div class="form-group">
								<label for="penyusun">Anggota</label>
								<!-- yg model begitu biasain jgn dilakukan <?= $user['name']; ?> nga aman ntr kodingmu
								ganti sama <?php echo $user['name'];?>
								web nya mana mas? js e ndi -->
								<input class="form-control" type="text" value="<?= $user['name']; ?>" disabled="">
								<input name="" type="hidden">
							</div>
														
							<span id="tambah_anggota"></span>
							
							<div class="form-group">
								<button type="button" class="btn btn-default" title="" id="tombol_tambah_anggota" data-original-title="Tambah Anggota"><i class="fa fa-plus"></i> Tambah Anggota</button>
							</div>

							
							
							<div class="form-group">
								<small>Jika kelompok, anggota lain tidak perlu lagi membuat pengajuan, cukup Anda saja.</small>
							</div>

							<div class="row">
								<div class="col-xs-10">
									<div class="form-group">
										<label for="penyusun">Anggota</label>
										<select class="itemName form-control" name="itemName[]" id="itemName" autocomplete="off"></select>
									</div>
								</div>
								<button type="button" class="btn btn-danger" id="hapus_anggota" title="Hapus Anggota" style="margin-top:25px"><i class="fa fa-remove"></i></button>
							</div>

							<!-- <div class="form-group">
								<label>Anggota</label>
								<select class="itemName form-control" style="height: 500px;" name="itemName" id="itemName"></select>
							</div> -->
						  </div>
						</div>

						<div class="col-md-12">
						  <div class="box-footer">
							<button type="submit" class="btn btn-success" name="surat_simpan" data-original-title="" title="">Simpan</button>&nbsp; 
							<button type="button" class="btn btn-primary" onclick="window.location='<?php echo base_url('dapur/User/pengajuan'); ?>'" data-original-title="" title="">Batal</button>
						  </div>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
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
	
			$('.itemName').select2({
		placeholder: '-- Pilih Mahasiswa/Siswa --',
		ajax:{
			url: "<?php echo base_url(); ?>/login/User/GetData",
			dataType: "json",
			delay: 250,
			data: function(params){
				return{
					user : params.term
				};
			},
			processResults: function(data){
				var results = [];

				$.each(data, function(index, item){
					results.push({
						id: item.id,
						text: item.name
					});
				});
				return{
					results: results
				};
			}
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
</script>

<script type="text/javascript">
	$('.itemName').select2({
		placeholder: '-- Pilih Mahasiswa/Siswa --',
		ajax:{
			url: "<?php echo base_url(); ?>/login/User/GetData",
			dataType: "json",
			delay: 250,
			data: function(params){
				return{
					user : params.term
				};
			},
			processResults: function(data){
				var results = [];

				$.each(data, function(index, item){
					results.push({
						id: item.id,
						text: item.name
					});
				});
				return{
					results: results
				};
			}
		},
		minimumInputLength: 2
	});
</script>

	
</body>
</html>

