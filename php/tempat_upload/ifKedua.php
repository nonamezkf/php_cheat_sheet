<?php
    $a = 10;
    $b = 20;
    $c = 30;
    $d = 10;
     
    if($a == $d and $b < $c)
    {
        echo "Nilai $a sama dengan nilai $d dan nilai $b lebih kecil dari nilai $c";
    }
    else
    {
        echo "Nilai $a tidak sama dengan nilai $d dan nilai $b tidak lebih kecil dari nilai $c";
    }
     
    echo "<br/>";
 
    if($a == $d OR $d > $c)
    {
        echo "Nilai $a sama dengan nilai $d dan nilai $d tidak lebih besar dari nilai $c";
    }
    else
    {
        echo "Nilai $a tidak sama dengan nilai $b dan nilai $d lebih kecil dari nilai $c";
    }
     
?>