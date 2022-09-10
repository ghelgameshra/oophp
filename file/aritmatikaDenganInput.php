<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <ul>
            <?php
                $input1 = $_POST['input1'];
                $input2 = $_POST['input2'];
                
                $jumlah =  $input1 + $input2;
            ?>
            <li><input type="text" name="input1"></li>
            <li><input type="text" name="input2"></li>

            <li><label for="hasil">hasil</label></li>
            <li><input type="text" name="hasil" value="<?php echo $jumlah; ?>"></li>
            <li><button type="submit">Submit</button></li>
        </ul>
    </form>
    
</body>
</html>