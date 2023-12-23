<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cạnh huyền tam giác vuông</title>

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
    $soa = null;
    $sob = null;
    $solonhon = null;


    // print_r($_POST);

    if (
        isset($_POST['soa'])
        && isset($_POST['sob'])
    ) {
        $soa = $_POST['soa'];
        $sob = $_POST['sob'];

        if ($soa > $sob) {
            $solonhon = $soa;
        } else {
            $solonhon = $sob;
        }
    }
    ?>

    <div id="wrap">
        <form action="timsolonhon.php" method="post" name="timsolon">

            <table>

                <tr style="background-color: #dc4800; color: #fff; text-align: center;">
                    <td colspan="2">
                        TÌM SỐ LỚN HƠN
                    </td>
                </tr> <!-- het dong 1 -->

                <tr>
                    <td>
                        Số A:
                    </td>
                    <td>
                        <input type="number" name="soa" required value="<?php echo $soa; ?>" />
                    </td>
                </tr> <!-- het dong 2 -->

                <tr>
                    <td>
                        Số B:
                    </td>
                    <td>
                        <input type="number" name="sob" required value="<?php echo $sob; ?>" />
                    </td>
                </tr> <!-- het dong 3 -->

                <tr>
                    <td>
                        Số lớn hơn:
                    </td>
                    <td>
                        <input type="number" style="background-color: #ffccca;" disabled value="<?php echo $solonhon; ?>" />

                    </td>
                </tr>

                <tr style="text-align: center;">
                    <td colspan="2">
                        <button>Tính</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>