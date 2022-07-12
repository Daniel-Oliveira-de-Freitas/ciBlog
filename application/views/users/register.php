<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
<div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control" placeholder="name">
</div>
<br>
<div class="form-group">
    <label>Zipcode</label>
    <input type="text" name="zipcode" class="form-control" placeholder="zipcode">
</div>
<br>
<div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control" placeholder="email">
</div>
<br>
<div class="form-group">
    <label>Username</label>
    <input type="text" name="username" class="form-control" placeholder="username">
</div>
<br>
<div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" placeholder="password">
</div>
<br>
<div class="form-group">
    <label>Confirm Password</label>
    <input type="password" name="password2" class="form-control" placeholder="password">
</div>
<br>
<button type="submit" class="btn btn-primary">Submit</button>
<?php echo form_close(); ?>
