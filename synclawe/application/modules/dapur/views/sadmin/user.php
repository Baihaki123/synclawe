<div class="content-wrapper" style="min-height: 467px;">
    <section class="content-header">
        <h1>
            User
            <small>list</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dapur/SAdmin') ?>"><span class="glyphicon glyphicon-home"></span></a></li>
            <li>user</a></li>
            <li>list</li>
        </ol>
    </section>
    <section class="content">
    <?= $this->session->flashdata('message'); ?>
        <div class="row">
            <div class="col-xs-12">
                <!-- <form method="POST" action="" accept-charset="UTF-8" class="form-horizontal" id="form-delete"> -->
                <div class="box box-primary box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">User</h3>
            
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <!-- <tr role="row">
                                <th>USERNAME</th>
                                <th>ROLE</th>
                                <th>ACTIVE</th>
                                <th>Aksi</th>
                            </tr> -->
                            <tr role="row">
                                <th width="10px" class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 50px;">#</th>
                                <th class="sorting" tabindex="0" aria-controls="simpledatatable" rowspan="1" colspan="1" aria-label="USERNAME: activate to sort column ascending" style="width: 502px;">USERNAME</th>
                                <th width="200px" class="sorting" tabindex="0" aria-controls="simpledatatable" rowspan="1" colspan="1" aria-label="ROLE: activate to sort column ascending" style="width: 200px;">ROLE</th>
                                <th width="60px" class="sorting" tabindex="0" aria-controls="simpledatatable" rowspan="1" colspan="1" aria-label="ACTIVE: activate to sort column ascending" style="width: 60px;">ACTIVE</th>
                                <th width="120px" class="sorting_disabled" rowspan="1" colspan="1" aria-label="ACT" style="width: 120px;">ACT</th>
                            </tr>  
                            </thead>
                            <tbody>      
                                <?php $i = 1; ?>                       
                                <?php foreach ($role as $r) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $r['email']; ?></td>
                                    <td><?= $r['role']; ?></td>
                                    <td><?= $r['is_active']; ?></td>
                                    <td>
                                    <a href="<?php echo base_url('dapur/SAdmin/getUser/').$r['id'];?>" class="btn btn-primary btn-xs" data-request="push">edit</a>
                                    <a href="<?php echo base_url(); ?>dapur/SAdmin/hapusUser/<?php echo $r['id']; ?>" class="btn btn-danger btn-xs btn-hapus" onclick="return confirm('Are you sure delete?');">delete</a>
                                    <a href="#" class="btn btn-warning btn-xs" data-request="push">RP</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                                <?php endforeach; ?>


                            </div></tbody>
                        </table>
                               
                       
                        </div>
                    </div>
                    <div class="box-footer">
                        <a class="btn  btn-success btn-sm" href="<?php echo base_url('dapur/SAdmin/userTambah'); ?>">
                        <i></i> Add Data
                        </a>  &nbsp;
                    </div>
                </div>
                <!-- </form> -->
            </div>
            </section>
        </div>












        <!-- <div class="content-wrapper" style="min-height: 467px;">
    <section class="content-header">
        <h1>
            User
            <small>list</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="https://flipbook.tegalkab.go.id/ghadmin/dashboard"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="https://flipbook.tegalkab.go.id/ghadmin/user">user</a></li>
            <li class="active">list</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <form method="POST" action="https://flipbook.tegalkab.go.id/ghadmin/user" accept-charset="UTF-8" class="form-horizontal" id="form-delete"><input name="_token" type="hidden" value="MymwTs8kFAfSZEtnJ1LnYIhEtWXJDmRkPpVZsfP7">
                <div class="box box-success box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">User</h3>
            
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                       
                    </div>
                    <div class="box-body" style="">
                        <div class="table-responsive">
                        <div id="simpledatatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="simpledatatable_length"><label><select name="simpledatatable_length" aria-controls="simpledatatable" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div></div><div class="col-sm-6"><div id="simpledatatable_filter" class="dataTables_filter"><label><input type="search" class="form-control input-sm" placeholder="" aria-controls="simpledatatable"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="simpledatatable" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="simpledatatable_info">
                            <thead>
                                <tr role="row"><th width="50px" class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 50px;"><label><input type="checkbox" id="checkall" name="checkall" class="checkall"><span class="text"></span></label></th><th class="sorting" tabindex="0" aria-controls="simpledatatable" rowspan="1" colspan="1" aria-label="USERNAME: activate to sort column ascending" style="width: 502px;">USERNAME</th><th width="200px" class="sorting" tabindex="0" aria-controls="simpledatatable" rowspan="1" colspan="1" aria-label="ROLE: activate to sort column ascending" style="width: 200px;">ROLE</th><th width="60px" class="sorting" tabindex="0" aria-controls="simpledatatable" rowspan="1" colspan="1" aria-label="ACTIVE: activate to sort column ascending" style="width: 60px;">ACTIVE</th><th width="120px" class="sorting_disabled" rowspan="1" colspan="1" aria-label="ACT" style="width: 120px;">ACT</th></tr>
                                <input type="hidden" name="_token" value="MymwTs8kFAfSZEtnJ1LnYIhEtWXJDmRkPpVZsfP7">                            </thead>
                            <tbody>
                                                                
                                                                
                                                                
                                                                
                                                            <tr role="row" class="odd">
                                    <td><label><input type="checkbox" name="id[]" class="checkme" value="1"><span class="text"></span></label></td>
                                    <td>eghie</td>
                                    <td>SAdmin</td>
                                    <td>1</td>
                                    <td align="center">
                                        <div class="btn-group active" role="group" aria-label="...">
                                            <a href="https://flipbook.tegalkab.go.id/ghadmin/user/1/edit" class="btn btn-primary btn-xs" data-request="push">edit</a>
                                            <a href="#" class="btn btn-danger btn-xs btn-hapus" data-url="https://flipbook.tegalkab.go.id/ghadmin/user" data-id="1">delete</a>
                                            <a href="https://flipbook.tegalkab.go.id/ghadmin/user/1/resetpass" class="btn btn-warning btn-xs" data-request="push">RP</a>
                                        </div>
                                    </td>
                                </tr><tr role="row" class="even">
                                    <td><label><input type="checkbox" name="id[]" class="checkme" value="2"><span class="text"></span></label></td>
                                    <td>wandi</td>
                                    <td>Admin</td>
                                    <td>1</td>
                                    <td align="center">
                                        <div class="btn-group active" role="group" aria-label="...">
                                            <a href="https://flipbook.tegalkab.go.id/ghadmin/user/2/edit" class="btn btn-primary btn-xs" data-request="push">edit</a>
                                            <a href="#" class="btn btn-danger btn-xs btn-hapus" data-url="https://flipbook.tegalkab.go.id/ghadmin/user" data-id="2">delete</a>
                                            <a href="https://flipbook.tegalkab.go.id/ghadmin/user/2/resetpass" class="btn btn-warning btn-xs" data-request="push">RP</a>
                                        </div>
                                    </td>
                                </tr><tr role="row" class="odd">
                                    <td><label><input type="checkbox" name="id[]" class="checkme" value="3"><span class="text"></span></label></td>
                                    <td>operator</td>
                                    <td>Operator</td>
                                    <td>1</td>
                                    <td align="center">
                                        <div class="btn-group active" role="group" aria-label="...">
                                            <a href="https://flipbook.tegalkab.go.id/ghadmin/user/3/edit" class="btn btn-primary btn-xs" data-request="push">edit</a>
                                            <a href="#" class="btn btn-danger btn-xs btn-hapus" data-url="https://flipbook.tegalkab.go.id/ghadmin/user" data-id="3">delete</a>
                                            <a href="https://flipbook.tegalkab.go.id/ghadmin/user/3/resetpass" class="btn btn-warning btn-xs" data-request="push">RP</a>
                                        </div>
                                    </td>
                                </tr><tr role="row" class="even">
                                    <td><label><input type="checkbox" name="id[]" class="checkme" value="4"><span class="text"></span></label></td>
                                    <td>jaya</td>
                                    <td>SAdmin</td>
                                    <td>1</td>
                                    <td align="center">
                                        <div class="btn-group active" role="group" aria-label="...">
                                            <a href="https://flipbook.tegalkab.go.id/ghadmin/user/4/edit" class="btn btn-primary btn-xs" data-request="push">edit</a>
                                            <a href="#" class="btn btn-danger btn-xs btn-hapus" data-url="https://flipbook.tegalkab.go.id/ghadmin/user" data-id="4">delete</a>
                                            <a href="https://flipbook.tegalkab.go.id/ghadmin/user/4/resetpass" class="btn btn-warning btn-xs" data-request="push">RP</a>
                                        </div>
                                    </td>
                                </tr></tbody>
                        </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="simpledatatable_info" role="status" aria-live="polite">Showing 1 to 4 of 4 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="simpledatatable_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="simpledatatable_previous"><a href="#" aria-controls="simpledatatable" data-dt-idx="0" tabindex="0">Prev</a></li><li class="paginate_button active"><a href="#" aria-controls="simpledatatable" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button next disabled" id="simpledatatable_next"><a href="#" aria-controls="simpledatatable" data-dt-idx="2" tabindex="0">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                    <div class="box-footer" style="">
                        <button class="btn btn-success btn-sm" data-request="push" href="https://flipbook.tegalkab.go.id/ghadmin/user/create" type="button">Add Data</button>
                        <button class="btn btn-danger btn-sm" style="display:none" id="deleteall" type="submit"><i class="fa fa-times"></i> Hapus Beberapa</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>
</div> -->