<h2><?php echo $post['title'];?></h2>
<small class="post-date">Postes on:<?php echo $post['created_at'];?></small><br/>
<img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>">
<div class="post-body">
    <?php echo $post['body'];?>
</div>
<hr>
<a class="btn btn-warning pull-left" href="edit/<?php echo $post['slug']; ?>"> Edit</a>
<?php echo form_open('/posts/delete/'.$post['id']);?>
    <input type="submit" class="btn btn-danger" value="Delete">
</form>