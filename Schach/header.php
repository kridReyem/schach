<!DOCTYPE html>
<!-- HTML5 -->
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>VSGO</title>

        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
        <link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/Schach/css/bootstrap.css">


    </head>
    
    <body>
        
<nav class="navbar navbar-inverse bg-primary">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li sclass="active"><a href="#">Spielbetrieb <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Verein <span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mannschaften <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="">1. Männer-Mannschaft</a></li>
            <li><a href="">2. Männer-Mannschaft</a></li>
            <li><a href="">...</a></li>
            </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jugend<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="">Jungs</a></li>
            <li><a href="">Mädels</a></li>
            <li><a href="">...</a></li>
            </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Impressum</a></li>
        <li><a href="#">Kontakt</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
      


<?php wp_head(); ?>
     <!-- End Header. Begin Template Content -->