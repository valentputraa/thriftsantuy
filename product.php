<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <?php include('navbar.php') ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-4">
                <img src="./assets/baju1.jpg" alt="" srcset="" width="400px" class="rounded-start-4">
            </div>
            <div class="col-4">
            <img src="./assets/baju1.jpg" alt="" srcset="" width="400px">

            </div>
            <div class="col-4">
            <img src="./assets/baju1.jpg" alt="" srcset="" width="400px" class="rounded-end-4">
            </div>
        </div>
        <div class="row mt-3 border-top border-3">
            <div class="col mt-3">
                <h3>Polo shirt UNIQLO AIRism</h3>
                <h4>Rp 149,900</h4>
            </div>
        </div>
    </div>

<?php include('footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>