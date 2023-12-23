<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Tiền Điện</title>

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
    $chuho = "";
    $chisocu = "";
    $chisomoi = "";
    $dongia = "";
    $thanhtien = "";

    if (
        isset($_POST['chuho'])
        && isset($_POST['chisocu'])
        && isset($_POST['chisomoi'])
        && isset($_POST['dongia'])
    ) {
        $chisocu = $_POST['chisocu'];
        $chisomoi = $_POST['chisomoi'];
        $dongia = $_POST['dongia'];
        $chuho = $_POST['chuho'];

        // Cách 1
        //$thanhtien = ($_POST['chisomoi'] - $_POST['chisocu'])*$_POST['dongia'];

        // Cách 2
        $thanhtien = ($chisomoi - $chisocu) * $dongia;
    }
    ?>

    <div id="wrap">
        <form action="tinhtiendien.php" method="post" name="tinhtiendien"> <!-- Thẻ mở -->

            <table>

                <tr style="background-color: #dc4800; color: #fff; text-align: center;">
                    <td colspan="2">
                        THANH TOÁN TIỀN ĐIỆN
                    </td>
                </tr> <!-- het dong 1 -->

                <tr>
                    <td>
                        Tên chủ hộ:
                    </td>
                    <td>
                        <input type="text" name="chuho" required value="<?php echo $chuho; ?>" />
                    </td>
                </tr> <!-- het dong 2 -->

                <tr>
                    <td>
                        Chỉ số cũ:
                    </td>
                    <td>
                        <input type="number" name="chisocu" required value="<?php echo $chisocu; ?>" /> (KW)
                    </td>
                </tr> <!-- het dong 3 -->

                <tr>
                    <td>
                        Chỉ số mới:
                    </td>
                    <td>
                        <input type="number" name="chisomoi" required value="<?php echo $chisomoi; ?>" /> (KW)
                    </td>
                </tr> <!-- het dong 4 -->

                <tr>
                    <td>
                        Đơn giá:
                    </td>
                    <td>
                        <input type="number" name="dongia" required value="<?php echo $dongia; ?>" /> (VNĐ)
                    </td>
                </tr> <!-- het dong 5 -->

                <tr>
                    <td>
                        Số tiền thanh toán:
                    </td>
                    <td>
                        <input type="number" style="background-color: #ffccca;" disabled value="<?php echo $thanhtien; ?>" /> (VNĐ)

                    </td>
                </tr>

                <tr style="text-align: center;">
                    <td colspan="2">
                        <button>Tính</button>
                    </td>
                </tr>
            </table>
        </form> <!-- Thẻ đóng của form -->


    </div>

</body>

</html>