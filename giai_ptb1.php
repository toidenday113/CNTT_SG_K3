<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải Phương Trình Bậc Nhất</title>

    <style>
        #wrap {
            width: 250px;
            margin: auto;
        }

        table {
            background-color: #feebca;
            margin: auto;
        }

        input {
            width: 30px;
        }
    </style>

</head>

<body>

</body>

<?php
$soa = null;
$sob = null;
$nghiem = null;

//print_r($_POST);

if (isset($_POST['soa']) && isset($_POST['sob'])) {

    $soa = $_POST["soa"];
    $sob = $_POST["sob"];

    //echo $soa;
    // Toán tử so sanh  == 
    if ($soa == 0) {
        if ($sob == 0) {
            $nghiem = "Phương trình có vô số nghiệm";
        } else {
            $nghiem = "Phương trình vô nghiệm";
        }
    } else {
        //echo $soa;
        $nghiem = "x = -" . ($sob / $soa);
    }
}

?>

<div id="wrap">
    <form action="giai_ptb1.php" method="post">
        <table>
            <tr>
                <td colspan="2">
                    GẢI PHƯƠNG TRÌNH BẬC NHẤT
                </td>
            </tr>

            <tr>
                <td>
                    Phương trình:
                </td>
                <td>
                    <input type="text" name="soa" value="<?php echo $soa; ?>" />
                    x +
                    <input type="text" name="sob" value="<?php echo $sob; ?>" />
                    =0
                </td>
            </tr>

            <tr>
                <td>
                    Nghiệm:
                </td>
                <td>
                    <input type="text" style="width: 90%;" value="<?php echo $nghiem; ?>" disabled />
                </td>
            </tr>

            <tr style=" text-align: center;">
                <td colspan="2"><button>Giải phương trình</button></td>
            </tr>
        </table>
    </form>
</div>

</html>