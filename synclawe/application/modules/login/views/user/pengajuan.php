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
												
						<button type="button" class="btn btn-success" onclick="window.location='<?php echo base_url('login/User/tambahPengajuan'); ?>'" style="margin-left:10px" data-original-title="" title="">Tambah Surat</button>
					  </div>
					</div>
					
					<div class="box-body">
					  <div id="tabel_data_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="tabel_data_length"><label>Tampil <select name="tabel_data_length" aria-controls="tabel_data" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> data</label></div></div>
					  <div class="col-sm-6"><div id="tabel_data_filter" class="dataTables_filter"><label>Cari:<input type="search" class="form-control input-sm" placeholder="" aria-controls="tabel_data"></label></div></div></div><div class="row"><div class="col-sm-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1086px; padding-right: 0px;"><table class="table table-bordered table-hover dataTable no-footer" role="grid" style="margin-left: 0px; width: 1086px;"><thead>
						<tr role="row"><th style="display: none; width: 8px;" class="sorting_desc" tabindex="0" aria-controls="tabel_data" rowspan="1" colspan="1" aria-sort="descending" aria-label="#: activate to sort column ascending">#</th><th width="80" style="display: none; width: 80px;" class="sorting" tabindex="0" aria-controls="tabel_data" rowspan="1" colspan="1" aria-label="NIM: activate to sort column ascending">NIM</th><th width="160" class="sorting" tabindex="0" aria-controls="tabel_data" rowspan="1" colspan="1" style="width: 160px;" aria-label="No. Surat: activate to sort column ascending">No. Surat</th><th width="260" class="sorting" tabindex="0" aria-controls="tabel_data" rowspan="1" colspan="1" style="width: 260px;" aria-label="Perihal: activate to sort column ascending">Perihal</th><th width="" class="sorting" tabindex="0" aria-controls="tabel_data" rowspan="1" colspan="1" style="width: 213px;" aria-label="Instansi / Perusahaan: activate to sort column ascending">Instansi / Perusahaan</th><th width="80" class="sorting" tabindex="0" aria-controls="tabel_data" rowspan="1" colspan="1" style="width: 80px;" aria-label="Tgl. Surat: activate to sort column ascending">Tgl. Surat</th><th width="80" style="display: none; width: 80px;" class="sorting" tabindex="0" aria-controls="tabel_data" rowspan="1" colspan="1" aria-label="Penulis: activate to sort column ascending">Penulis</th><th width="80" class="sorting" tabindex="0" aria-controls="tabel_data" rowspan="1" colspan="1" style="width: 80px;" aria-label="Tgl. Print: activate to sort column ascending">Tgl. Print</th><th class="sorting" tabindex="0" aria-controls="tabel_data" rowspan="1" colspan="1" style="width: 58px;" aria-label=": activate to sort column ascending"></th></tr>
						</thead></table></div></div><div class="dataTables_scrollBody" style="overflow: auto; width: 100%;"><table id="tabel_data" class="table table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="tabel_data_info" style="width: 1086px;"><thead>
						<tr role="row" style="height: 0px;"><th style="display: none; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 8px;" class="sorting" aria-controls="tabel_data" rowspan="1" colspan="1"><div class="dataTables_sizing" style="height:0;overflow:hidden;">#</div></th><th width="80" style="display: none; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 80px;" class="sorting" aria-controls="tabel_data" rowspan="1" colspan="1"><div class="dataTables_sizing" style="height:0;overflow:hidden;">NIM</div></th><th width="160" class="sorting" aria-controls="tabel_data" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 160px;"><div class="dataTables_sizing" style="height:0;overflow:hidden;">No. Surat</div></th><th width="260" class="sorting" aria-controls="tabel_data" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 260px;"><div class="dataTables_sizing" style="height:0;overflow:hidden;">Perihal</div></th><th width="" class="sorting" aria-controls="tabel_data" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 213px;"><div class="dataTables_sizing" style="height:0;overflow:hidden;">Instansi / Perusahaan</div></th><th width="80" class="sorting" aria-controls="tabel_data" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 80px;"><div class="dataTables_sizing" style="height:0;overflow:hidden;">Tgl. Surat</div></th><th width="80" style="display: none; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 80px;" class="sorting" aria-controls="tabel_data" rowspan="1" colspan="1"><div class="dataTables_sizing" style="height:0;overflow:hidden;">Penulis</div></th><th width="80" class="sorting" aria-controls="tabel_data" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 80px;"><div class="dataTables_sizing" style="height:0;overflow:hidden;">Tgl. Print</div></th><th class="sorting" aria-controls="tabel_data" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 58px;"><div class="dataTables_sizing" style="height:0;overflow:hidden;"></div></th></tr>
						</thead>
						
						<tbody>						
						<tr role="row" class="odd">
						  <td style="display:none" class="sorting_1">210108155704</td>
						  <td style="display:none">
							19040151<br>19040103<br>19040192						  </td>
						  <td>009.03/KMP.PHB/I/2021</td>
						  <td>Permohonan Izin Kerja Praktek (KP)</td>
						  <td>Dinas Komunikasi dan Informatika Kabupaten  Tegal</td>
						  <td>2021-01-08</td>
						  <td style="display:none">
							19040192						  </td>
						  <td>2021-01-12</td>
						  <td width="80" align="center" style="font-size:17px">
														<a href="javascript:void(0)" onclick="window.location='?hal=suratmhs&amp;edit=eGltK294YWN6Z2lwWW82WlRtSkZRZw'" title="" data-original-title="Edit Surat"><i class="fa fa-pencil"></i></a>&nbsp;
							<a href="javascript:void(0)" onclick="hapus('?hal=suratmhs&amp;hapus=eGltK294YWN6Z2lwWW82WlRtSkZRZw')" title="" data-original-title="Hapus Surat"><i class="fa fa-times-circle"></i></a>
						  </td>
						</tr></tbody>
					  </table></div></div></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="tabel_data_info" role="status" aria-live="polite">Menampilkan 1 sampai 1 dari 1 data</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="tabel_data_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="tabel_data_previous"><a href="#" aria-controls="tabel_data" data-dt-idx="0" tabindex="0" data-original-title="" title="">Sebelumnya</a></li><li class="paginate_button active"><a href="#" aria-controls="tabel_data" data-dt-idx="1" tabindex="0" data-original-title="" title="">1</a></li><li class="paginate_button next disabled" id="tabel_data_next"><a href="#" aria-controls="tabel_data" data-dt-idx="2" tabindex="0" data-original-title="" title="">Selanjutnya</a></li></ul></div></div></div></div>
					</div>

					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			
			</div>
		</div>

	</section>
</div>












