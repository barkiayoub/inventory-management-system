<?php include("index.php");
?>
<html>

<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Add Product</h1>
        </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item">Add Product</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add a Category</h5>
                        <form class="row g-3" method="POST" action="product.php" enctype="multipart/form-data">
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label">Category</label>
                                <input type="hidden" class="form-control" name="idcat" id="inputNanme4">
                                <select name="nomcat" id="cars" class="form-control ">
                                    <option selected disabled value="">Choose a Category</option>

                                    <?php
                                    require_once("DAO.php");
                                    $dao = new DAO();
                                    $pdo = $dao->getPDO();
                                    $res = $pdo->prepare("SELECT idcat,nomcat FROM categorie");
                                    $res->execute();
                                    while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                                        echo "<option name='$row[nomcat]'>$row[nomcat] </option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-12"> <label for="inputNanme4" class="form-label"></label>
                                <input type="hidden" class="form-control" name="idpro" id="inputNanme4" required>
                            </div>
                            <div class="col-12"> <label for="inputNanme4" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image" id="inputNanme4" required>
                            </div>
                            <div class="col-12"> <label for="inputNanme4" class="form-label">Libelle</label>
                                <input type="text" class="form-control" name="libelle" id="inputNanme4" required>
                            </div>
                            <div class="col-12"> <label for="inputNanme4" class="form-label">Price per unit</label>
                                <input type="text" class="form-control" name="prixu" id="inputNanme4" required>
                            </div>
                            <div class="col-12"> <label for="inputNanme4" class="form-label">Selling Price</label>
                                <input type="text" class="form-control" name="prixv" id="inputNanme4" required>
                            </div>
                            <div class="col-12"> <label for="inputNanme4" class="form-label">Stock</label>
                                <input type="text" class="form-control" name="stock" id="inputNanme4" required>
                            </div>
                            <div class="text-center"> <button type="submit" class="btn btn-primary">Submit</button>
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