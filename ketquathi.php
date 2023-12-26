<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ĐIỂM THI ĐẠI HỌC</title>

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
    $toan = null;
    $ly = null;
    $hoa = null;
    $diemchuan = null;
    $tongdiem = null;
    $ketquathi = null;

    // $_POST  =>(Mảng)Array([toan]=> giá trị , [ly]=> giá trị)
    if (
        isset($_POST['toan'])
        &&
        isset($_POST['ly'])
        &&
        isset($_POST['hoa'])
        &&
        isset($_POST['diemchuan'])
    ) {
        $toan = $_POST['toan'];
        $ly = $_POST['ly'];
        $hoa = $_POST['hoa'];
        $diemchuan = $_POST['diemchuan'];
        $tongdiem = $toan + $ly + $hoa;

        // Kiểm tra 3 môn không có điểm 0
        if ($toan > 0 &&  $ly > 0 && $hoa > 0) {

            if ($tongdiem >= $diemchuan) {
                $ketquathi = "Đậu";
            } else
                $ketquathi = "Rớt";
        } else { // Nếu ($toan > 0 &&  $ly > 0 && $hoa > 0) => Sai thì làm trong else
            $ketquathi = "Rớt";
        } // kết thúc if kiểm tra 3 môn không có điểm 0
    }
    ?>

    <div id="wrap">
        <form action="ketquathi.php" method="post" name="diemthidai">
            <table>
                <tr style="background-color:#FF0000; text-align: center;">
                    <td colspan="2">
                        KẾT QUẢ THI ĐẠI HỌC
                    </td>
                </tr> <!-- het dong 1 -->

                <tr style="background-color: #FF00FF;">
                    <td>
                        Toán:
                    </td>
                    <td>
                        <input type="text" value="<?php echo $toan; ?>" name="toan" />
                    </td>
                </tr> <!-- het dong 2 -->

                <tr style=" background-color: #FF00FF;">
                    <td>
                        Lý:
                    </td>
                    <td>
                        <input type="text" value="<?php echo $ly; ?>" name="ly" />
                    </td>
                </tr> <!-- het dong 3 -->
                <tr style="background-color: #FF00FF;">
                    <td>
                        Hóa:
                    </td>
                    <td>
                        <input type="text" required value="<?php echo $hoa; ?>" name="hoa" />
                    </td>
                </tr> <!-- het dong 4 -->
                <tr style="background-color: #FF00FF;">
                    <td>
                        Điểm chuẩn:
                    </td>
                    <td>
                        <input type="text" value="<?php echo $diemchuan; ?>" name="diemchuan" />
                    </td>
                </tr> <!-- het dong 5 -->
                <tr style="background-color: #FF00FF;">
                    <td>
                        Tổng điểm:
                    </td>
                    <td>
                        <input type="text" style="background-color:#FFFF00" disabled value="<?php echo $tongdiem; ?>" />
                    </td>
                </tr> <!-- het dong 6  -->

                <tr style="background-color: #FF00FF;">
                    <td>Kết quả thi:
                    </td>
                    <td>
                        <input type="text" style="background-color:#FFFF00" disabled value="<?php echo $ketquathi; ?>" />
                    </td>
                </tr> <!-- het dong 7 -->
                <tr style="text-align: center; background-color: #FF00FF;">
                    <td colspan="2">
                        <button>Xem kết quả</button>
                    </td>
                </tr>
            </table>
        </form>
</body>

</html>