<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Users</li>
    </ol>
    <!-- Contents-->
    <div class="row">
        <?php echo $this->session->flashdata('msg'); ?>
        <?php foreach($users as $user): ?>
            <div class="col-md-4" style="margin-bottom: 20px;">
                <div class="card text-white bg-dark">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $user->fname; ?> <?php echo $user->lname; ?></h4>
                        <p class="card-text"><?php echo $user->email; ?></p>
                        <p class="card-text"><?php echo $user->uname; ?></p>
                        <a href="#" class="btn btn-warning">View Profile</a>
                        <a href="<?php echo site_url('view_users/e_id/'); ?><?php echo $user->id; ?>" class="btn btn-info">Edit User</a>
                        <a href="<?php echo site_url('view_users/r_id/'); ?><?php echo $user->id; ?>" class="btn btn-danger" title="Remove Course">X</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- /.container-fluid-->