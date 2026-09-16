<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function soChan(){
        echo "So ngau nhien (N): ";
        
        $so = rand(1, 100);
        echo "$so<br>";

        for($i = 1; $i <= $so; $i++){
            if($i % 2 == 0){
                echo "$i ";
            }
        }
    }
    soChan();
?>
</body>
</html>