<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TÁCH HỌ TÊN</title>

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
    $HoTen = null;
    $ho = null;
    $dem = null;
    $ten = null;

    // $_POST  =>(Mảng)Array([toan]=> giá trị , [ly]=> giá trị)
    if (
        isset($_POST['HoTen'])
    ) {
        // Nguyễn Văn A 
        /*
            Họ: Nguyễn
            tên đệm: Văn Thi
            Tên: A
        */

        //  Nguyễn    Văn    A     
        // Trim() => Nguyễn Văn A
        $HoTen = trim($_POST['HoTen']);
        $mangten = explode(" ", $HoTen); //=> Cho ra 1 mảng có 3 phân tử

        $vitriten = count($mangten) - 1;

        $ho = $mangten[0];
        $ten = $mangten[$vitriten];

        for ($i = 1; $i < $vitriten; $i++) {
            $dem = $dem . " " . $mangten[$i];
        }
        // $dem = "a" ; $dem =$dem . "B" <=> $dem = "a" . "B" => aB
        $dem = trim($dem);
    }
    ?>

    <div id="wrap">
        <form action="tachhoten.php" method="post" name="diemthidai">
            <table>
                <tr style="background-color:#FF0000; text-align: center;">
                    <td colspan="2">
                        TÁCH HỌ TÊN
                    </td>
                </tr> <!-- het dong 1 -->

                <tr style="background-color: #FF00FF;">
                    <td>
                        Họ và Tên:
                    </td>
                    <td>
                        <input type="text" value="<?php echo $HoTen; ?>" name="HoTen" />
                    </td>
                </tr> <!-- het dong 2 -->

                <tr style=" background-color: #FF00FF;">
                    <td>
                        Họ:
                    </td>
                    <td>
                        <input type="text" value="<?php echo $ho; ?>" disabled />
                    </td>
                </tr> <!-- het dong 3 -->
                <tr style="background-color: #FF00FF;">
                    <td>
                        Tên Đệm:
                    </td>
                    <td>
                        <input type="text" value="<?php echo $dem; ?>" disabled />
                    </td>
                </tr> <!-- het dong 4 -->
                <tr style="background-color: #FF00FF;">
                    <td>
                        Tên:
                    </td>
                    <td>
                        <input type="text" value="<?php echo $ten; ?>" disabled />
                    </td>
                </tr> <!-- het dong 5 -->

                <tr style="text-align: center; background-color: #FF00FF;">
                    <td colspan="2">
                        <button>Tách họ tên</button>
                    </td>
                </tr>
            </table>
        </form>
</body>

</html>