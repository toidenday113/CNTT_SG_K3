<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KẾT QUẢ HỌC TẬP</title>

    <style>
        #wrap {
            margin: auto;
            width: 400px;
        }

        table {
            margin: auto;
            background-color: #FFFF00;
        }
    </style>
</head>

<body>
    <?php
    $diemhocki1 = null;
    $diemhocki2 = null;
    $diemtrungbinh = null;
    $ketqua = null;
    $xeploai = null;

    if (
        isset($_POST['diemhocki1'])
        && isset($_POST['diemhocki2'])
    ) {

        $diemhocki1 = $_POST['diemhocki1'];
        $diemhocki2 = $_POST['diemhocki2'];
        $diemtrungbinh = ($diemhocki1 + ($diemhocki2 * 2)) / 3;

        // Được lên lớp hay không
        // { khối lệnh }
        if ($diemtrungbinh >= 5) {
            $ketqua = "Được lên lớp";
        } else {
            $ketqua = "Ở lại lớp";
        }

        // Kiểm tra xếp loại
        if ($diemtrungbinh >= 8) {
            $xeploai = "giỏi";
        } elseif ($diemtrungbinh >= 6.5 && $diemtrungbinh < 8) {
            $xeploai = "khá";
        } elseif ($diemtrungbinh >= 5 && $diemtrungbinh < 6.5) {
            $xeploai = "Trung Bình";
        } else {
            $xeploai = "yếu";
        }
    }
    ?>

    <div id="wrap">
        <form action="ketquahoctap.php" method="post" name="ketquahoctap">
            <table>
                <tr style="background-color:#FF0000; text-align: center;">
                    <td colspan="2">
                        KẾT QUẢ HỌC TẬP
                    </td>
                </tr> <!-- het dong 1 -->

                <tr style="background-color: #FF00FF;">
                    <td>
                        Điểm học kì 1:
                    </td>
                    <td>
                        <input type="text" name="diemhocki1" value="<?php echo $diemhocki1; ?>" />
                    </td>
                </tr> <!-- het dong 2 -->
                <tr style="background-color: #FF00FF;">
                    <td>
                        Điểm học kì 2:
                    </td>
                    <td>
                        <input type="text" name="diemhocki2" value="<?php echo $diemhocki2; ?>" />
                    </td>
                </tr> <!-- het dong 3 -->
                <tr style="background-color: #FF00FF;">
                    <td>
                        Điểm trung bình:
                    </td>
                    <td>
                        <input type="number" style="background-color:#FFFF00" disabled value="<?php echo $diemtrungbinh; ?>" />
                    </td>
                </tr> <!-- het dong 4 -->
                <tr style="background-color: #FF00FF;">
                    <td>
                        Kết quả:
                    </td>
                    <td>
                        <input type="text" style="background-color:#FFFF00" disabled value="<?php echo $ketqua; ?>" />
                    </td>
                </tr> <!-- het dong 5 -->
                <tr style="background-color: #FF00FF;">
                    <td>Xếp loại học lực:
                    </td>
                    <td>
                        <input type="text" style="background-color:#FFFF00" disabled value="<?php echo $xeploai; ?>" />
                    </td>
                </tr> <!-- het dong 6 -->
                <tr style="text-align: center; background-color: #FF00FF;">
                    <td colspan="2">
                        <button>Xem kết quả</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>