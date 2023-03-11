<?php
include("index.php");
require_once("classDistributor.php");
if (isset($_GET['idfour'])) {
    $f = fournisseur::getfournisseur($_GET['idfour']);
}
?>
<html>

<body>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Distributor</h1>
            </h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item">Distributor</li>
                    <li class="breadcrumb-item active"></li>
                </ol>
            </nav>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Modify a Distributor</h5>
                            <form class="row g-3" method="POST" action="modDis.php">
                                <div class="col-12">
                                    <label for="inputNanme4" class="form-label">Name</label>
                                    <input value="<?= $f->nomf ?>" type="text" class="form-control" name="nomf" id="inputNanme4">
                                    <input value="<?= $f->idfour ?>" type="hidden" class="form-control" name="idfour" id="inputNanme4">
                                </div>
                                <div class="col-12">
                                    <label for="inputNanme5" class="form-label">Number</label>
                                    <input value="<?= $f->num ?>" type="text" class="form-control" name="num" id="inputNanme5">
                                </div>
                                <div class="col-12">
                                    <label for="inputNanme6" class="form-label">E-mail</label>
                                    <input value="<?= $f->emailf ?>" type="text" class="form-control" name="emailf" id="inputNanme6">
                                </div>
                                <div class="col-12">
                                    <label for="inputNanme7" class="form-label">Address</label>
                                    <input value="<?= $f->adressf ?>" type="text" class="form-control" name="adressf" id="inputNanme7">
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
</body>

</html>
<?php include("footer.php"); ?>