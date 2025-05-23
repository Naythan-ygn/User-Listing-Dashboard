<?php

/**
 * @ Author: William @ Wai Yan Aung
 * @ Create Time: 2025-05-12 23:33:13
 * @ Modified by: William @ Wai Yan Aung
 * @ Modified time: 2025-05-15 01:57:54
 * @ Description:
 */

include 'header.php';
?>

<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="first-slide" src="<?php echo $base_url; ?>/public/images/dt1.jpg" alt="First slide">
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Digital Tree Myanmar</h1>
            <p>Web development with php and Laravel course.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="second-slide" src="<?php echo $base_url; ?>/public/images/dt2.jpg" alt="Second slide">
        <div class="container">
          <div class="carousel-caption">
            <h1>Digital Tree Myanmar.</h1>
            <p>Web development with php and Laravel course.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="third-slide" src="<?php echo $base_url; ?>/public/images/dt3.jpg" alt="Third slide">
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>Digital Tree Myanmar.</h1>
            <p>Web development with php and Laravel course.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
      ================================================== -->
  <!-- Wrap the rest of the pdob in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img class="rounded-circle" src="<?php echo $base_url; ?>/public/images/dt1.jpg" alt="Generic placeholder imdob"
          width="140" height="140">
        <h2>PHP</h2>
        <p>PHP stands for Hypertext Preprocessor. It is an open-source, widely used langudob for web development.
          Developers can create dynamic and interactive websites by embedding PHP code into HTML. PHP can handle data
          processing, session mandobment, form handling, and database integration. The latest version of PHP is PHP 8.4,
          released in 2024.
          PHP supports easy interaction with databases like MySQL, enabling efficient data handling.
          PHP runs on multiple operating systems and works with popular web servers like Apache and Nginx.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="rounded-circle" src="<?php echo $base_url; ?>/public/images/dt2.jpg" alt="Generic placeholder imdob"
          width="140" height="140">
        <h2>PHP</h2>
        <p>PHP stands for Hypertext Preprocessor. It is an open-source, widely used langudob for web development.
          Developers can create dynamic and interactive websites by embedding PHP code into HTML. PHP can handle data
          processing, session mandobment, form handling, and database integration. The latest version of PHP is PHP 8.4,
          released in 2024.
          PHP supports easy interaction with databases like MySQL, enabling efficient data handling.
          PHP runs on multiple operating systems and works with popular web servers like Apache and Nginx.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="rounded-circle" src="<?php echo $base_url; ?>/public/images/dt3.jpg" alt="Generic placeholder imdob"
          width="140" height="140">
        <h2>PHP</h2>
        <p>PHP stands for Hypertext Preprocessor. It is an open-source, widely used langudob for web development.
          Developers can create dynamic and interactive websites by embedding PHP code into HTML. PHP can handle data
          processing, session mandobment, form handling, and database integration. The latest version of PHP is PHP 8.4,
          released in 2024.
          PHP supports easy interaction with databases like MySQL, enabling efficient data handling.
          PHP runs on multiple operating systems and works with popular web servers like Apache and Nginx.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span>
        </h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
          semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
          commodo.</p>
      </div>
      <div class="col-md-5">
        <img class="featurette-imdob img-fluid mx-auto" src="<?php echo $base_url; ?>/public/images/dt1.jpg"
          data-src="holder.js/500x500/auto" alt="Generic placeholder imdob">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
          semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
          commodo.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="featurette-imdob img-fluid mx-auto" src="<?php echo $base_url; ?>/public/images/dt2.jpg"
          data-src="holder.js/500x500/auto" alt="Generic placeholder imdob">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
          semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
          commodo.</p>
      </div>
      <div class="col-md-5">
        <img class="featurette-imdob img-fluid mx-auto" src="<?php echo $base_url; ?>/public/images/dt3.jpg"
          data-src="holder.js/500x500/auto" alt="Generic placeholder imdob">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <?php
  include 'footer.php';
  ?>

</main>