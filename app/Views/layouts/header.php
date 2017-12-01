<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Clean Blog - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="/css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand">
        <?php 
        if (isset($_SESSION['userLogin'])) {
          echo 'Wellcome '.$_SESSION['userLogin']['username'];
        }
        ?>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/home/index">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/home/about">About</a>
          </li>
          <?php if (isset($_SESSION['userLogin'])): ?>
            <li class="nav-item">
              <a class="nav-link" href="/users/addBlog">Post Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/users/logout">Logout</a>
            </li>
            <?php else: ?>
              <li class="nav-item">
                <a class="nav-link" href="/users/login">Login</a>
              </li>
            <?php endif ?>
          </ul>
        </div>
      </div>
    </nav>
