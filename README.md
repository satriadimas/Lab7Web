# Lab7Web

**Nama : Satria Dimas Permana** <br>
**NIM : 312010450** <br>
**Kelas : TI.20.A2** <br>
**Matkul : Pemrograman Web** <br>

# BELAJAR PHP

## Instal Laragon

1. Unduh Laragon dari https://laragon.org/download/index.html
2. Uji coba apakah server sudah berkerja dengan baik
   http://127.0.0.1 atau http://localhost
3. Dokumen Website
   Semua file website tempatkan di direktori: \Laragon\www\

## MEMULAI PHP

Buat folder Lab7Web pada root directory web server (c:\Laragon\www)

Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL:
http://Lab7Web.test

## PHP DASAR

Buat file baru dengan nama php_dasar.php pada directory tersebut. Kemudian buat
kode seperti berikut.

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
        echo "Hello World";
    ?><br>

<!-- Variabel PHP  -->
<h1>Menggunakan Variabel</h1>
<?php
    $nim = "312010450";
    $nama = 'Satria Dimas Permana';
    echo "NIM : " . $nim . "<br>";
    echo "Nama : $nama";
?>

</body>
</html>
```

## OUTPUT

Kemudian untuk mengakses hasilnya melalui URL:
http://Lab7Web.test/php_dasar.php

## Predefine Variable

Buat File PHP dengan nama latihan2.php

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar 2</title>
</head>
<body>
    <!-- Predefine variabel -->
    <h1>Predefine Variabel</h1>
    <?php
        echo 'Selamat Datang ' . @$_GET['nama'];
    ?>
</body>
</html>
```

## OUTPUT

Kemudian untuk mengakses hasilnya melalui URL:
http://Lab7Web.test/Lab7Web/lab7web/latihan%202.php?nama=Dimas

## Membuat Form Input

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>
<h2>Form Input</h2>
<form method="post">
    <label>Nama: </label>
    <input type="text" name="nama">
    <input type="submit" value="kirim">
</form>

<?php
echo 'Selamat Datang ' . @$_POST['nama'];
?>
</body>
</html>
```

## OUTPUT

Kemudian Masukan Nama <br>

## OPERATOR PADA PHP

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator</title>
</head>
<body>
    <h2>Operator</h2>
    <?php
    $gaji = 1000000;
    $pajak = 0.1;
    $thp = $gaji - ($gaji*$pajak);
    echo "Gaji sebelum pajak = Rp. $gaji <br>";
    echo "gaji yang dibawa pulang = Rp. $thp";
    ?>

</body>
</html>
```

## OUTPUT

## KONDISI IF

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kondisi IF</title>
</head>
<body>
    <h2>Kondisi IF</h2>
    <?php
    $nama_hari = date("1");
    if ($nama_hari == "sunday") {
        echo "Mingggu";
    } elseif ($nama_hari == "Monday") {
        echo "Senin";
    } else {
        echo "Selasa";
    }
    ?>
</body>
</html>
```

## OUTPUT

## KONDISI SWITCH

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <h2>Kondisi Switch</h2>
    <?php
    $nama_hari = date("1");
    switch ($nama_hari) {
        case "sunday";
            echo "Minggu";
            break;
        case "Monday";
            echo "Senin";
            break;
        case "Tuesday";
            echo "Selasa";
            break;
        default:
        echo "Sabtu";
    }
    ?>

</body>
</html>
```

## OUTPUT

## PERULANGAN FOR

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOR</title>
</head>
<body>
    <h2>Perulangan For</h2>
    <?php
    echo "perulangan 1 sampai 10 <br />";
    for ($i=1; $i<=10; $i++) {
        echo "perulangan ke:" . $i . '<br />';
    }

    echo "perulangan menurun dari 10 ke 1 <br />";
    for ($i=10; $i>=1; $i--) {
        echo "perulangan ke: " . $i . '<br />';
    }
    ?>
</body>
</html>
```

## OUTPU

## PERULANGAN WHILE

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WHILE</title>
</head>
<body>
    <h2>perulangan While</h2>
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    while ($i<=10) {
        echo "perulangan ke: " . $i . '<br />';
        $i++;
    }
    ?>
</body>
</html>
```

## OUTPUT

## PERULANGAN DOWHILE

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOWHILE</title>
</head>
<body>
    <h2>Perulangan Dowhile</h2>
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    do {
        echo "perulangan ke: " . $i . '<br />';
        $i++;
    } while ($i<=10);
    ?>
</body>
</html>
```

## OUTPUT

## TUGAS

![Screenshot (270)](https://user-images.githubusercontent.com/73010098/168458673-1cdeecb8-b93d-4995-9535-4264ca6e5235.png)

Buatlah File PHP dengan nama form_input_data.php seperti contoh dibawah ini :

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form input data</title>
</head>
<body>
    <h2>Data Diri</h2>
    <form method="POST">
        <fieldset>
        <legend>Form Input data</legend>
        <div>
            <label>Nama :</label>
            <input type="text" name="nama" placeholder="Masukan Nama " />
        </div>
        <div>
            <label>Tanggal Lahir :</label>
            <input type="date" name="tgl_lahir" />
        </div>
        <div>
            <label>Pekerjaan :</label>
            <select name="pekerjaan">
                <option value="Web Developer">Web Developer</option>
                <option value="Karyawan Swasta">Karyawan Swasta</option>
                <option value="Guru">Guru</option>
                <option value="Lainnya">Lainnya</option>
            </select>
        </div>
        <div>
            <label>Gaji :</label>
            <select name="gaji">
                <option value="2.000.000 s/d 3.500.000">2.000.000 s/d 3.500.000</option>
                <option value="3.500.000 s/d 7.000.000">3.500.000 s/d 7.000.000</option>
                <option value="7.000.000 s/d 10.000.000">7.000.000 s/d 10.000.000</option>
                <option value="Lainnya">Lainnya</option>
            </select>
        </div>
        <div>
            <input type="submit" name="submit" value="Kirim" />
        </div>
        </fieldset>
    </form>

    <fieldset>
    <legend>Hasil</legend>
    <?php
    $nama = @$_POST['nama'];
    $tgl_lahir = @$_POST['tgl_lahir'];
    $pekerjaan = @$_POST['pekerjaan'];
    $gaji = @$_POST['gaji'];

    $tanggal_lahir = new DateTime(@$_POST['tgl_lahir']);
    $sekarang = new DateTime("today");
    if ($tanggal_lahir > $sekarang) {
    $umur = "0";
    }
    $umur = $sekarang->diff($tanggal_lahir)->y;

    echo "Nama = $nama <br>";
    echo "Umur = $umur tahun <br>";
    echo "Pekerjaan = $pekerjaan <br>";
    echo "Gaji = $gaji <br>";
    ?>
    </fieldset>
</body>
</html>
```

## OUTPUT

Lalu Isi Form dibawah ini

Maka akan Muncul hasil Seperti Dibawah ini
