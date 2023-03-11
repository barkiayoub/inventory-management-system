<?php

if (isset($_GET['idcat'])) {
    $c = Category::getCat($_GET['idcat']);
}

require_once("classCategory.php");
?>
<?php include("index.php"); ?>
<html>

<head>
    <title>Products</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Category</h1>
        </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item">Category</li>
                <li class="breadcrumb-item active"></li>
            </ol>
        </nav>
    </div>
    <section class="section">

        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Categories List</h5>
                    <!-- <button type="submit" class="btn btn-primary">Add Category</button> -->
                    <a href="addCat.php" class="btn btn-primary">Add Category</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Category</th>
                                <th scope="col">Modify</th>
                                <th scope="col">Delete</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $lst = Category::showCategory();
                            ?>
                            <?php foreach ($lst as $cati) : ?>
                                <tr>

                                    <td><?= $cati->idcat ?></td>
                                    <td><?= $cati->nomcat ?></td>
                                    <td><a href="modCat.php?idcat=<?= $cati->idcat ?>"><i class="bi bi-pencil-square text-dark"></i></a></td>
                                    <td><a href="delCat.php?idcat=<?= $cati->idcat ?>"><i class="bi bi-trash-fill text-dark"></i></a></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>

</html>
<?php include("footer.php"); ?>