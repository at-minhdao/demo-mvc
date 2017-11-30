<?php require_once $_SERVER['DOCUMENT_ROOT'].'/../app/Views/layouts/header.php'; ?>
<?php 
if (!isset($_SESSION['userLogin'])) {
  header('location: /home/index');
}
?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('/img/contact-bg.jpg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="page-heading">
          <h1>New Blog</h1>
          <!-- <span class="subheading">Have questions? I have answers.</span> -->
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Main Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <!-- <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p> -->
      <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
      <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
      <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
      <form action="/home/addBlog" name="sentMessage" id="contactForm" novalidate method="POST">
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Name</label>
            <input type="text" name="name" value="<?php echo isset($name) ? $name : ''; ?>" class="form-control" placeholder="Name" id="name" required>
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Preview text</label>
            <textarea name="preview_text" rows="3" class="form-control" placeholder="Preview text" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Detail text</label>
            <textarea name="detail_text" rows="10" class="form-control" placeholder="Detail text" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
        </div>
        
        <br>
        <div id="success">
        <?php 
          if (isset($msg)) {
            echo $msg;
          }
        ?>
        </div>
        <div class="form-group">
          <button type="submit" name="btnLogin" class="btn btn-primary" id="sendMessageButton">Post</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'].'/../app/Views/layouts/footer.php'; ?>