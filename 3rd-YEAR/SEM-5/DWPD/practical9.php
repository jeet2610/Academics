<?php
    $a=10;
    $b=20;
    echo"Before swapping"."<br>";
    echo "A = ".$a."<br>";
    echo "B = ".$b."<br>";
    $c=$a;
    $a=$b;
    $b=$c;
    echo"After swapping"."<br>";
    echo "A = ".$a."<br>";
    echo "B = ".$b."<br>";
    $c=15;
    $d=25;
    echo"Before swapping"."<br>";
    echo "C = ".$c."<br>";
    echo "D = ".$d."<br>";
    $c=$c+$d;
    $d=$c-$d;
    $c=$c-$d;
    echo"After swapping"."<br>";
    echo "C = ".$c."<br>";
    echo "D = ".$d."<br>";
?>
