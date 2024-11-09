<?php
    $a = 10;
    $b = 20;
    $c = 30;
    $d = 10;
     
    if($a == $d)
    {
        echo "Nilai $a sama dengan nilai $d";
    }
    else
    {
        echo "Nilai $a tidak sama dengan nilai $d";
    }
     
    echo "<br/>";
 
    if($a != $c)
    {
        echo "Nilai $a tidak sama dengan nilai $c";
    }
    else
    {
        echo "Nilai $a sama dengan nilai $c";
    }
 
    echo "<br/>";
 
    if($a > $c)
    {
        echo "Nilai $a lebih besar dari nilai $c";
    }
    else
    {
        echo "Nilai $a tidak lebih besar dari nilai $c";
    }
 
    echo "<br/>";

    if($a >= $d)
    {
        echo "Nilai $a lebih besar atau sama dengan dari nilai $d";
    }
    else
    {
        echo "Nilai $a tidak lebih besar atau sama dengan dari nilai $d";
    }
 
?>