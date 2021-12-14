<?php
    $ar = [];
    for($c = 0; $c < 20; $c ++){
        array_push($ar, rand(0,10));
    }
    var_dump($ar);    
    $qtd = array_count_values($ar);   
    var_dump($qtd);
    foreach($qtd as $key => $value){
        if($value == 1){
            echo "A o valor $key não se repete.<br>";
        }
        
    }
    
?>
