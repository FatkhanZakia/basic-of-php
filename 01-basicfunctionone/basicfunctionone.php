<html>

<head>
    <title>Pengenalan Fungsi Dasar #1</title>
</head>

<body>
    <h1>Hello World!</h1>
    <?php

    $namaOrang = $_GET["nama"];

    echo "Halo " . $namaOrang . "<br>";
    echo $namaOrang . ", sudah makan?" . "<br>";
    // echo $namaOrang . ", sudah mandi?" . "<br>";
    // echo $namaOrang . ", sudah tidur?" . "<br>";
    echo $namaOrang . ", sudah olah raga?" . "<br>";
    echo "Sekarang adalah tanggal " . date("d-m-Y");
    ?>
</body>

</html>