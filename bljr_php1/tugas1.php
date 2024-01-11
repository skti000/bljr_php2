<?php
$hargaBarang = 1500000;
$jumlahBarang = 5;
$status = "<span style = 'color: green'>Process</span>";
if($hargaBarang > 100000 ){
    $totalHarga = $hargaBarang * $jumlahBarang - 50000;
}else{
    $totalHarga = $hargaBarang * $jumlahBarang;
}
echo "==== Program Menghitung Pembelian Produk ==== <br/>";
echo "Nama Barang : tws <earphone> <br/>";
echo "Kode Barang : P002 <br/>";
echo "Kategori    : Elektronik <br/>";
echo "Harga Barang: $hargaBarang <br/>";
echo "Jumlah Barang: $jumlahBarang <br/>";
echo "Total Harga : $totalHarga <br/>";
echo "Status : $status "
?>