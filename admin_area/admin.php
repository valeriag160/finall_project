<?php
include "assets/php/functions_admin.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <!-- wrapper -->
    <div class="wrapper">

        <!--header-->
        <header>
            <?php
            include "assets/php/header.php"
            ?>
        </header>
        <!--end header-->

        <!--nav-->
        <?php
        include "assets/php/nav.php"
        ?>
        <!--end nav-->

        <div class="page-wrapper">
            <!--page-content-wrapper-->
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
                            <div class="row ">
                                <?php
                                getpro_list();
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>