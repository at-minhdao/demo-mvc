<?php require_once $_SERVER['DOCUMENT_ROOT'].'/../app/Views/layouts/header.php'; ?>

<!-- Page Header -->
<header class="masthead" style="background-image: url('/img/contact-bg.jpg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="page-heading">
          <h1>Login</h1>
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
      <form name="sentMessage" id="contactForm" novalidate method="GET">
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username" id="name" required>
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Password</label>
            <input type="email" name="password" class="form-control" placeholder="Password" id="email" required>
            <p class="help-block text-danger"></p>
          </div>
        </div>
        
        <br>
        <div id="success"></div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary" id="sendMessageButton">Send</button>
          <p><a href="/home/register">Register!</a></p>
        </div>
      </form>
    </div>
  </div>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'].'/../app/Views/layouts/footer.php'; ?>