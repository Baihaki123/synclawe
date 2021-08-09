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
								<td style="color:red">
                                    <button onclick="window.location='#' "class="btn btn-dark shadow">
                                    <i class="fa fa-search-plus mr-2"> Detail</i>
                                    </button>
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












