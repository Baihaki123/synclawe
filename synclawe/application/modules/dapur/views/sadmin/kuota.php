<div class="content-wrapper" style="min-height: 467px;">
<section class="content-header">
        <h1>Kuota
            <small>Unit</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dapur/SAdmin') ?>"><span class="glyphicon glyphicon-home"></span></a></li>
            <li>kuota</a></li>
            <li>unit</li>
        </ol>
    </section><br>
<section class="content">
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Kuota Unit</h3><br><br>
              <div class="pull-left">								
                <a href="" class="btn btn-primary mb-4" data-toggle="modal" data-target="#newTambahKuotaModal"><i class="fa fa-plus"> Tambah Kuota</i></a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="table-responsive">
              <table table id="example1" class="table table-bordered table-striped">
              <thead>
                  <tr>
                    <th>#</th>
                    <th>Unit</th>
                    <th>Kuota</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <tr>
                <?php $i = 1; ?>
                <?php foreach ($menu as $m):?>
                  <th scope="row"><?= $i; ?></th>
                  <td><?php echo $m['unit']; ?></td>
                  <td><?php echo $m['kuota']; ?></td>
                  <td>
                    <a href="" class="label label-success" data-toggle="modal" data-target="#newEditKuotaModal<?php echo $m['id'];?>">Edit</a>
                   <a href="<?php echo base_url(); ?>dapur/SAdmin/hapusKuota/<?php echo $m['id']; ?>" class="btn btn-danger btn-xs btn-hapus" onclick="return confirm('Are you sure delete?');">delete</a>
                  </td>
                </tr>
                <?php $i++;?>
                <?php endforeach;?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <div class="modal fade" id="newTambahKuotaModal" tabindex="-1" role="dialog" aria-labelledby="newTamabahKuotaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newTambahKuotaModalLabel">Tambah Kuota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('dapur/SAdmin/kuota'); ?>" method="post">
                <div class="modal-body">
                  <div class="form-group">
                      <input type="text" class="form-control" id="unit" name="unit" placeholder="Nama Unit">
                  </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="kuota" name="kuota" placeholder="Jumlah Kuota">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div> 

<?php $i = 1; ?>
<?php foreach ($menu as $m) : ?>
<div class="modal fade" id="newEditKuotaModal<?php echo $m['id'];?>" tabindex="-1" role="dialog" aria-labelledby="newEditKuotaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newEditKuotaModalLabel">Edit Kuota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('dapur/SAdmin/editKuota'); ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $m['id'];?>">
                <div class="modal-body">
                  <div class="form-group">
                      <input type="text" class="form-control" id="unit" name="unit" placeholder="Nama Unit" value="<?php echo $m['unit'];?>">
                  </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="kuota" name="kuota" placeholder="Jumlah Kuota" value="<?php echo $m['kuota'];?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div> 
<?php $i++; ?>
<?php endforeach; ?>