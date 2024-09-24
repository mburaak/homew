<?php 

    function UcgenYazdir($deger){
        for($i = 0; $i < $deger; $i++){
            echo "<br>";
            for($j = 0; $j <= $i; $j++){
                echo "0";
            }
        }
    }

    UcgenYazdir(10);





?>
