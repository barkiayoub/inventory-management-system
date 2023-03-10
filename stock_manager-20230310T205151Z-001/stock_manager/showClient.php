<?php
require_once("classClient.php");
?>
<?php include("index.php"); ?>
<html>

<head>
  <title>Clients</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<main id="main" class="main">
  <div class="pagetitle">
    <h1>Clients</h1>
    </h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
        <li class="breadcrumb-item">show clients</li>
        <li class="breadcrumb-item active"></li>
      </ol>
    </nav>
  </div>
  <section class="section">

    <div class="row">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Clients List</h5>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">CIN</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Telephone</th>
                <th scope="col">Adress</th>
                <th scope="col">Modify</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $lst = Client::listeclient();
              ?>
              <?php foreach ($lst as $cati) : ?>
                <tr>
                  <td><?= $cati->cin ?></td>
                  <td><?= $cati->nom ?></td>
                  <td><?= $cati->prenom ?></td>
                  <td><?= $cati->email ?></td>
                  <td><?= $cati->tel ?></td>
                  <td><?= $cati->adress ?></td>
                  <td><a href="modClient.php?cin=<?= $cati->cin ?>"><i class="bi bi-pencil-square text-dark"></i></a></td>
                  <td><a href="delCli.php?cin=<?= $cati->cin ?>"><i class="bi bi-trash-fill text-dark"></a></td>
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