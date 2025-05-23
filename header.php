<?php
/**
 * @ Author: William @ Wai Yan Aung
 * @ Create Time: 2025-05-12 23:33:13
 * @ Modified by: William @ Wai Yan Aung
 * @ Modified time: 2025-05-17 19:36:19
 * @ Description:
 */
session_start();
include 'config/connection.php';
include 'config/utility.php';
$base_url = getBaseUrl();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="<?php echo $base_url; ?>/public/carousel.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="<?php echo $base_url; ?>/index.php">CRUD Sample 3</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo $base_url; ?>/index.php">Home <span
                                class="sr-only">(current)</span></a>
                    </li>

                    <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']): ?>

                        <!-- If the user is logged in, show the logout link                     -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $base_url; ?>/person/listing.php">Persons</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $base_url; ?>/person2/listing.php">Persons2</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $base_url; ?>/log/logout.php">Logout</a>
                        </li>

                    <?php else:  ?>
                        <!-- If the user is not logged in, show the login link -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $base_url; ?>/log/form.php">Login</a>
                        </li>
                    <?php endif; ?>
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>
    <br>

    <!-- start the div container -->
    <div class="container-fluid">