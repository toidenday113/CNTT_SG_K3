<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chào theo giờ</title>

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
    $gio = null;
    $chaogio = null;
    if (isset($_POST['gio'])) {

        $gio = $_POST['gio'];
        /* Cách 1
            // Chào buổi sáng
            if ($gio >= 0 && $gio <= 12) {
                $chaogio = "Chào buổi sáng!";
            }

            // Chào buổi chiều
            if ($gio >= 13 && $gio <= 18) {
                $chaogio = "Chào buổi chiều!";
            }

            // Chào buổi tối
            if ($gio >= 19 && $gio <= 23) {
                $chaogio = "Chào buổi tối";
            }
        */

        // Chào buổi sáng
        if ($gio >= 0 && $gio <= 12) {
            $chaogio = "Chào buổi sáng!";
        }
        // Chào buổi chiều
        elseif ($gio >= 13 && $gio <= 18) {
            $chaogio = "Chào buổi chiều!";
        }

        // Chào buổi tối
        else {
            $chaogio = "Chào buổi tối";
        }
    }
    ?>

    <div id="wrap">
        <form action="chaotheogio.php" method="post" name="timsolon">

            <table>

                <tr style="background-color: #dc4800; color: #fff; text-align: center;">
                    <td colspan="2">
                        CHÀO THEO GIỜ
                    </td>
                </tr> <!-- het dong 1 -->

                <tr>
                    <td>
                        Giờ:
                    </td>
                    <td>
                        <input type="number" name="gio" required value="<?php echo $gio; ?>" />
                    </td>
                </tr> <!-- het dong 2 -->

                <tr style="text-align: center;">
                    <td colspan="2">
                        <?php echo $chaogio; ?>
                    </td>
                </tr> <!-- het dong 3 -->

                <tr style="text-align: center;background-color: #98ccfe;">
                    <td colspan="2">
                        <button>Chào</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>