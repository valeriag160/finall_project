<?php
include("../../functions/functions.php");
?>

<html>

<head>
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <!-- the header.php file -->
    <?php
    include "header.php"
    ?>

    <!-- the nav.php file -->
    <?php
    include "nav.php"
    ?>

    <div class="page-wrapper">
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="row">

                    <div class="col">
                        <div class="card radius-15">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4 class="mb-0">Brands</h4>
                                </div>
                                <hr>
                                <ul class="list-group">
                                    <?php
                                    getbrands();
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="row justify-content-center">
                            <?php
                             getpro();
                            ?>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card radius-15">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4 class="mb-0">Categories</h4>
                                </div>
                                <hr>
                                <ul class="list-group">
                                    <?php
                                    getcats();
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>