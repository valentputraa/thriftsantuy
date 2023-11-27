<!-- delete_product.php -->
<?php
include("product_controller.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (deleteProduct($id)) {
        // Jika produk berhasil dihapus, arahkan kembali ke dashboard.php
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Gagal menghapus produk.";
    }
} else {
    echo "ID produk tidak valid.";
}
?>
