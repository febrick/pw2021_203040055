<?php 
/*
    Febrick Hariyanto
    203040055
    github.com/febrick/pw2021_203040055
    jumat 10-11
*/
$items = [
    [
        "nama"=>"ASUS VIVOBOOK",
        "deskripsi"=>"ASUS VIVOBOOK A416MA N4020 RAM8GB HDD1TB INTEL UHD GRAPHIC WINDOWS.",
        "warnaDominan"=>"White",
        "harga"=>5549000,
        "jumlahStok"=>5,
        "foto"=>"asus1.jpg"
    ],
    [
        "nama"=>"ASUS VIVOBOOK A412FA",
        "deskripsi"=>"LAPTOP ASUS VIVOBOOK A412FA Intel Pentium Gold 5405U 14''FHD / 1TB HDD + 256 SSD/ WIN 10.",
        "warnaDominan"=>"Black",
        "harga"=>7499000,
        "jumlahStok"=>7,
        "foto"=>"asus2.jpg"
    ],
    [
        "nama"=>"LENOVO IP Slim 3i",
        "deskripsi"=>"LENOVO IdeaPad Slim 3i 14IIL05 i5-1035G1 8GB 512GB MX330 Win10 + OHS - Grey PFID, 8GB Standard.",
        "warnaDominan"=>"Grey",
        "harga"=>10399900,
        "jumlahStok"=>4,
        "foto"=>"lenovo1.jpg"
    ],
    [
        "nama"=>"LENOVO IP FLEX",
        "deskripsi"=>"LENOVO IP FLEX 3 11ADA05 ATHLON SILVER 3050E 4GB 256GB SSD UMA 11.6 HD TOUCH WIN10 OHS.",
        "warnaDominan"=>"Black",
        "harga"=>5999000,
        "jumlahStok"=>6,
        "foto"=>"lenovo2.jpg"
    ],
    [
        "nama"=>"ASUS VIVOBOOK K413EA",
        "deskripsi"=>"ASUS VIVOBOOK K413EA - i3 1115G4 - 8GB - 512GB SSD - FINGERPRINT - 14 FHD IPS - WIN10 - OFFICE.",
        "warnaDominan"=>"Hitam",
        "harga"=>8599000,
        "jumlahStok"=>3,
        "foto"=>"asus3.jpg"
    ],
    [
        "nama"=>"ASUS X441BA",
        "deskripsi"=>"LAPTOP ASUS X441BA AMD A4-9125 4GB 1TB DVD VGA R3 WIN10.",
        "warnaDominan"=>"Putih",
        "harga"=>5375000,
        "jumlahStok"=>8,
        "foto"=>"asus4.jpg"
    ],
    [
        "nama"=>"Notebook Lenovo Flex",
        "deskripsi"=>"Notebook Lenovo Flex 3-1JID TS 11,6/ATHLON SILVER 3050E/4 GB/ SSD 256 GB/WIN 10.",
        "warnaDominan"=>"Merah",
        "harga"=>5899000,
        "jumlahStok"=>6,
        "foto"=>"lenovo3.jpg"
    ],
    [
        "nama"=>"Lenovo T440p",
        "deskripsi"=>"Lenovo T440p - Gen 4 - Core i5 RAM 8GB /2TB/1TB/500GB/SSD 256GB/512GB - T440p i5 8GB.",
        "warnaDominan"=>"Hitam",
        "harga"=>5465000,
        "jumlahStok"=>8,
        "foto"=>"lenovo4.jpg"
    ],
    [
        "nama"=>"ASUS ROG Zephyrus",
        "deskripsi"=>"ASUS ROG Zephyrus GA401II-R75TA8W R7-4800HS/GTX1650Ti/8G/512G PCIe/120Hz.",
        "warnaDominan"=>"Putih",
        "harga"=>19260000,
        "jumlahStok"=>5,
        "foto"=>"asus5.jpg"
    ],
    [
        "nama"=>"ASUS ROG Strix",
        "deskripsi"=>"ASUS ROG Strix G G531GT-I765B1T.",
        "warnaDominan"=>"Hitam",
        "harga"=>19850000,
        "jumlahStok"=>5,
        "foto"=>"asus6.jpg"
    ]
];

function ubahRupiah($angka){
    return "Rp" . number_format($angka,2,',','.');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>
    
</head>
<body>
    <div class="container mt-5 mb-5">
        <table id="items" class="table is-bordered is-fullwidth is-hoverable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Deskripsi</th>
                    <th>Warna Dominan</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($items as $number => $item) : ?>
                    <tr>
                        <td><?= $number+1; ?></td>
                        <td><?= $item["nama"]; ?></td>
                        <td><?= $item["deskripsi"]; ?></td>
                        <td><?= $item["warnaDominan"]; ?></td>
                        <td><?= ubahRupiah($item["harga"]) ?></td>
                        <td><?= $item["jumlahStok"]; ?></td>
                        <td>
                            <figure class="image is-128x128">
                                <img src="Foto/<?= $item["foto"]; ?>" alt="">
                            </figure>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $('#items').DataTable();
        } );
    </script>
</body>
</html>