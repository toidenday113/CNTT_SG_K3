<?php
$chu = null;
if (isset($_POST['so'])) {
    $so  = $_POST['so'];
    switch ($so) {
        case 0: {
                $chu = "Không";

                break;
            }
        case 1: {
                $chu = "Một";
                break;
            }
        case 2: {
                $chu = "Hai";
                break;
            }
        case 3: {
                $chu = "Ba";
                break;
            }
        case 4: {
                $chu = "Bốn";
                break;
            }
        case 5: {
                $chu = "Năm";
                break;
            }
        case 6: {
                $chu = "Sáu";
                break;
            }
        case 7: {
                $chu = "Bảy";
                break;
            }
        case 8: {
                $chu = "Tám";
                break;
            }
        case 9: {
                $chu = "Chín";
                break;
            }
        case 10: {
                $chu = "Mười";
                break;
            }
        default: {
                $chu = "Số này không thể đọc";
            }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đọc số</title>

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
        <form action="docso.php" method="post" name="karaoke">
            <table>
                <tr style="background-color:#FF0000; text-align: center;">
                    <td colspan="3">
                        ĐỌC SỐ
                    </td>
                </tr> <!-- het dong 1 -->

                <tr style="background-color: #FF00FF;">
                    <td>
                        Nhập số (0->9):
                    </td>
                    <td>

                    </td>
                    <td>
                        Bằng chữ:
                    </td>
                </tr> <!-- het dong 2 -->
                <tr style="background-color: #FF00FF;">
                    <td>
                        <input type="number" name="so" value="<?php echo $so; ?>" required />
                    </td>

                    <td>
                        <button>=></button>
                    </td>

                    <td>
                        <input type="text" value="<?php echo $chu; ?>" />
                    </td>
                </tr> <!-- het dong 3 -->
            </table>
        </form>
    </div>
</body>

</html>