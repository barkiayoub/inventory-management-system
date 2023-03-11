<?php include("index.php");
require_once("classClient.php");
if (isset($_GET['cin'])) {
    $p = Client::getclient($_GET['cin']);
}

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
                        <h5 class="card-title">Modify a Client</h5>
                        <form class="row g-3" method="POST" action="modCli.php" enctype="multipart/form-data">

                            <div class="col-12"> <label for="inputNanme4" class="form-label">CIN</label>
                                <input value="<?= $p->cin ?>" type="text" class="form-control" name="cin" id="inputNanme4">
                            </div>
                            <div class="col-12"> <label for="inputNanme4" class="form-label">Nom</label>
                                <input value="<?= $p->nom ?>" type="text" class="form-control" name="nom" id="inputNanme4">
                            </div>
                            <div class="col-12"> <label for="inputNanme4" class="form-label">Prenom</label>
                                <input value="<?= $p->prenom ?>" type="text" class="form-control" name="prenom" id="inputNanme4">
                            </div>
                            <div class="col-12"> <label for="inputNanme4" class="form-label">Mail</label>
                                <input value="<?= $p->email ?>" type="text" class="form-control" name="email" id="inputNanme4">
                            </div>
                            <div class="col-12"> <label for="inputNanme4" class="form-label">Telephone</label>
                                <input value="<?= $p->tel ?>" type="text" class="form-control" name="tel" id="inputNanme4">
                            </div>
                            <div class="col-12"> <label for="inputNanme4" class="form-label">Adress</label>
                                <input value="<?= $p->adress ?>" type="text" class="form-control" name="adress" id="inputNanme4">
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