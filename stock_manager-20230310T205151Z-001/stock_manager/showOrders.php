<?php include("index.php");
require_once("classOrders.php");
require_once("classClient.php");
?>
<html>

<head>
  <title>Orders</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<main id="main" class="main">
  <div class="pagetitle">
    <h1>Orders</h1>
    </h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
        <li class="breadcrumb-item">Orders</li>
        <li class="breadcrumb-item active"></li>
      </ol>
    </nav>
  </div>
  <section class="section">

    <div class="row">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Orders List</h5>

          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Date</th>
                <th scope="col">Ordered Product</th>
                <th scope="col">Receipt</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <?php $lst2 = Orders::showOrders();  ?>
            <?php foreach ($lst2 as $ord) :
              $Clibyid = Client::SelectCliId($ord->cin);
              $_GET['cin'] = $Clibyid->cin;
            ?>
              <tr>
                <td><?= $_GET['cin'] ?></td>
                <td><?= $Clibyid->nom ?></td>
                <td><?= $ord->date ?></td>
                <td><a href="showAddedItems.php?idcom=<?= $ord->idcom ?> "><i class="bi bi-basket-fill text-dark " style="margin-left: 60px;"></a></td>
                <td><a href="pdf.php?idcom=<?= $ord->idcom ?>&cin=<?= $_GET['cin'] ?>"><i class="bi bi-file-pdf-fill text-dark" style="margin-left: 25px;"></a></td>
                <td><a href="delOrder.php?idcom=<?= $ord->idcom ?>"><i class="bi bi-trash-fill text-dark" style=" margin-left: 25px;"></a></td>
              </tr>

            <?php endforeach
            ?>
            <tbody>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</main>

</html>
<?php include("footer.php"); ?>