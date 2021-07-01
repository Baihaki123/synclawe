<section class="content-wrapper">
<section class="content-header">
      <h1>
      <?php echo $title; ?>
      </h1><br>
		<!-- Your Page Content Here -->
		<div class="row">
			<div class="col-md-12">
			<?= $this->session->flashdata('message'); ?>
		</div>
			<div class="col-md-4">
				<div class="box box-warning">
					<!-- form start -->
                    <?php echo form_open_multipart('login/user/edit'); ?>
					  <div class="box-body">
						<label for="usr_foto">Edit Profil</label>
                        <img class="img-circle" src="<?php echo base_url('assets/Template/dist/img/profile/'). $user['image']; ?>" alt="Card image cap" width="150" height="150" style="display: block; margin: 0 auto;" id="gambar_nodin">
                        		<div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" required="" autocomplete="off" readonly="">
                        		</div>
                        		<div class="form-group">
                                    <label for="nama">NIM atau NIS</label>
                                    <input type="text" class="form-control" id="nim_nis" name="nim_nis" required="" autocomplete="off" value="<?= $user['nim_nis']; ?>">
                                </div>
                        		<div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="name" name="name" required="" autocomplete="off" value="<?= $user['name']; ?>">
                                </div>
								<div class="form-group">
								<label for="nama">Pilih Foto</label>
								<input class="form-control" id="usr_foto" type="file" name="image" style="width:100%">
								<p class="help-block">File foto harus jpeg / jpeg / png / gif,<br>dan ukuran file harus di bawah 2MB.</p>
								</div>
					  </div>
					  <!-- /.box-body -->

					  <div class="box-footer">
						<button type="submit" class="btn btn-success" name="simpan_foto" data-original-title="" title="">Simpan</button>
					  </div>
					</form>
				</div>
			</div>
			
			
			
			<div class="col-md-4">
				<div class="box box-primary">
					<!-- form start -->
					<form action="<?= base_url('login/User/changepassword'); ?>" method="post">
					  <div class="box-body">
					  <h4 style="text-align: center;"><b>Ubah Password</b></h4><hr>
						<div class="form-group">
						  <label for="passlama">Password Lama</label>
						  <input class="form-control" id="current_password" name="current_password" placeholder="masukkan password lama" type="password">
						  <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<br>
						<div class="form-group">
						  <label for="passbaru">Password Baru</label>
						  <input class="form-control" id="new_password1" name="new_password1" placeholder="masukkan password baru" type="password">
						  <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
						  <label for="passbaru">Masukkan Lagi</label>
						  <input class="form-control" id="new_password2" name="new_password2" placeholder="masukkan password baru" type="password">
						  <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
					  </div>
					  <!-- /.box-body -->

					  <div class="box-footer">
						<button type="submit" class="btn btn-success" data-original-title="" title="">Simpan</button>
					  </div>
					</form>
				</div>
			</div>
		</div>

	</section>
</section>

<!-- 

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
           
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div>
              </div>
              

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div> -->