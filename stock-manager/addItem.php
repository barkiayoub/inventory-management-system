<?php
include("index.php");
require_once("classOrders.php");
require_once("classClient.php");


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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add an item to the order</h5>
                        <form class="row g-3" method="POST" action="item.php" enctype="multipart/form-data">
                            <div class="col-12">

                                <label for="inputNanme4" class="form-label">Products</label>
                                <input type="hidden" class="form-control" name="idpro" id="inputNanme4">
                                <select name="libelle" id="cars" class="form-control ">
                                    <option selected disabled value="">Choose an item</option>

                                    <?php
                                    require_once("DAO.php");
                                    $dao = new DAO();
                                    $pdo = $dao->getPDO();
                                    $res = $pdo->prepare("SELECT idpro,libelle FROM produit");
                                    $res->execute();
                                    while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                                        echo "<option name='$row[libelle]'>$row[libelle] </option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label"></label>
                                <input type="hidden" class="form-control" name="idcom" value="<?= $_GET['idcom'] ?>" id="inputNanme4">
                            </div>

                            <div class="col-12"> <label for="inputNanme4" class="form-label">Quantity</label>
                                <input type="text" class="form-control" name="qte_produit" id="inputNanme4">
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

</html>
<?php include("footer.php"); ?>