<div class="content-wrapper" style="min-height: 467px;">
    <section class="content-header">
        <h1>
                User
                <small>create</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dapur/SAdmin') ?>"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="">user</a></li>
            <li class="active">create</li>
        </ol>
    </section>
    
    <section class="content">
    <?= $this->session->flashdata('message'); ?>
        <form method="POST" action="<?php echo base_url('dapur/SAdmin/editUser'); ?>" accept-charset="UTF-8" class="form-horizontal validate" id="simpan" novalidate="novalidate">
        <input type="hidden" name="id" value="<?php echo $role['id'];?>">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">User</h3>
                <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                </div>
            </div>
            
            <div class="box-body">
                <div class="panel-body">
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label no-padding-right">User Name</label>
                        <div class="col-sm-3">
                            <input id="email" class="form-control" placeholder="User Name" required="true" name="email" type="text" disabled="" value="<?php echo $role['email']; ?>">
                            <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label no-padding-right">Name</label>
                        <div class="col-sm-4">
                            <input id="name" class="form-control" name="name" type="text" value="<?php echo $role['name']; ?>">
                            <!-- <?php echo form_error('name', '<small class="text-danger pl-3">', '</small>'); ?> -->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="role_id" class="col-sm-2 control-label no-padding-right">Role</label>
                        <div class="col-sm-4">
                    
                        <select class="form-control" name="role" id="role">
                          <?php 
                            foreach ($getrole as $gr) {
                                $selected = ($gr['role_id'] == $role['role_id']) ? 'selected' : '';
                            ?>

                            <option value="<?= $gr['role_id']; ?>" <?php echo $selected;?> ><?= $gr['role']; ?></option>
                            <?php } ?>
                        </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer bg-gray-light">
                <input class="btn btn-success btn-sm btn-save" type="submit" value="Update">
                <a class="btn btn-default btn-sm" href="<?php echo base_url('dapur/SAdmin/user'); ?>">
                <i></i> Cancel
                </a>  &nbsp;
            </div>
        </div>
        </form>
    </section>
</div>