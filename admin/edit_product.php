<?php
include("product_controller.php");

$id = $_GET['id'];

$detailProduct = getDetailProduct($id);

if (isset($_POST['edit'])) {
    if (editProduct($_POST, $detailProduct['nama']) > 0) {
        echo "berhasil";
        header("Location: dashboard.php");
    } else {
        echo "gagal";
    }

}
    





?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>



<body>
    <div class="row">
        <div class="col-2">
            <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="height: 100vh;">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <svg class="bi pe-none me-2" width="40" height="32">
                        <use xlink:href="#bootstrap" />
                    </svg>
                    <span class="fs-4">Admin</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="dashboard.php" class="nav-link link-body-emphasis" aria-current="page">
                            <i class="fa-solid fa-gauge bi pe-none me-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="ms-2 mb-2 nav-item">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                            <i class="fa-solid fa-caret-down be pe-none me-2"></i>
                            Product
                        </button>
                        <div class="collapse" id="orders-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="create_product.php" class="link-body-emphasis d-inline-flex text-decoration-none nav-link active text-white rounded">Create Product</a></li>
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

                <div class="col">
                    <h1>Form Edit Product</h1>
                </div>
                <hr>

                <div class="row">
                    <div class="col">

                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Produk</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $detailProduct['nama']  ?>">
                            </div>

                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori</label>
                                <select class="form-select" aria-label="Default select example" id="kategori" name="kategori">
                                    <option value="1" <?php if ($detailProduct['kategori'] == "hoodie") echo 'selected'; ?>>Hoodie</option>
                                    <option value="2" <?php if ($detailProduct['kategori'] == "baju") echo 'selected'; ?>>Baju</option>
                                    <option value="3" <?php if ($detailProduct['kategori'] == "celana") echo 'selected'; ?>>Celana</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga (Rp)</label>
                                <input type="number" class="form-control" id="harga" name="harga" value="<?= $detailProduct['harga'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="ukuran" class="form-label">Ukuran</label>
                                <input type="text" class="form-control" id="ukuran" name="ukuran" value="<?= $detailProduct['ukuran']?>">
                            </div>
                            <div class="mb-3">
                                <label for="deksripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="deksripsi" rows="3" name="deskripsi" ><?php echo $detailProduct['deskripsi']; ?></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary" name="edit">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://kit.fontawesome.com/0220be6f99.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>