<?php 
    $s = "*";//控制所绘制的图形
    $n=5;//控制有·几层的·图形·
      
    function fstr($s,$n){
        $string ="";
        for($i = 1; $i<=$n; $i++){
            $string = $string.$s;   
        }
        echo $string."<br/>";
    }
    for($j = 0;$j<$n ; $j++){
        fstr($s,2*$j+1);
    }

?>