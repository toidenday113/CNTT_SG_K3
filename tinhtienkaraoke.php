<?php
$giobatdau = null;
$gioketthuc = null;
$tienthanhtoan = null;

// Kiểm tra có sự tồn tại 2 biến
// Hàm isset dùng để kiểm tra sự tồn tại của 2 biến có hay không?
if (isset($_POST['giobatdau']) && isset($_POST['gioketthuc'])) {

    $giobatdau = $_POST['giobatdau'];
    $gioketthuc = $_POST['gioketthuc'];

    // Kiểm tra giờ nghỉ
    if (
        $giobatdau >= 10 &&
        $giobatdau <= 24 &&

        $giobatdau >= 10 &&
        $gioketthuc <= 24
    ) {

        if ($gioketthuc > $giobatdau) {
            // Tính tiền
            if ($giobatdau <= 17 && $gioketthuc <= 17) {
                $tienthanhtoan = ($gioketthuc - $giobatdau) * 20000;
            } elseif ($giobatdau >= 17 && $gioketthuc >= 17) {
                $tienthanhtoan = ($gioketthuc - $giobatdau) * 45000;
            } else {
                $tien1 = (17 - $giobatdau) * 20000;
                $tien2 = ($gioketthuc - 17) * 45000;
                $tienthanhtoan = $tien1 + $tien2;
            }
        } else {
            $tienthanhtoan = "Giờ kết thúc phải > giờ bắt đầu!";
        }
    } else {
        $tienthanhtoan = "Giờ nghỉ!";
    }
} // Kết thúc if

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính tiền Karaoke</title>

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
    <div id="wrap">
        <form action="tinhtienkaraoke.php" method="post" name="karaoke">
            <table>
                <tr style="background-color:#FF0000; text-align: center;">
                    <td colspan="2">
                        TÍNH TIỀN KARAOKE
                    </td>
                </tr> <!-- het dong 1 -->

                <tr style="background-color: #FF00FF;">
                    <td>
                        Giờ bắt đầu:
                    </td>
                    <td>
                        <input type="number" name="giobatdau" value="<?php echo $giobatdau; ?>" required />
                    </td>
                </tr> <!-- het dong 2 -->
                <tr style="background-color: #FF00FF;">
                    <td>
                        Giờ kết thúc:
                    </td>
                    <td>
                        <input type="number" name="gioketthuc" value="<?php echo $gioketthuc; ?>" required />
                    </td>
                </tr> <!-- het dong 3 -->
                <tr style="background-color: #FF00FF;">
                    <td>
                        Tiền thanh toán:
                    </td>
                    <td>
                        <input type="text" style="background-color:#FFFF00" disabled value="<?php echo $tienthanhtoan; ?>" />
                    </td>
                </tr> <!-- het dong 4 -->

                <tr style="text-align: center; background-color: #FF00FF;">
                    <td colspan="2">
                        <button>Tính Tiền</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>