<?php
include('product_controller.php');
include('./db/db.php');
global $conn;

$product = getProduct();


?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <!-- DataTables CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.6/css/jquery.dataTables.css">

  <!-- DataTables JS -->
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">





</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-2">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="height: 100vh">
          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi pe-none me-2" width="40" height="32">
              <use xlink:href="#bootstrap" />
            </svg>
            <span class="fs-4">Admin</span>
          </a>
          <hr>
          <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
              <a href="#" class="nav-link active" aria-current="page">
                <i class="fa-solid fa-gauge bi pe-none me-2"></i>
                Dashboard
              </a>
            </li>
            <li class="mb-2 nav-item">
              <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                <i class="fa-solid fa-caret-down be pe-none me-2"></i>
                Product
              </button>
              <div class="collapse" id="orders-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                  <li><a href="create_product.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Create Product</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Update Product</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Delete Product</a></li>
                </ul>
              </div>
            </li>
            <li>
              <a href="#" class="nav-link link-body-emphasis">
                <svg class="bi pe-none me-2" width="16" height="16">
                  <use xlink:href="#grid" />
                </svg>
                Products
              </a>
            </li>
            <li>
              <a href="#" class="nav-link link-body-emphasis">
                <svg class="bi pe-none me-2" width="16" height="16">
                  <use xlink:href="#people-circle" />
                </svg>
                Customers
              </a>
            </li>
          </ul>
          <hr>
          <div class="dropdown">
            <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
              <strong>mdo</strong>
            </a>
            <ul class="dropdown-menu text-small shadow">
              <li><a class="dropdown-item" href="#">New project...</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="row mt-5">

          <div class="col-xl-3 col-md-6 col-sm-1 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                      All Products</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                      Sold</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col">
            <h1>Products</h1>
          </div>
        </div>
        <div class="row">
          <div class="col me-5">

            <table id="myTable" class="display">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Kategori</th>
                  <th>Harga</th>
                  <th>Ukuran</th>
                  <th>Deskripsi</th>
                  <th>Gambar 1</th>
                  <th>Gambar 2</th>
                  <th>Gambar 3</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($product as $product) : ?>
                  <tr>
                    <td><?= $product['nama']; ?></td>
                    <td><?= $product['kategori']; ?></td>
                    <td><?= $product['harga']; ?></td>
                    <td><?= $product['ukuran']; ?></td>
                    <td><?= $product['deskripsi']; ?></td>
                    <td>
                      <img src="./products/<?= str_replace(' ', '_', $product['nama']) ?>/<?= $product['gambar1'] ?>" alt="Gambar 1" class="product-image" width="200px">
                    </td>
                    <td>
                      <img src="./products/<?= str_replace(' ', '_', $product['nama']) ?>/<?= $product['gambar2'] ?>" alt="Gambar 1" class="product-image" width="200px">
                    </td>
                    <td>
                      <img src="./products/<?= str_replace(' ', '_', $product['nama']) ?>/<?= $product['gambar3'] ?>" alt="Gambar 1" class="product-image" width="200px">
                    </td>
                    <td>
                      <a href="edit_product.php?id=<?= $product['id'] ?>">
                        <button class="btn btn-primary">Edit</button>
                      </a>
                      <button class="btn btn-danger" onclick="confirmDelete(<?= $product['id'] ?>)">Delete</button>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>



          </div>
        </div>
      </div>
    </div>

  </div>

  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });

    function confirmDelete(productId) {
        if (confirm("Are you sure you want to delete this product?")) {
            // Panggil halaman yang memproses penghapusan
            window.location.href = "delete_product.php?id=" + productId;
        }
    }
  </script>

  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />

  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/0220be6f99.js" crossorigin="anonymous"></script>


</html>