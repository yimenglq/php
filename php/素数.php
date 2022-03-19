<?php
    for($i = 100; $i <1000 ; $i++){
        $sum = 0;
        for($n = 2; $n < $i;$n++){
            $s = $i % $n;
            if($s==0){
                $sum+=1;
            }
        }
        if($sum == 0){
            echo $i." ";
        }
    }
?>
