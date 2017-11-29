<?php require_once $_SERVER['DOCUMENT_ROOT'].'/../app/Views/layouts/header.php'; ?>



<!-- Page Header -->
<header class="masthead" style="background-image: url('/img/post-bg.jpg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-heading">
          <h1><?php echo $post['name'] ?></h1>
          <h2 class="subheading"><?php echo $post['preview_text'] ?></h2>
          <span class="meta">Posted by
            <a href="#">Start Bootstrap</a>
          on August 24, 2017</span>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Post Content -->
<article>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php echo $post['detail_text'] ?>
      </div>
    </div>
  </div>
</article>



<?php require_once $_SERVER['DOCUMENT_ROOT'].'/../app/Views/layouts/footer.php'; ?>