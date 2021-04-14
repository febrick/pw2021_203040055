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
    $informasi= htmlspecialchars($data['informasi produk']);
    $jenis= htmlspecialchars($data['jenis']);
    $harga= htmlspecialchars($data['harga']);
    $gambar= htmlspecialchars($data['gambar']);

    $query = "INSERT INTO elektronik VALUES
                ('','$gambar','$nama','$informasi','$jenis','$harga')";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

?>