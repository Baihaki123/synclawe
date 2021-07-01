<div class="content-wrapper" style="min-height: 467px;">
    <section class="content-header">
        <h1>
                User
                <small>create</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('login/Admin') ?>"><span class="glyphicon glyphicon-home"></span></a></li>
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
                            <input id="name" class="form-control" name="name" type="text">
                            <!-- <?php echo form_error('name', '<small class="text-danger pl-3">', '</small>'); ?> -->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label no-padding-right">User Name</label>
                        <div class="col-sm-3">
                            <input id="email" class="form-control" placeholder="User Name" required="true" name="email" type="text" >
                            <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="role_id" class="col-sm-2 control-label no-padding-right">Role</label>
                        <div class="col-sm-4">
                        <select name="role" id="role" class="form-control" value="<?php echo $gr['role'];?>">
                        <!-- <?php foreach ($getrole as $gr) : ?>
                                <option value="<?= $gr['id']; ?>"><?= $gr['role_id']; ?></option>
                                <?php echo $gr['id'] == $gr['role_id'] ? "selected" : null ?>
                            <?php endforeach; ?> -->
                        
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="col-sm-2 control-label no-padding-right" for="is_active">
                                Active?
                            </label>
                            <input type="checkbox" class="form-check-input" id="is_active" name="is_active" checked > 
                        </div>
                        
                        <!-- <label for="active" class="col-sm-2 control-label no-padding-right">Active</label>
                        <div class="col-sm-2">
                            <select class="form-control" name="is_active"><option value="0">Tidak</option><option value="1">Ya</option></select>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="box-footer bg-gray-light">
                <input class="btn btn-success btn-sm btn-save" type="submit" value="Update">
                <button class="btn btn-default btn-sm" data-request="push" href="https://flipbook.tegalkab.go.id/ghadmin/user" type="button">Cancel</button>
            </div>
        </div>
        </form>
    </section>
</div>