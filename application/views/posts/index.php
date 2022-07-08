<h2><?= $title ?></h2>
<?php foreach($posts as $post) : ?>
        <h3><?php echo $post['title']; ?></h3>
        <small class="post-date">Postes on:<?php echo $post['created_at'];?> in <strong><?php echo $post['name']?></strong></small><br/>
        <?php echo word_limiter($post['body'],60); ?>
        <br><br>
        <p><a class="btn btn-success" href="<?php echo site_url('/posts/'.$post['slug']);?>" >Read More</a></p>
    <?php endforeach; ?>