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
        <form method="POST" action="" accept-charset="UTF-8" class="form-horizontal validate" id="simpan" novalidate="novalidate">
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
                        <label for="name" class="col-sm-2 control-label no-padding-right">Name</label>
                        <div class="col-sm-6">
                            <input id="name" class="form-control" placeholder="Nama" required="true" name="name" type="text" value="<?php echo set_value('name'); ?>">
                            <?php echo form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label no-padding-right">User Name</label>
                        <div class="col-sm-3">
                            <input id="email" class="form-control" placeholder="User Name" required="true" name="email" type="text" value="<?php echo set_value('email'); ?>">
                            <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password1" class="col-sm-2 control-label no-padding-right">Password</label>
                        <div class="col-sm-3">
                            <input id="password1" class="form-control" placeholder="Password" required="true" minlength="6" name="password1" type="password">
                            <?php echo form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password2" class="col-sm-2 control-label no-padding-right">Confirm Password</label>
                        <div class="col-sm-3">
                            <input id="password2" class="form-control" placeholder="Confirm Password" required="true" name="password2" type="password">
                            <?php echo form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="role_id" class="col-sm-2 control-label no-padding-right">Role</label>
                        <div class="col-sm-4">
                        <select name="role" id="role" class="form-control">
                            <option value="">- Select Role -</option>
                            <?php foreach ($getrole as $gr) : ?>
                            <option value="<?= $gr['role_id']; ?>"><?= $gr['role']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?php echo form_error('role', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer bg-gray-light">
                <input class="btn btn-success btn-sm btn-save" type="submit" value="Simpan">
                <a class="btn btn-default btn-sm" href="<?php echo base_url('dapur/SAdmin/user'); ?>">
                <i></i> Cancel
                </a>  &nbsp;
                <!-- <button class="btn btn-default btn-sm" data-request="push" href="<?php echo base_url('login/SAdmin/user'); ?>" type="button">Cancel</button> -->
            </div>
        </div>
        </form>
    </section>
</div>