<?php

 echo"Hello word";
 var_dump("Hello Dunia");
 echo 123;
 print_r("tes");

 $nama = "exoo";
 echo "<h1>$nama</h1>";

 $matapelajaran = "dasar-dasar RPL-2";

 $nama = "exo";
 echo "<h1>$nama<h1/>";

 $matapelajaran = "dasar-dasar RPL-2";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP di dalam HTML</title>
</head>
<body>
    <h1><?= $matapelajaran; ?></h1>
</body>
</html>


