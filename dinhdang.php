<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        #wrap {
            margin: auto;
            width: 400px;
        }

        table {
            margin: auto;
            background-color: #fecccd;
        }
    </style>
</head>

<body>
    <div id="wrap">
        <form action="dinhdang.php" method="post">

            <table>

                <tr style="background-color: #dc4800; color: #fff;">
                    <td colspan="2">
                        ĐỊNH DẠNG MÀU CHỮ - MÀU NỀN
                    </td>
                </tr>

                <tr>
                    <td>
                        Nội dung:
                    </td>
                    <td>
                        <input type="text" name="noi_dung" required />
                    </td>
                </tr>

                <tr>
                    <td>
                        Màu nền:
                    </td>
                    <td>
                        <input type="text" name="mau_nen" style="width: 60px;" required="true" />
                    </td>
                </tr>

                <tr>
                    <td>
                        Màu chữ:
                    </td>
                    <td>
                        <input type="text" name="mau_chu" style="width: 60px;" required="true" />
                    </td>
                </tr>

                <tr style="text-align: center;">
                    <td colspan="2">
                        <input type="submit" value="Xem kết quả" />
                    </td>
                </tr>
            </table>
        </form>

        <?php
        if (

            isset($_POST["noi_dung"])
            && isset($_POST["mau_nen"])
            && isset($_POST["mau_chu"])
            && !empty($_POST["noi_dung"])
            && !empty($_POST["mau_nen"])
            && !empty($_POST["mau_chu"])
        ) {

            $noi_dung = $_POST["noi_dung"];
            $mau_nen = $_POST["mau_nen"];
            $mau_chu = $_POST["mau_chu"];

            echo "<h4>Kết quả sau khi nhấn Xem kết quả</h4>";
            echo "<p style='background-color: #$mau_nen; color: #$mau_chu'>";
            echo $noi_dung;
            echo "</p>";
        }
        ?>
    </div>

</body>

</html>