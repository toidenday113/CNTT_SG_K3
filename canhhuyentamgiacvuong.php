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
    $canha = "";
    $canhb = "";
    $canhhuyen = "";


    if (
        isset($_POST['canha'])
        && isset($_POST['canhb'])
    ) {
        $canha = $_POST['canha'];
        $canhb = $_POST['canhb'];

        $canhhuyen = sqrt((pow($canha, 2) + pow($canhb, 2)));
    }
    ?>

    <div id="wrap">
        <form action="canhhuyentamgiacvuong.php" method="post" name="canhhuyen">

            <table>

                <tr style="background-color: #dc4800; color: #fff; text-align: center;">
                    <td colspan="2">
                        CẠNH HUYỀN TAM GIÁC VUÔNG
                    </td>
                </tr> <!-- het dong 1 -->

                <tr>
                    <td>
                        Cạnh A:
                    </td>
                    <td>
                        <input type="text" name="canha" required value="<?php echo $canha; ?>" />
                    </td>
                </tr> <!-- het dong 2 -->

                <tr>
                    <td>
                        Canh B:
                    </td>
                    <td>
                        <input type="number" name="canhb" required value="<?php echo $canhb; ?>" />
                    </td>
                </tr> <!-- het dong 3 -->

                <tr>
                    <td>
                        Cạnh huyền:
                    </td>
                    <td>
                        <input type="number" style="background-color: #ffccca;" disabled value="<?php echo $canhhuyen; ?>" />

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