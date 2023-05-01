<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>settings</title>
</head>

<body>
    <h1>Settings</h1>
    <h4>-- Input --</h4>
    <!-- form start -->
    <form action="input.php" method="POST">
        <!-- alamat input -->
        <p>Alamat Mahasiswa Wajib diisi ?</p>
        <!-- ya -->
        <label>
            <input type="radio" name="rdAlamat" value="Ya" required <?php if ($_COOKIE['rqAlamat'] == 'Ya') echo "checked" ?>>
            Ya
        </label>
        <!-- tidak -->
        <label>
            <input type="radio" name="rdAlamat" value="Tidak" required <?php if ($_COOKIE['rqAlamat']  == 'Tidak') echo "checked" ?>>
            Tidak
        </label>
        <!-- default ipk input -->
        <p>Nilai Default IPK Mahasiswa : </p>
        <input type="text" name="txtIPK" required value="<?php echo $_COOKIE['ipkDef']  ?>">
        <h4>-- Display --</h4>
        <!-- font size input -->
        <p>Ukuran Font : </p>
        <input type="text" name="txtFont" required value="<?php echo $_COOKIE['fontSize']  ?>">
        <!-- font weight input -->
        <p>Tampilan Font : </p>
        <select name="jenisFont" required>
            <option value="">-- Pilih Jenis Font --</option>
            <option value="bold" <?php if ($_COOKIE['fontWeight']  == 'bold') echo "selected" ?>>Bold</option>
            <option value="italic" <?php if ($_COOKIE['fontWeight']  == 'italic') echo "selected" ?>>Italic</option>
            <option value="underline" <?php if ($_COOKIE['fontWeight']  == 'underline') echo "selected" ?>>Underline
            </option>
        </select>
        <!-- show alamat input -->
        <p>Alamat Mahasiswa akan ditampilkan ?</p>
        <!-- ya -->
        <label>
            <input type="radio" name="rdTmplAlamat" value="Ya" required <?php if ($_COOKIE['showIpk']  == 'Ya') echo "checked" ?>>
            Ya
        </label>
        <!-- tidak -->
        <label>
            <input type="radio" name="rdTmplAlamat" value="Tidak" required <?php if ($_COOKIE['showIpk']  == 'Tidak') echo "checked" ?>>
            Tidak
        </label>
        <!-- show ipk input -->
        <p>IPK Mahasiswa akan ditampilkan ?</p>
        <!-- ya -->
        <label>
            <input type="radio" name="rdTmplIPK" value="Ya" required <?php if ($_COOKIE['showAlamat']  == 'Ya') echo "checked" ?>>
            Ya
        </label>
        <!-- tidak -->
        <label>
            <input type="radio" name="rdTmplIPK" value="Tidak" required <?php if ($_COOKIE['showAlamat']  == 'Tidak') echo "checked" ?>>
            Tidak
        </label>
        <br>
        <br>
        <br>
        <!-- button submit -->
        <input type="submit" value="Submit" name="submit">
    </form>
    <!-- form end -->
</body>

</html>