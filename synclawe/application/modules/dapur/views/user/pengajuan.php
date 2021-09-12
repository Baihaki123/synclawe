<div class="content-wrapper" style="min-height: 507px;">
<div class="loading-container" style="display: none;">      
</div>
	<section class="content-header">
		<h1>Pengajuan Magang</h1>
	</section>

	<section class="content">
	
	<!-- Your Page Content Here -->
		<div class="row">
			<div class="col-xs-12">
		</div>
			<div class="col-xs-12">			
				<!-- Default box -->
				<div class="box box-info">
					<div class="box-header with-border">
					  <h3 class="box-title">Daftar Pengajuan</h3>
					  
					  <div class="pull-right">
												
						<button type="button" class="btn btn-success" onclick="window.location='<?php echo base_url('dapur/User/tambahPengajuan'); ?>'" style="margin-left:10px" data-original-title="" title="">Tambah Pengajuan</button>
					  </div>
					</div>
					
					<div class="box-body">
					<table table id="example1" class="table table-bordered table-striped">
              		<thead>
					<tr>
						<th>#</th>
						<th>Nama Group</th>
						<th>Kategori Pendidikan</th>
						<th>Nama Pendidikan</th>
						<th>Program Studi</th>
						<th>Mulai</th>
						<th>Selesai</th>
						<th>Aksi</th>
					</tr>
					</thead>
						
						<tbody>	
							<?php $i = 1; ?>                       
                            <?php foreach ($pengajuan as $pnj) : ?>					
						<tr role="row" class="odd">
								<th scope="row"><?= $i; ?></th>
                                <td><?= $pnj['nama_group']; ?></td>
                                <td><?= $pnj['education_category']; ?></td>
                                <td><?= $pnj['education']; ?></td>
                                <td><?= $pnj['study_program']; ?></td>
                                <td><?= $pnj['start']; ?></td>
                                <td><?= $pnj['end']; ?></td>
								<td>
								<a href="" class="label label-success" data-toggle="modal" data-target="#newEditKuotaModal<?php echo $pnj['id'];?>">Edit</a>
								<a href="<?php echo base_url(); ?>dapur/SAdmin/hapusKuota/<?php echo $pnj['id']; ?>" class="btn btn-danger btn-xs btn-hapus" onclick="return confirm('Are you sure delete?');">delete</a>
								</td>
						</tr>
						<?php $i++; ?>
                        <?php endforeach; ?>
					</tbody>
					</div>
					  </table>
					</div>

					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			
			</div>
		</div>

	</section>
</div>












