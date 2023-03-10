<?php include("index.php");
require_once("classSuplies.php");
require_once("classDistributor.php");
if (isset($_GET['idappro'])) {
    $app = Suplies::getSup($_GET['idappro']);
    $diss = fournisseur::getfour($_GET['idfour']);
}

?>
<html>

<head>
    <title>Suplies</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Suplies</h1>
        </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item">Suplies</li>
                <li class="breadcrumb-item active"></li>
            </ol>
        </nav>
    </div>
    <section class="section">

        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Suplies List</h5>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <!-- <th scope="col">#</th> -->
                                <th scope="col">Distributor</th>
                                <th scope="col">Date</th>
                                <th scope="col">Modify</th>
                                <th scope="col">Delete</th>
                                <th scope="col">Details</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $lst2 = Suplies::showSuplies();  ?>
                            <?php foreach ($lst2 as $sup) :
                                $fourbyid = fournisseur::SelectFourId($sup->idfour);
                            ?>
                                <tr>
                                    <td><?= $fourbyid->nomf ?></td>
                                    <td><?= $sup->datea ?></td>
                                    <td><a href="modSuply.php?idappro=<?= $sup->idappro ?>"><i class="bi bi-pencil-square text-dark"></a></td>
                                    <td><a href="delSup.php?idappro=<?= $sup->idappro ?>"><i class="bi bi-trash-fill text-dark"></a></td>
                                    <td><a href="showSuplyDetails.php?idappro=<?= $sup->idappro ?>"><i class="bi bi-basket-fill text-dark"></a></td>
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