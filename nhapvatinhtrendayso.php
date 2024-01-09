<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TÍNH TRÊN DÃY SỐ</title>

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
    $dayso = null;
    $tong = null;


    // $_POST  =>(Mảng)Array([toan]=> giá trị , [ly]=> giá trị)
    if (
        isset($_POST['dayso'])
    ) {
        $dayso = $_POST['dayso'];
        $mangso = explode(",", $dayso); //array(1,2,3,1) => array(index => value)
        for ($i = 0; $i < count($mangso); $i++) {
            $tong = $tong + $mangso[$i];
        }
        /**
         * $i= 0 => $mangso[0] => 1 ; $tong = null + 1 => 1
         * $i = 1 => $mangso[1] => 2 ; $tong = 1 + 2 => 3
         * $i = 2 => $mangso[2] => 3 ; $tong = 3 + 3 => 6
         * $i = 3 => $mangso[3] => 1 ;
         * ...
         */
    }
    ?>

    <div id="wrap">
        <form action="nhapvatinhtrendayso.php" method="post">
            <table>
                <tr style="background-color:#FF0000; text-align: center;">
                    <td colspan="2">
                        TÍNH TRÊN DÃY SỐ
                    </td>
                </tr> <!-- het dong 1 -->

                <tr style="background-color: #FF00FF;">
                    <td>
                        Nhập dãy số:
                    </td>
                    <td>
                        <input type="text" value="<?php echo $dayso; ?>" name="dayso" />(*)
                    </td>
                </tr> <!-- het dong 2 -->

                <tr style=" background-color: #FF00FF;">
                    <td>

                    </td>
                    <td>
                        <button>Tổng dãy số</button>
                    </td>
                </tr> <!-- het dong 3 -->
                <tr style="background-color: #FF00FF;">
                    <td>
                        Tổng dãy số:
                    </td>
                    <td>
                        <input type="text" value="<?php echo $tong; ?>" disabled />
                    </td>
                </tr> <!-- het dong 4 -->

                <tr style="text-align: center; background-color: #FF00FF;">
                    <td colspan="2">
                        (*) Các số được nhập cách nhau bằng dấu ","
                    </td>
                </tr>
            </table>
        </form>
</body>

</html>