<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><?php if(isset($users)){ echo "Edit User"; }else{ echo "Add User"; } ?></li>
    </ol>
    <!-- Contents-->
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <?php echo $this->session->flashdata('msg'); ?>
            <div class="card text-white mb-3">
                <div class="card-header bg-info"><?php if(isset($users)){ echo "Edit a User"; }else{ echo "Add a User"; } ?></div>
                <div class="card-body bg-info">
                    <form action="<?php if(isset($users)){ echo site_url('view_users/edit/'.$users[0]->id);}else{ echo site_url('add_user'); } ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="fname">Enter First name</label>
                            <input type="text" class="form-control" id="fname" placeholder="First name" name="fname" <?php if(isset($users)){ echo 'value="'.$users[0]->fname.'"'; } ?>>
                        </div>
                        <div class="form-group">
                            <label for="lname">Enter Last name</label>
                            <input type="text" class="form-control" id="lname" placeholder="Last name" name="lname" <?php if(isset($users)){ echo 'value="'.$users[0]->lname.'"'; } ?>>
                        </div>
                        <div class="form-group">
                            <label for="uname">Enter Username</label>
                            <input type="text" class="form-control" id="uname" placeholder="Username" name="uname" <?php if(isset($users)){ echo 'value="'.$users[0]->uname.'"'; } ?>>
                        </div>
                        <div class="form-group">
                            <label for="email">Enter Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email" <?php if(isset($users)){ echo 'value="'.$users[0]->email.'"'; } ?>>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Enter Password</label>
                            <input type="password" class="form-control" id="pwd" name="pwd" <?php if(isset($users)){ echo 'value="'.$users[0]->pwd.'"'; } ?>>
                        </div>
                        <div class="form-group">
                            <label for="role">Enter Role</label>

                            <input type="text" class="form-control" id="role" placeholder="Instructor/Student" name="role" <?php if(isset($users)){ echo 'value="'.$users[0]->role.'"'; } ?>>
                        </div>

                        <button type="submit" name="add_user" value="add_user" class="btn btn-warning pull-right"><?php if(isset($course)){ echo 'Update User'; }else{ echo 'Add User'; }?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid-->