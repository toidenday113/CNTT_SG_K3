<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải Phương Trình Bậc Nhất</title>

    <style>
        #wrap {
            width: 400px;
            margin: auto;
        }

        table {
            background-color: #feebca;
            margin: auto;
        }

        input {
            width: 30px;
        }

        .kq {
            width: 90%;
        }
    </style>

</head>

<body>

</body>

<?php
$ngay = null;
$thang = null;
$nam = null;
$kq = null;

//print_r($_POST);

if (isset($_POST['ngay']) && isset($_POST['thang']) && isset($_POST['nam'])) {

    $ngay = $_POST["ngay"];
    $thang = $_POST["thang"];
    $nam = $_POST["nam"];





    /* $jd = cal_to_jd(CAL_GREGORIAN, $thang, $ngay, $nam);
    $day = jddayofweek($jd, 0);
    switch ($day) {
        case 1: {
                $thu  = "thứ Hai";
                break;
            }
        case 2: {
                $thu  = " thứ Ba";
                break;
            }
        case 3: {
                $thu  = "thứ Tư";
                break;
            }
        case 4: {
                $thu  = " thứ Năm";
                break;
            }
        case 5: {

                $thu  = "thứ Sáu";
                break;
            }
        case 6: {
                $thu  = " thứ 7";
                break;
            }
        default: {
                $thu  = "Chủ nhật";
                break;
            }
    }*/

    function TimThuTrongTuan($d, $m, $y)
    {
        $thu = null;
        $jd = cal_to_jd(CAL_GREGORIAN, $m, $d, $y);
        $day = jddayofweek($jd, 0);
        switch ($day) {
            case 1: {
                    $thu  = "thứ Hai";
                    break;
                }
            case 2: {
                    $thu  = " thứ Ba";
                    break;
                }
            case 3: {
                    $thu  = "thứ Tư";
                    break;
                }
            case 4: {
                    $thu  = " thứ Năm";
                    break;
                }
            case 5: {

                    $thu  = "thứ Sáu";
                    break;
                }
            case 6: {
                    $thu  = " thứ 7";
                    break;
                }
            default: {
                    $thu  = "Chủ nhật";
                    break;
                }
        }
        return $thu;
    }


    $kq  = "Bạn đã nhập vào Ngày $ngay tháng $thang năm $nam là " . TimThuTrongTuan($ngay, $thang, $nam);
}

?>

<div id="wrap">
    <form action="timthutrongtuan.php" method="post">
        <table>
            <tr>
                <td colspan="2">
                    TÌM THỨ TRONG TUẦN
                </td>
            </tr>

            <tr>
                <td>
                    Ngày/Tháng/Năm:
                </td>
                <td>
                    <input type="text" name="ngay" value="<?php echo $ngay; ?>" />
                    /
                    <input type="text" name="thang" value="<?php echo $thang; ?>" />
                    /
                    <input type="text" name="nam" value="<?php echo $nam; ?>" />
                    <button>Tìm Thứ</button>
                </td>
            </tr>

            <tr style=" text-align: center;">
                <td colspan="2">
                    <input type="text" name="sob" value="<?php echo $kq; ?>" class="kq" />
                </td>
            </tr>
        </table>
    </form>
</div>

</html>