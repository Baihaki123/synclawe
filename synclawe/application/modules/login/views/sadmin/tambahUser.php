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
        <form method="POST" action="https://flipbook.tegalkab.go.id/ghadmin/user" accept-charset="UTF-8" class="form-horizontal validate" id="simpan" novalidate="novalidate"><input name="_token" type="hidden" value="D0KvhRRBEvHZ55tabQkipXf3CEEDezp09pPVm6fe">
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
                        <label for="username" class="col-sm-2 control-label no-padding-right">User Name</label>
                        <div class="col-sm-3">
                            <input id="username" class="form-control" placeholder="User Name" required="true" name="username" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label no-padding-right">Name</label>
                        <div class="col-sm-6">
                            <input id="name" class="form-control" placeholder="Nama" required="true" name="name" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pass" class="col-sm-2 control-label no-padding-right">Password</label>
                        <div class="col-sm-3">
                            <input id="password" class="form-control" placeholder="Password" required="true" minlength="6" name="password" type="password" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pass" class="col-sm-2 control-label no-padding-right">Confirm Password</label>
                        <div class="col-sm-3">
                            <input id="password_confirm" class="form-control" placeholder="Confirm Password" required="true" equalto="#password" name="password_confirm" type="password" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="roleid" class="col-sm-2 control-label no-padding-right">Role</label>
                        <div class="col-sm-4">
                            <select class="form-control select2 select2-hidden-accessible" id="role_id" style="width: 100%;" name="role_id" tabindex="-1" aria-hidden="true"><option value="1">SAdmin</option><option value="2">Admin</option><option value="3">Operator</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-role_id-container"><span class="select2-selection__rendered" id="select2-role_id-container" title="SAdmin">SAdmin</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="active" class="col-sm-2 control-label no-padding-right">Active</label>
                        <div class="col-sm-2">
                            <select class="form-control" name="is_active"><option value="0">Tidak</option><option value="1">Ya</option></select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer bg-gray-light">
                <input class="btn btn-success btn-sm btn-save" type="submit" value="Simpan">
                <button class="btn btn-default btn-sm" data-request="push" href="https://flipbook.tegalkab.go.id/ghadmin/user" type="button">Cancel</button>
            </div>
        </div>
        </form>
    </section>
</div>