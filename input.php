<?php
setcookie('rqAlamat', $_POST['rdAlamat'], time() + 86400);
setcookie('ipkDef', $_POST['txtIPK'], time() + 86400);
setcookie('fontSize', $_POST['txtFont'], time() + 86400);
setcookie('fontWeight', $_POST['jenisFont'], time() + 86400);
setcookie('showAlamat', $_POST['rdTmplAlamat'], time() + 86400);
setcookie('showIpk', $_POST['rdTmplIPK'], time() + 86400);

$defaultRdAlamat = isset($_COOKIE['rqAlamat']) ? $_COOKIE['rqAlamat'] : "";
$defaultTxtIpk = isset($_COOKIE['ipkDef']) ? $_COOKIE['ipkDef'] : "";
if (!isset($_COOKIE['rqAlamat']) || !isset($_COOKIE['ipkDef'])) {
    header("location:settings.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
</head>

<body>
    <h1>Input student identity</h1>
    <p>Input your identity :</p>

    <form action="display.php" method="post">

        <!-- nrp input -->
        <p>NRP : </p>
        <input type="text" name="student[]" required value="">

        <!-- nama input -->
        <p>Name : </p>
        <input type="text" name="student[]" required value="">

        <!-- alamat input -->
        <p>Adress : </p>
        <textarea name="student[]" cols="30" rows="10"
            <?php if ($defaultRdAlamat == 'Ya') echo "required" ?>></textarea>

        <!-- ipk input -->
        <p>IPK : </p>
        <input type="text" name="student[]" required value="<?php echo $defaultTxtIpk ?>">

        <!-- button submit -->
        <br>
        <br>
        <input type="submit" value="Submit" name="submit">

    </form>

</body>

</html>