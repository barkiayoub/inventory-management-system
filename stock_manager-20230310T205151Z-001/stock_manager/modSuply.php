<?php
include("index.php");
require_once("classDistributor.php");
require_once("classSuplies.php");
if (isset($_GET['idappro'])) {
    $app = Suplies::getSup($_GET['idappro']);
    $diss = fournisseur::getfour($_GET['idfour']);
}
?>
<html>

<head>
    <title>Add Suply</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Add Suply</h1>
        </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item">Add Suply</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add a Suply</h5>
                        <form class="row g-3" method="POST" action="modifySuply.php" enctype="multipart/form-data">
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label">Distributor</label>
                                <input type="hidden" class="form-control" name="idfour" id="inputNanme4">
                                <select name="nomf" id="cars" class="form-control ">
                                    <option selected disabled value="">Choose a Distributor</option>

                                    <?php
                                    require_once("DAO.php");
                                    $dao = new DAO();
                                    $pdo = $dao->getPDO();
                                    $res = $pdo->prepare("SELECT idfour,nomf FROM fournisseur");
                                    $res->execute();
                                    while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                                        echo "<option name='$row[nomf]'>$row[nomf] </option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-12"> <label for="inputNanme4" class="form-label"></label>
                                <input value="<?= $app->idappro ?>" type="hidden" class="form-control" name="idappro" id="inputNanme4">
                            </div>

                            <div class="col-12"> <label for="inputNanme4" class="form-label">Date</label>
                                <input value="<?= $app->datea ?>" type="date" class="form-control" name="datea" id="inputNanme4">
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