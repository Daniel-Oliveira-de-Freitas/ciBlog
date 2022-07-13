<?php echo form_open('users/login'); ?>
<div class="row justify-content-center">
    <div class="col-md-4 col-md-offset-4">
    <br><br><br><br><br>
        <h1 class="text-center"><?php echo $title; ?></h1>
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus>
        </div>
        <br>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
        </div>
        <br>
        <button type="submit" class="btn btn-primary col-md-12 col-md-offset-12">Login</button>
    </div>
</div>



<?php echo form_close(); ?>