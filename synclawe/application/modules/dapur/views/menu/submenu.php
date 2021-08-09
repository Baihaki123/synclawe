<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $title; ?>
      </h1>
    </section><br>
    <div class="row-lg-12">
        <div class="col-lg-12">
        
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?> 
            </div>
            <?php endif; ?>
            
            <?= $this->session->flashdata('message'); ?>

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal"><i class="fa fa-plus"> Add New Menu</i></a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Url</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Active</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($subMenu as $sm) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $sm['title']; ?></td>
                        <td><?= $sm['menu']; ?></td>
                        <td><?= $sm['url']; ?></td>
                        <td><?= $sm['icon']; ?></td>
                        <td><?= $sm['is_active']; ?></td>
                        <td>
                        <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editSubMenuModal<?php echo $sm['id'];?>"><i class="fa fa-edit"> Edit</i></a>
                        <a class="btn  btn-danger btn-sm" href="<?php echo base_url(); ?>dapur/Menu/hapusSubmenu/<?php echo $sm['id']; ?>" class="btn  btn-danger btn-sm" onclick="return confirm('Are you sure delete?');">
                        <i class="fa fa-trash "></i> Delete
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
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubMenuModalLabel">Add New Sub Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('dapur/menu/submenu'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Submenu title">
                    </div>
                    <div class="form-group">
                        <select name="menu_id" id="menu_id" class="form-control">
                            <option value="">Select Menu</option>
                            <?php foreach ($menu as $m) : ?>
                            <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" placeholder="Submenu url">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                            <label class="form-check-label" for="is_active">
                                Active?
                            </label>
                        </div>
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
<!--/Modal-->






<!-- Modal edit submenu -->
<?php $i = 1; ?>
<?php foreach ($subMenu as $sm) : ?>
<div class="modal fade" id="editSubMenuModal<?php echo $sm['id'];?>" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubMenuModalLabel">Edit Sub Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('login/menu/editSubmenu'); ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $sm['id'];?>">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" value="<?php echo $sm['title'];?>">
                    </div>
                    <div class="form-group">
                        <select name="menu_id" id="menu_id" class="form-control" value="<?php echo $m['menu_id'];?>">

                            <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                <?php echo $m['id'] == $m['menu'] ? "selected" : null ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" value="<?php echo $sm['url'];?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" value="<?php echo $sm['icon'];?>">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="is_active" name="is_active" checked value="<?php echo $sm['is_active'];?>">
                            <label class="form-check-label" for="is_active">
                                Active?
                            </label>
                        </div>
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
<!--/Modal edit submenu -->