<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP dasar</title>
</head>
<body>
<?php
$nama_hari = date("l");
switch ($nama_hari) {
    case "Sunday":
        echo "Minggu";
        break;
        case "Monday":
        echo "Senin";
        break;
        case "Tuesday":
            echo "Selasa";
            break;
            default:
            echo "Sabtu";
        }
            ?>


</body>
</html>