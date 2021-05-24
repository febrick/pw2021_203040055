<?php
/*
Febrick Hariyanto
203040055
Shift Jum'at 10.00 - 11.00
*/
?>
<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "febrickh");
    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();
    $gambar = htmlspecialchars($data['img']);
    $name = htmlspecialchars($data['nama']);
    $informasi = htmlspecialchars($data['informasi_produk']);
    $jenis = htmlspecialchars($data['jenis_produk']);
    $harga = htmlspecialchars($data['harga_produk']);

    $query = "INSERT INTO buku
                VALUES
                ('', '$gambar', '$name', '$informasi', '$jenis', '$harga')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM elektronik WHERE id = $id");

    return mysqli_affected_rows($conn);
}
function ubah($data)
{
    $conn = koneksi();
    $id = htmlspecialchars($data['id']);
    $img = htmlspecialchars($data['img']);
    $name = htmlspecialchars($data['nama']);
    $informasi = htmlspecialchars($data['informasi']);
    $tipe = htmlspecialchars($data['tipe']);
    $harga = htmlspecialchars($data['harga']);

    $query = "UPDATE Buku Set('', '$img'='img', '$name'='nama', '$informasi'='informasi', '$tipe'='tipe', '$harga'='harga', WHERE id = $id)";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    // cek username udah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('username sudah di gunakan');
        </script>";
        return false;
    }
    // enkripsi password 
    $password = password_hash($password, PASSWORD_DEFAULT);
    // tambah user baru
    $query_tambah = "INSERT INTO user VaLUES('','$username','$password')";
    mysqli_query($conn, $query_tambah);
    return mysqli_affected_rows($conn);
}
?>