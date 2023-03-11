<?php include("index.php");
require_once("classOrders.php");
require_once("classClient.php");
require_once("classProduct.php");
require_once("classDetail.php");
?>
<html>

<head>
    <title>Orders</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Orders</h1>
        </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item">Orders</li>
                <li class="breadcrumb-item active"></li>
            </ol>
        </nav>
    </div>
    <section class="section">

        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ordered items List</h5>
                    <a href="addDetail.php?idappro=<?= $_GET['idappro'] ?>" class="btn btn-primary" style="margin-left: 87%;">Add an item</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <!-- <th scope="col">#</th> -->
                                <th scope="col">Image</th>
                                <th scope="col">Label</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $idappro = $_GET['idappro'];
                            $lst2 = suplyDetail::showDetails($idappro);
                            ?>
                            <?php foreach ($lst2 as $it) :
                                $Probyid = Product::SelectProId($it->idpro);
                                $_GET['idpro'] = $Probyid->idpro;
                            ?>
                                <tr>
                                    <!-- <td><?= $it->idappro ?></td> -->
                                    <td><?= '<img src="uploads/' . $Probyid->image . '"  style="width: 50px;height:50px; border-radius 10px;"/>'; ?></td>
                                    <td><?= $Probyid->libelle ?></td>
                                    <td><?= $it->qta_pro ?></td>
                                    <td><a href="delDetail.php?idappro=<?= $_GET['idappro'] ?>&idpro=<?= $it->idpro ?>"><i class="bi bi-trash-fill text-dark"></a></td>
                                </tr>

                            <?php endforeach
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>

</html>
<?php include("footer.php"); ?>