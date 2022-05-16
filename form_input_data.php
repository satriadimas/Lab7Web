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
        <legend>Form Input</legend>
        <div>
            <label>Nama :</label>
            <input type="text" name="nama" placeholder="Masukan Nama Anda" />
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
    <legend>Report</legend>
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
    
    echo "<div>Nama = $nama </div>";
    echo "<div>Umur = $umur tahun </div>";
    echo "<div>Pekerjaan = $pekerjaan </div>";
    echo "<div>Gaji = $gaji </div>";
    ?>
    </fieldset>
</body>
</html>