<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trần Hoàng Kha - Diện tích và chu vi hình tròn</title>

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
    $chuvi = "";

    if (isset($_POST['r']) && !empty($_POST['r'])) {
        // Khai báo 1 hằng số có PI bằng 3.14
        define("PI", 3.14);

        $r = $_POST['r'];
        // Dien tích
        $dientich = PI * pow($r, 2);

        // chu vi
        $chuvi = 2 * PI * $r;
    }
    ?>

    <div id="wrap">
        <form action="dien_tich_chu_vi_hinh_tron.php" method="post" name="hinh_tron">

            <table>

                <tr style="background-color: #dc4800; color: #fff;">
                    <td colspan="2">
                        DIỆN TÍCH VÀ CHU VI HÌNH TRÒN
                    </td>
                </tr>

                <tr>
                    <td>
                        Bán kính:
                    </td>
                    <td>
                        <input type="number" name="r" required value="<?php echo isset($_POST['r']) ? $_POST['r'] : '' ?>" />
                    </td>
                </tr>

                <tr>
                    <td>
                        Diện tích:
                    </td>
                    <td>
                        <input type="number" required="true" value="<?php echo $dientich; ?>" style="background-color: #ffccca;" disabled />
                    </td>
                </tr>

                <tr>
                    <td>
                        Chu vi:
                    </td>
                    <td>
                        <input type="text" value="<?php echo $chuvi; ?>" required="true" style="background-color: #ffccca;" disabled />

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