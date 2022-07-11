<h2><?= $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/update'); ?>
    <input type="hidden" name="id" value="<?= $post['id'] ?>"/>  
    <div class="form-group">
    <label> Title </label>
    <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $post['title'];?>">
  </div>
  <div class="form-group">
  <br>
    <label> Body </label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Add Body"><?php echo $post['body'];?></textarea>
  </div>
  <br>
<div class="form-group">
  <label> Category </label>
  <select name="category_id" class="form-control">
    <?php foreach ($categories as $category) : ?>
      <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
    <?php endforeach; ?>
  </select>
</div>
<br>
<div class="form-group">
  <label> Upload Image </label>
  <input type="file" name="userfile" size="20">

  <br><br>
  <button type="submit" class="btn btn-success">Submit</button>
</form>