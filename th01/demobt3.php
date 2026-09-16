<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function laysongaunhien(){
            $soNgauNhien = rand(-100,100);
            if($soNgauNhien<=0){
                echo "So ngau nhien la so am: $soNgauNhien". "<br>";
            }
            else
                echo "So ngau nhien la: $soNgauNhien". "<br>";
            return $soNgauNhien;
        }
        function InraUS($N){
            if($N>0){
                echo "Tap uoc so cua $N la: ";

                for($i=1;$i<=$N;$i++){
                    if($N%$i==0){
                        echo "$i ";
                    }
                }
            }
        }
        $N = laysongaunhien();
        InraUS($N);
        function KienTraSNT($N){
            if($N>0){
                $dem=0;
                for($i=1;$i<=$N;$i++){
                    if($N%$i==0){
                        $dem++;
                    }
                }
                if($dem==2){
                    echo "<br>$N la so nguyen to";
                }
                else{
                    echo "<br>$N không phải là số nguyên tố.";
                }
            }
        }
        KienTraSNT($N);
        function LaSNT($so){
            if($so < 2){
                return false;
            }

            for($i=2;$i*$i<=$so;$i++){
                if($so%$i==0){
                    return false;
                }
            }

            return true;
        }

        function SumSNT($N){
            $tong=0;

            for($i=2;$i<$N;$i++){
                if(LaSNT($i)){
                    $tong += $i;
                }
            }

            echo "<br>Tổng các số nguyên tố nhỏ hơn $N là: $tong";
        }

        function KiemTraSCP($N){
            if($N < 0){
                echo "<br>$N không phải là số chính phương.";
                return;
            }

            $canBacHai = (int)sqrt($N);
            if($canBacHai*$canBacHai == $N){
                echo "<br>$N là số chính phương.";
            }
            else{
                echo "<br>$N không phải là số chính phương.";
            }
        }

        SumSNT($N);
        KiemTraSCP($N);
    ?>
</body>
</html>