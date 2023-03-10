<?php
require_once("classDistributor.php");
?>
<?php include("index.php"); ?>
<html>

<head>
  <title>Distributors</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<main id="main" class="main">
  <div class="pagetitle">
    <h1>Distributors</h1>
    </h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
        <li class="breadcrumb-item">Distributors</li>
        <li class="breadcrumb-item active"></li>
      </ol>
    </nav>
  </div>
  <section class="section">

    <div class="row">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Distributors List</h5>
          <!-- <a href="addDistributor.php" class="btn btn-primary">Add Distributor</a> -->
          <table class="table table-striped">
            <thead>
              <tr>
                <!-- <th scope="col">#</th> -->
                <th scope="col">Distributor </th>
                <th scope="col">Email</th>
                <th scope="col">Telephone</th>
                <th scope="col">Adress</th>
                <th scope="col">Modify</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $lst = fournisseur::listefournisseur();
              ?>
              <?php foreach ($lst as $cati) : ?>
                <tr>
                  <!-- <td><?= $cati->idfour ?></td> -->
                  <td><?= $cati->nomf ?></td>
                  <td><?= $cati->emailf ?></td>
                  <td><?= $cati->num ?></td>
                  <td><?= $cati->adressf ?></td>
                  <td><a href="modDistributor.php?idfour=<?= $cati->idfour ?>"><i class="bi bi-pencil-square text-dark"></i></a></td>
                  <td><a href="delDistributor.php?idfour=<?= $cati->idfour ?>"><i class="bi bi-trash-fill text-dark"></a></td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</main>

</html>
<?php include("footer.php"); ?>