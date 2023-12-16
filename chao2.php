<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table, th, td, tr {
  border: 1px solid black;
}
</style>
</head>
<body>

<form action="chao2.php" method="post" name="form">

    <table>
        <tr>
            <td>in lời chào</td>
        </tr>
        <tr>
            <td>
                <input type="text" name="ten"/>
                <input type="text" name="tuoi"/>
            </td>
        </tr>
        <tr>
            <td>
                <?php 
                    if(isset($_POST['ten'])){
                       // echo "<pre>";
                       print_r($_POST);
                        //echo "</pre>";

                        echo "Chào Bạn: ". $_POST["ten"]; // Chào ban: .....
                    }
        
                ?>
            </td>
        </tr>
        <tr>
           <td> <input type="submit" value="Chào"/></td>
        </tr>
    </table>
   
</form>

</body>
</html>