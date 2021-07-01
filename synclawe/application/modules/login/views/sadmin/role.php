<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $title; ?>
      </h1>
    </section><br>
    <div class="row-lg-12">
        <div class="col-lg-8">
            <?php echo form_error('role', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?php echo $this->session->flashdata('message'); ?>

            <a href="" class="btn btn-primary mb-4" data-toggle="modal" data-target="#newRoleModal"><i class="fa fa-plus"> Add New Role</i></a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($role as $r) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $r['role']; ?></td>
                        <td>
                        <a class="btn  btn-warning btn-sm" href="<?php echo base_url('login/Admin/roleAccess/').$r['id']; ?>">
                        <i class="fa fa-edit"></i> Access
                        </a>  &nbsp;
                        <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editRoleModal<?php echo $r['id'];?>"><i class="fa fa-edit">Edit</i></a>
                        <a href="<?php echo base_url('login/Admin/hapus/').$r['id']; ?>" class="btn  btn-danger btn-sm" onclick="return confirm('Are you sure delete?');">
                        <i class="fa fa-trash"></i> Delete
                        </a>  &nbsp;
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

  <!-- /.content-wrapper -->
  <div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newRoleModalLabel">Add New Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('login/Admin/role'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="role" name="role" placeholder="Role name">
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




<!-- Modal Edit submenu-->
<?php $i = 1; ?>
<?php foreach ($role as $r) : ?>
 <div class="modal fade" id="editRoleModal<?php echo $r['id'];?>" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newRoleModalLabel">Edit Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('login/Admin/editRole'); ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $r['id'];?>">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="role" name="role" value="<?php echo $r['role'];?>">
                     </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div> 
<?php $i++; ?>
<?php endforeach; ?>
<!-- /Modal edit submenu -->