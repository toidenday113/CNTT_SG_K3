<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trần Hoàng Kha</title>

    <style>
        #wrap {
            margin: auto;
            width: 400px;
        }

        table {
            margin: auto;
            background-color: #feebca;
        }
    </style>
</head>

<body>

    <?php
    $dientich = "";
    if (
        !empty($_POST["dai"])
        && !empty($_POST["rong"])
    ) {

        $dai = $_POST['dai'];
        $rong = $_POST['rong'];

        // Diện tích hình chữ nhật ( dai * rong)
        $dientich = $dai * $rong;
    }
    ?>

    <div id="wrap">
        <form action="dien_tich_hcn.php" method="post" name="hinh_chu_nhat">

            <table>

                <tr style="background-color: #dc4800; color: #fff;">
                    <td colspan="2">
                        DIỆN TÍCH HÌNH CHỮ NHẬT
                    </td>
                </tr>

                <tr>
                    <td>
                        Chiều dài:
                    </td>
                    <td>
                        <input type="number" name="dai" required value="<?php echo isset($_POST['dai']) ? $_POST['dai'] : '' ?>" />
                    </td>
                </tr>

                <tr>
                    <td>
                        Chiều rộng:
                    </td>
                    <td>
                        <input type="number" name="rong" required="true" value="<?php echo isset($_POST['rong']) ? $_POST['rong'] : '' ?>" />
                    </td>
                </tr>

                <tr>
                    <td>
                        Diện tích:
                    </td>
                    <td>
                        <input type="text" name="dien_tich" value="<?php echo $dientich; ?>" required="true" style="background-color: #ffccca;" disabled />
                    </td>
                </tr>

                <tr style="text-align: center;">
                    <td colspan="2">
                        <input type="submit" value="Tính" />
                    </td>
                </tr>
            </table>
        </form>


    </div>

</body>

</html>