<?php include("index.php"); ?>
<html>

<head>
    <title>Add Orders</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Add Orders</h1>
        </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item">Add Orders</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Place an Order</h5>
                        <form class="row g-3" method="POST" action="orders.php" enctype="multipart/form-data">
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label">Client</label>
                                <input type="hidden" class="form-control" name="cin" id="inputNanme4">
                                <select name="nom" id="cars" class="form-control ">
                                    <option selected disabled value="">Choose a costumer</option>

                                    <?php
                                    require_once("DAO.php");
                                    $dao = new DAO();
                                    $pdo = $dao->getPDO();
                                    $res = $pdo->prepare("SELECT cin,nom FROM client");
                                    $res->execute();
                                    while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                                        echo "<option name='$row[nom]'>$row[nom] </option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-12"> <label for="inputNanme4" class="form-label"></label>
                                <input type="hidden" class="form-control" name="idcom" id="inputNanme4">
                            </div>
                            <div class="col-12"> <label for="inputNanme4" class="form-label">Image</label>
                                <input type="date" class="form-control" name="date" id="inputNanme4">
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