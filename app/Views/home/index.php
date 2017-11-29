<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/../app/Views/layouts/header.php';
?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('/img/home-bg.jpg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>August Blog</h1>
          <span class="subheading">A Blog Theme - PHP Internship</span>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Main Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <?php foreach ($arPosts as $post): ?>

        <div class="post-preview">
          <a href="/home/post/<?php echo $post['id'] ?>">
            <h2 class="post-title">
              <?php echo $post['name'] ?>
            </h2>
            <h3 class="post-subtitle">
              <?php echo $post['preview_text'] ?>
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#"><?php echo $post['user_id'] ?></a>
            <?php echo $post['date_create'] ?>
          </p>
        </div>
      <?php endforeach ?>
      <!-- Pager -->
      <div class="clearfix">
        <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
      </div>
    </div>
  </div>
</div>

<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/../app/Views/layouts/footer.php';
?>