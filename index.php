<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>thriftsantuy</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="./style/index.css">
</head>

<body>
  <?php include('navbar.php') ?>
  <div class="container-fluid">

    <div id="carouselExample" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./assets/❤️_🩹.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./assets/Students in Sustainability_ Managing a Pop-up Thrift Shop.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="row mt-5">
      <div class="col text-center fw-bold">
        <h2>PRODUK TERBARU THRIFTSANTUY</h2>
      </div>
    </div>

    <div class="row mt-2 px-5">

      <div class="col-md-3 col-sm-4">
          <div class="cards" style="width: 18rem;">
          <a href="/thriftsantuy/product.php">
            <img src="./assets/baju1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="text-body-secondary">
                Baju
              </p>
              <p class="card-text">BAJU POLO <br> Rp. 50.000</p>
            </div>
          </div>
          </a>
      </div>

      <div class="col-md-3 col-sm-4">
          <div class="cards" style="width: 18rem;">
            <img src="./assets/baju1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="text-body-secondary">
                Baju
              </p>
              <p class="card-text">BAJU POLO <br> Rp. 50.000</p>
            </div>
          </div>
      </div>

      <div class="col-md-3 col-sm-4">
          <div class="cards" style="width: 18rem;">
            <img src="./assets/baju1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="text-body-secondary">
                Baju
              </p>
              <p class="card-text">BAJU POLO <br> Rp. 50.000</p>
            </div>
          </div>
      </div>

      <div class="col-md-3 col-sm-4">
          <div class="cards" style="width: 18rem;">
            <img src="./assets/baju1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="text-body-secondary">
                Baju
              </p>
              <p class="card-text">BAJU POLO <br> Rp. 50.000</p>
            </div>
          </div>
      </div>

    </div>

    
    <?php include('footer.php') ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>