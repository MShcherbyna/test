<html
<head>
    <title>ciBlog</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
    <script src="http://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo base_url(); ?>">ciBlog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02"
            aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="<?php echo base_url(); ?>">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="<?php echo base_url(); ?>posts">Posts </a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a class="nav-link" href="<?php echo base_url();?>posts/create">Create post</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
