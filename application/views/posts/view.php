<h2><?php echo $post['title'];?></h2>
<small class="post-date">Postes on:<?php echo $post['created_at'];?></small><br/>
<img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>">
<div class="post-body">
    <?php echo $post['body'];?>
</div>

<?php if($this->session->userdata('user_id') == $post['user_id']): ?>
<hr>
<div class="btn-group mr-2" role="group">
    <a class="btn btn-Warning" href="<?php echo base_url();?>posts/edit/<?php echo $post['slug'];?>">Edit</a>
</div>
<div class="btn-group mr-2" role="group">
    <a class="btn btn-danger" href="<?php echo base_url();?>posts/delete/<?php echo $post['id'];?>">Delete</a>
</div>
</form>
<?php endif; ?>
<hr>
<h3>Comments</h3>
<?php if ($comments): ?>
<?php foreach ($comments as $comment): ?>   
    <div class="well">
    <h5><?php echo $comment['body'];?> [by <strong><?php echo $comment['name'];?></strong>]</h5>
    </div>
     <?php endforeach; ?>
<?php else: ?>
    <p>No Comments to display</p>
<?php endif; ?>
<hr>
<h3>Add Comment</h3>
<?php echo validation_errors();?>
<?php echo form_open('comments/create/'.$post['id']);?>
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label>Body</label>
        <textarea name="body" class="form-control"></textarea>
    </div>
    <br>
    <input type="hidden" name="slug" value="<?php echo $post['slug'];?>">
    <input type="submit" class="btn btn-primary" value="Submit">
</form>