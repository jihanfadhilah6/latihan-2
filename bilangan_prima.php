<?php

for($prima = 1; $prima <= 100; $prima++){
        $t = 0;
for($prima2 = 1; $prima2 <= $prima; $prima2++){
    if($prima % $prima2 == 0){
        $t++;   
    }
}
    if($t == 2){
        echo "".$prima." <br>";
    }
}
?>