<?php include("index.php"); ?>
<html>

<head>
    <title>Add Client</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Add Client</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item">Add Client</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add a Costumer</h5>
                        <form class="row g-3" method="POST" action="contrclient.php">
                            <div class="col-12"> <label for="inputNanme4" class="form-label">CIN</label> <input type="text" class="form-control" name="cin" id="inputNanme4"></div>
                            <div class="col-12"> <label for="inputNanme5" class="form-label">First Name</label> <input type="text" class="form-control" name="nom" id="inputNanme5"></div>
                            <div class="col-12"> <label for="inputNanme6" class="form-label">Last Name</label> <input type="text" class="form-control" name="prenom" id="inputNanme6"></div>
                            <div class="col-12"> <label for="inputNanme7" class="form-label">E-Mail</label> <input type="text" class="form-control" name="email" id="inputNanme7"></div>
                            <div class="col-12"> <label for="inputNanme8" class="form-label">Phone number</label> <input type="text" class="form-control" name="tel" id="inputNanme8"></div>
                            <div class="col-12"> <label for="inputNanme9" class="form-label">Address</label> <input type="text" class="form-control" name="adress" id="inputNanme9"></div>

                            <div class="text-center"> <button type="submit" class="btn btn-primary">Submit</button> <button type="reset" class="btn btn-secondary">Reset</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<script src="assets/js/apexcharts.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/chart.min.js"></script>
<script src="assets/js/echarts.min.js"></script>
<script src="assets/js/quill.min.js"></script>
<script src="assets/js/simple-datatables.js"></script>
<script src="assets/js/tinymce.min.js"></script>
<script src="assets/js/validate.js"></script>
<script src="assets/js/main.js"></script>

</html>
<?php include("footer.php"); ?>