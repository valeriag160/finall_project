<?php include "assets/php/functions_admin.php" ?>

<head>
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="wrapper">
        <header>
            <?php
            include "assets/php/header.php"
            ?>
        </header>

        <?php
        include "assets/php/nav.php"
        ?>

        <div class="page-wrapper">
            <div class="page-content-wrapper">
                <div class="page-content">

                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="card-title">
                                <h4 class="mb-0">General Data</h4>
                            </div>
                            <hr />
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Name" id="name">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Price" id="price">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Description" id="description">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Key words" id="key_words">
                            </div>
                        </div>
                    </div>

                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="card-title">
                                <h4 class="mb-0">Image</h4>
                            </div>
                            <hr />
                            <form>
                                <input id="image-uploadify" type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
                            </form>
                        </div>
                    </div>

                </div>

                <div class="card radius-15">
                    <div class="card-body">
                        <div class="card-title">
                            <h4 class="mb-0">Brand and Categories</h4>
                        </div>
                        <hr />
                        <div class="form-group">
                            <select class="form-control" id="categories">
                                <option value="">Categories</option>
                                <?php
                                get_cat_option(); 
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="brands">
                                <option value="">Brand</option>
                                <?php
                                get_brands_options(); 
                                ?>
                            </select>
                        </div>
                    </div>
                </div>

                <button type="button" class="btn btn-light-success m-1 px-5 radius-30" onclick="add_pr()">Add</button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

<script>
    $(document).ready(function() {
        $('#image-uploadify').imageuploadify();
    });
</script>


</html>