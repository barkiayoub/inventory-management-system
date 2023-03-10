<?php include("index.php");
require_once("classNote.php") ?>
<html>

<head>
    <title>Products</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active"></li>
            </ol>
        </nav>
    </div>
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Sales </h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bi bi-cart"></i></div>
                                    <div class="ps-3">
                                        <h6><?php
                                            // require "db_conn.php";
                                            require_once("DAO.php");
                                            $dao = new DAO();
                                            $pdo = $dao->getPDO();
                                            $result1 = $pdo->query("SELECT * FROM commande;");
                                            printf($result1->rowCount());
                                            ?></h6>
                                        <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">

                            <div class="card-body">
                                <h5 class="card-title">Total Revenue </h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bi bi-currency-dollar"></i></div>
                                    <div class="ps-3">
                                        <h6><?php
                                            require_once("DAO.php");
                                            $dao = new DAO();
                                            $pdo = $dao->getPDO();
                                            $result1 = $pdo->query("SELECT SUM(prixv*qte_produit) FROM contenir join produit;");
                                            printf($result1->fetchColumn());
                                            ?> MAD</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-12">
                        <div class="card info-card customers-card">

                            <div class="card-body">
                                <h5 class="card-title">Total Customers </h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bi bi-people"></i></div>
                                    <div class="ps-3">
                                        <h6><?php
                                            require_once("DAO.php");
                                            $dao = new DAO();
                                            $pdo = $dao->getPDO();
                                            $result1 = $pdo->query("SELECT * FROM client;");
                                            printf($result1->rowCount());
                                            ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body pb-3">
                        <h5 class="card-title">Notes</h5>
                        <div class="post-item clearfix">

                        </div>
                        <form method="POST" action="note.php">

                            <div class="news">
                                <?php
                                $lst = Note::showNote();
                                foreach ($lst as $not) :
                                    $_GET['idnote'] = $not->idnote;
                                    echo "<a href= " . "delNote.php?idnote=" . $_GET['idnote'] . " >x </a>" . $not->note . "<br>";
                                endforeach
                                ?>
                                <label for="note">Write a note:</label>
                                <input type="hidden" name="idnote" class="form-control">
                                <input type="text" name="note" class="form-control" required>
                                <button type="submit" class="badge btn-primary" style="margin-top: 10px;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body pb-3">
                        <h5 class="badge bg-danger" style="margin-top: 20px;">Be aware !</h5>
                        <div class="post-item clearfix">
                            <p>For keeping an eye on the stock</p>
                        </div>
                        <div class="news">
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

</html>
<?php include("footer.php"); ?>