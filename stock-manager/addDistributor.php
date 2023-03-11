<?php include("index.php");
require_once("classDistributor.php");
?>
<html>

<head>
    <title>Add Distributor</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Add Distributor</h1>
        </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item">Add Distributor</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add a Distributor</h5>
                        <form class="row g-3" method="POST" action="contrdistributor.php">
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label">Name</label>
                                <input type="text" class="form-control" name="nomf" id="inputNanme4">
                            </div>
                            <div class="col-12">
                                <label for="inputNanme5" class="form-label">Number</label>
                                <input type="text" class="form-control" name="num" id="inputNanme5">
                            </div>
                            <div class="col-12">
                                <label for="inputNanme6" class="form-label">Email</label>
                                <input type="text" class="form-control" name="emailf" id="inputNanme6">
                            </div>
                            <div class="col-12">
                                <label for="inputNanme7" class="form-label">Address</label>
                                <input type="text" class="form-control" name="adressf" id="inputNanme7">
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