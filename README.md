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

![image](https://user-images.githubusercontent.com/20396585/168566174-ccae4d23-6146-4586-9469-1388d35f2247.png)

Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL:
http://Lab7Web.test

![image](https://user-images.githubusercontent.com/20396585/168566305-e546bcbb-9025-4e72-88fc-6f03e4028264.png)

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
![image](https://user-images.githubusercontent.com/20396585/168566624-45428b35-84bf-40b9-95e4-d018ae62549d.png)

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
http://Lab7Web.test/Lab7Web/lab7web/latihan_2.php?nama=Dimas
![image](https://user-images.githubusercontent.com/20396585/168566928-eb03f40e-e82e-4be2-b0e2-120b51aca8e0.png)

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

Kemudian Masukan Nama
![image](https://user-images.githubusercontent.com/20396585/168567174-31826cc2-c27d-4fd9-9981-b0ef24bb85b5.png)

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
![image](https://user-images.githubusercontent.com/20396585/168567431-e8ad4178-3380-40ad-9296-c05259c1a89f.png)

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
    $nama_hari = date("l");
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
![image](https://user-images.githubusercontent.com/20396585/168568724-c7115c43-eff2-4d44-ba97-ddc877d7b14b.png)

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
    $nama_hari = date("l");
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
![image](https://user-images.githubusercontent.com/20396585/168568595-648c62a9-6d97-42bf-bb4b-e982eabbf3ba.png)

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
    echo "<br />";
    echo "perulangan menurun dari 10 ke 1 <br />";
    for ($i=10; $i>=1; $i--) {
        echo "perulangan ke: " . $i . '<br />';
    }
    ?>
</body>
</html>
```

## OUTPU
![image](https://user-images.githubusercontent.com/20396585/168569158-975a5ed1-b4eb-4f66-95e0-57d93324fa23.png)

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
![image](https://user-images.githubusercontent.com/20396585/168569232-11454279-b30f-4a06-baeb-942a080326c8.png)

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
![image](https://user-images.githubusercontent.com/20396585/168569287-f8f021cc-9a16-49d0-a0be-66f164e5fca9.png)

## TUGAS

![image](https://user-images.githubusercontent.com/20396585/168565811-f4e3d4f7-0feb-476f-993c-61d5f67a244d.png)

Buatlah File PHP dengan nama form_input_data.php seperti contoh dibawah ini :

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form input data</title>

    <style>
        div {
            margin-top: 10px;
        }
    </style>
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
                <option value="Front-End Developer">Front-End Developer</option>
                <option value="Back-End Developer">Back-End Developer</option>
                <option value="Android Developer">Android Developer</option>
            </select>
        </div>
        <div>
            <label>Gaji :</label>
            <select name="gaji">
                <option value="4.000.000 s/d 6.000.000">4.000.000 s/d 6.000.000</option>
                <option value="6.000.000 s/d 8.000.000">6.000.000 s/d 8.000.000</option>
                <option value="8.000.000 s/d 15.000.000">8.000.000 s/d 15.000.000</option>
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
![image](https://user-images.githubusercontent.com/20396585/168569549-00650988-bade-4afb-a1a9-42ca76fb3bd8.png)

Maka akan Muncul hasil Seperti Dibawah ini
![image](https://user-images.githubusercontent.com/20396585/168569735-e4871f61-53f1-470b-9d6a-9c8012591c8a.png)
