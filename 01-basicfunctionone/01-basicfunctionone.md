time | author
-|-
2020-10-14 11:35:00 | [Fatkhan Zakia](https://github.com/FatkhanZakia)

# Description of variable $_GET[""];
An associative array of variables passed to the current script via the URL parameters (aka. query string). Note that the array is not only populated for GET requests, but rather for all requests with a query string.

# Examples
Example $_GET["nama"];

```php
    <?php

    $namaOrang = $_GET["nama"];

    echo "Halo " . $namaOrang . "<br>";
    echo $namaOrang . ", sudah makan?" . "<br>";
    echo $namaOrang . ", sudah mandi?" . "<br>";
    echo $namaOrang . ", sudah tidur?" . "<br>";
    echo $namaOrang . ", sudah olah raga?" . "<br>";
    echo "Sekarang adalah tanggal " . date("d-m-Y");
    ?>
```


> **Info**:
> Happy coding :)
