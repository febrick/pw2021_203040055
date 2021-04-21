<?php
/*
Febrick Hariyanto
203040055
Shift Jum'at 10.00 - 11.00
*/
?>
<?php
function koneksi(){
    $koneksi = mysqli_connect("localhost", "root","");
    mysqli_select_db($koneksi, "febrickh");

    return $koneksi;

}

function query($sql){
    $koneksi = koneksi();
    $result = mysqli_query($koneksi, "$sql");

    $rows=[];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;

}

function tambah($data){
    $koneksi=koneksi();

    $nama= htmlspecialchars($data['nama']);
    $informasi= htmlspecialchars($data['informasi_produk']);
    $jenis= htmlspecialchars($data['jenis']);
    $harga= htmlspecialchars($data['harga']);
    $gambar= htmlspecialchars($data['gambar']);

    $query = "INSERT INTO elektronik VALUES
                ('','$gambar','$nama','$informasi','$jenis','$harga')";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function hapus($id){
    $koneksi = koneksi();

    mysqli_query($koneksi, "DELETE FROM elektronik WHERE id=$id");
    return mysqli_affected_rows($koneksi);
}

function ubah($data){
    $koneksi=koneksi();

    $id= htmlspecialchars($data['id']);
    $nama= htmlspecialchars($data['nama']);
    $informasi= htmlspecialchars($data['informasi_produk']);
    $jenis= htmlspecialchars($data['jenis']);
    $harga= htmlspecialchars($data['harga']);
    $gambar= htmlspecialchars($data['gambar']);

    $query = "UPDATE elektronik SET
                img='$gambar',
                nama='$nama',
                informasi_produk ='$informasi',
                jenis='$jenis',
                harga='$harga'
                WHERE id = $id";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

?>