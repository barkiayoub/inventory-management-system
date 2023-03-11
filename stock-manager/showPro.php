<?php include("index.php");
require_once("classProduct.php");
if (isset($_GET['idpro'])) {
  $p = Product::getPro($_GET['idpro']);
  $c = Category::getCat($_GET['idcat']);
}

?>
<html>

<head>
  <title>Products</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<main id="main" class="main">
  <div class="pagetitle">
    <h1>Products</h1>
    </h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
        <li class="breadcrumb-item">Products</li>
        <li class="breadcrumb-item active"></li>
      </ol>
    </nav>
  </div>
  <section class="section">

    <div class="row">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Products List</h5>
          <table class="table table-striped">
            <thead>
              <tr>
                <!-- <th scope="col">#</th> -->
                <th scope="col">Category</th>
                <th scope="col">Image</th>
                <th scope="col">Libelle</th>
                <th scope="col">Price per Unit (MAD)</th>
                <th scope="col">Selling Price (MAD)</th>
                <th scope="col">Stock</th>
                <th scope="col">Modify</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>

            <tbody>
              <?php $lst2 = Product::showProduit();  ?>
              <?php foreach ($lst2 as $prod) :
                $catbyid = Category::SelectCatId($prod->idcat);
              ?>
                <tr>
                  <!-- <td><?= $prod->idpro ?></td> -->
                  <td><?= $catbyid->nomcat ?></td>
                  <td><?= '<img src="uploads/' . $prod->image . '"  style="width: 50px;height:50px; border-radius 10px;"/>'; ?></td>
                  <td><?= $prod->libelle ?></td>
                  <td><?= $prod->prixu ?></td>
                  <td><?= $prod->prixv ?></td>
                  <td><?= $prod->stock ?></td>
                  <td><a href="modPro.php?idpro=<?= $prod->idpro ?>"><i class="bi bi-pencil-square text-dark" style=" margin-left: 25px;"></i></a></td>
                  <td><a href="delPro.php?idpro=<?= $prod->idpro ?>"><i class="bi bi-trash-fill text-dark" style=" margin-left: 25px;"></a></td>
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