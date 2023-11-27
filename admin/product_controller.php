<?php
include('./db/db.php');

function addProduct($data)
{
    global $conn;

    if (isset($data['submit'])) {
        $nama = $data['nama'];
        $kategori = $data['kategori'];
        $harga = $data['harga'];
        $ukuran = $data['ukuran'];
        $deskripsi = $data['deskripsi'];
        $gambar1 = gambar($_FILES['gambar1'], $data['nama'], "1");
        $gambar2 = gambar($_FILES['gambar2'], $data['nama'], "2");
        $gambar3 = gambar($_FILES['gambar3'], $data['nama'], "3");


        $query = "INSERT INTO produk (nama, kategori_id, harga, ukuran, deskripsi, gambar1, gambar2, gambar3) VALUES ('$nama', '$kategori', '$harga', '$ukuran', '$deskripsi', '$gambar1', '$gambar2', '$gambar3')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
}

function gambar($file, $productName, $nameFile)
{
    $productFolder = "./products/" . strtolower(str_replace(' ', '_', $productName)) . "/";
    if (!file_exists($productFolder)) {
        mkdir($productFolder, 0777, true);
    }

    $hashedName = $productName . $nameFile . "." . pathinfo($file['name'], PATHINFO_EXTENSION);

    $targetDir = $productFolder;
    $targetFile = $targetDir . $hashedName;

    move_uploaded_file($file['tmp_name'], $targetFile);

    return $hashedName;
}

function getProduct()
{
    global $conn;

    $result = mysqli_query($conn, "SELECT 
    produk.id,
    produk.nama,
    kategori.nama AS kategori,
    produk.harga,
    produk.ukuran,
    produk.deskripsi,
    produk.gambar1,
    produk.gambar2,
    produk.gambar3
FROM
    produk
JOIN
    kategori ON produk.kategori_id = kategori.id");

    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getDetailProduct($id)
{
    global $conn;

    $result = mysqli_query($conn, "SELECT 
        produk.nama,
        kategori.nama AS kategori,
        produk.harga,
        produk.ukuran,
        produk.deskripsi
    FROM 
        produk
        JOIN
    kategori ON produk.kategori_id = kategori.id
    WHERE 
        produk.id = '$id'");

    return mysqli_fetch_assoc($result);
}

function editProduct($data, $nama_lama)
{
    global $conn;

    $id = $_GET['id'];

    if (isset($data['edit'])) {
        $nama_baru = $data['nama'];
        $kategori = $data['kategori'];
        $harga = $data['harga'];
        $ukuran = $data['ukuran'];
        $deskripsi = $data['deskripsi'];

        $query = "UPDATE produk 
            SET nama = '$nama_baru', kategori_id = $kategori, harga = $harga, ukuran = '$ukuran', deskripsi = '$deskripsi'
            WHERE id = $id";



        if ($nama_baru !== $nama_lama) {
            // Perbarui nama folder atau path gambar di database
            // ...

            // Pindahkan file gambar dari folder lama ke folder baru
            $old_path = "./products/" . strtolower(str_replace(' ', '_', $nama_lama)) . "/";
            $new_path = "./products/" . strtolower(str_replace(' ', '_', $nama_baru)) . "/";

            // Jika folder baru belum ada, buat folder baru
            if (!file_exists($new_path)) {
                mkdir($new_path, 0777, true);
            }

            // Pindahkan file gambar
            $files = glob("$old_path/*");
            foreach ($files as $file) {
                $file_name = basename($file);
                rename($file, "$new_path/$file_name");
            }

            if (file_exists($old_path)) {
                rmdir($old_path);
            }
        }
    }



    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function deleteProduct($id){
    global $conn;

    $nama = mysqli_fetch_column(mysqli_query($conn, "SELECT nama FROM produk WHERE id = '$id'"));
    
    
    $path = "./products/" . strtolower(str_replace(' ', '_', $nama)) . "/";
    
    
    $files = glob("$path*");
    foreach ($files as $file) {
        
        unlink($file);
    }
    
    if (file_exists($path)) {
        rmdir($path);
    }
    mysqli_query($conn, "DELETE FROM produk WHERE id = '$id'");



    return mysqli_affected_rows($conn);

}

