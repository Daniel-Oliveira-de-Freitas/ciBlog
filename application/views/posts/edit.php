<h2><?= $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/create'); ?>
  <div class="form-group">
    <label> Title </label>
    <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $post['title'];?>">
  </div>
  <div class="form-group">
  <br>
    <label> Body </label>
    <textarea type="email" class="form-control" name="body" placeholder="Add Body"><?php echo $post['body'];?></textarea>
  </div>
  <br><br>
  <button type="submit" class="btn btn-success">Submit</button>
</form>