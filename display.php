<?php

session_start();
if (!isset($_SESSION['students'])) {
    $_SESSION['students'] = array();
}
if (isset($_POST['student'])) {
    # code...
    $new_student = $_POST['student'];
    array_push($_SESSION['students'], $new_student);
}


$defaultFontSize = isset($_COOKIE['fontSize']) ? $_COOKIE['fontSize'] : "16";
$defaultFontWeight = isset($_COOKIE['fontWeight']) ? $_COOKIE['fontWeight'] : "normal";
$defaultShowIpk = isset($_COOKIE['showIpk']) ? $_COOKIE['showIpk'] : "";
$defaultShowAlamat = isset($_COOKIE['showAlamat']) ? $_COOKIE['showAlamat'] : "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <style>
        .item {
            font-size: <?php echo $defaultFontSize ?>px;
            font-style: <?php echo $defaultFontWeight ?>;
        }

        .show-ipk {
            display: <?php if ($defaultShowIpk == 'Tidak') echo 'none' ?>;
        }

        .show-alamat {
            display: <?php if ($defaultShowAlamat == 'Tidak') echo 'none' ?>;
        }
    </style>
</head>

<body>
    <h1>Display</h1>
    <?php
    if (isset($_SESSION['students'])) {
        echo "<h3>Session data for all students:</h3>";
        foreach ($_SESSION['students'] as $key => $student) {

            echo $key + 1 . '.';
            echo "<p class='item'>NRP : " . $student[0] . "</p>";
            echo "<p class='item'>Nama : " . $student[1] . "</p>";
            echo "<p class='item show-alamat'>Adress : " . $student[2] . "</p>";
            echo "<p class='item show-ipk'>IPK : " . $student[3] . "</p>";
            echo "<br>";
        }
    }


    ?>
</body>

</html>