<html lang="pt-br">

<head>
  <title>ciBlog</title>
  <link rel="stylesheet" href="https://bootswatch.com/5/minty/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <script src="http://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url(); ?>"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ciBlog</font></font></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Alternar de navegação">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
      <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Home</font></font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>about"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">About</font></font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>posts"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Blog</font></font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>categories"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Categories</font></font></a>
        </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>users/register"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Register User</font></font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>posts/create"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Create Post</font></font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>categories/create"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Create Category</font></font></a>
        </li>
          </li>
      </div>
    </div>
  </nav>

  <div class="container">
    <!-- Flash messages -->
    <?php if($this->session->flashdata('user_registered')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('post_created')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('post_updated')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('category_created')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('post_deleted')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
    <?php endif; ?>