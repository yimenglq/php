<?php
    for($i = 100; $i<1000;$i++){
        $b = (int)($i/100);
        $s = (int)($i/10%10);
        $g = (int)($i%10);
        $sum = $b*$b*$b + $s*$s*$s + $g*$g*$g;
        if($i == $sum){
            echo $sum."        ";
                }
            // echo var_dump($b),"<br/>";
    }


?>