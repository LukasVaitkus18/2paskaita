<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
$task1="1.a";
echo "<h1>$task1</h1>";
    $skaicius1=2;
    $skaicius2=6;
    $skaicius3=9;
    $skaicius4=12;
    echo $skaicius1;
    echo "<br>";
    echo $skaicius2;
    echo "<br>";
    echo $skaicius3;
    echo "<br>";
    echo $skaicius4;
    echo "<br>";

    $task2="1.b";
echo "<h1>$task2</h1>";
    $suma = $skaicius1 + $skaicius2+$skaicius3+$skaicius4;
    $daugyba = $skaicius1 * $skaicius2*$skaicius3*$skaicius4;
    echo $suma;
    echo "<br>";
    echo $daugyba;
    echo "<br>";

    $task3="1.c";
    echo "<h1>$task3</h1>";
echo "<br>";
$laikinas=$skaicius1;
$skaicius1=$skaicius2;
$skaicius2=$laikinas;
echo $skaicius1;
echo "<br>";
echo $skaicius2;
echo "<br>";

$task4="1.d";
echo "<h1>$task4</h1>";
list($skaicius3, $skaicius4) =array($skaicius4,$skaicius3);
echo $skaicius3;
echo "<br>";
echo $skaicius4;
echo "<br>";

$task5="1.e";
echo "<h1>$task5</h1>";
 echo "<p>$skaicius1.$skaicius2.$skaicius3.$skaicius4</p>";
 echo "<br>";

 $task6="1.f";
 echo "<h1>$task6</h1>";
 $maxSkaicius = PHP_FLOAT_MAX;
 $maxSkaicius1 = PHP_INT_MAX;
 echo "<h1>$maxSkaicius</h1>";
 echo "<h1>$maxSkaicius1</h1>";
echo "<br>";

$task7="1.g";
echo "<h1>$task7</h1>";
$skaicius5=24;
$skaicius6=44;
echo $skaicius5;
echo "<br>";
echo $skaicius6;
echo "<br>";

$task7="1.h";
echo "<h1>$task7</h1>";
echo "<br>";
$skaicius5= $skaicius5 ^ $skaicius6;
$skaicius6= $skaicius5 ^ $skaicius6;
$skaicius5= $skaicius5 ^ $skaicius6;
echo $skaicius5;
echo "<br>";
echo $skaicius6;
echo "<br>";

$task8="1.i";
echo "<h1>$task8</h1>";
echo "<div id='Rezultatas'>".$skaicius5.'<br>'.$skaicius6."</div>";

$task9="2 užduotis";
echo "<h1>$task9</h1>";
 $graza = 123.15;

   
        $simtas =intval($graza/100); // 223/100 = 2(.23)
         $graza =$graza%100; // 223 % 100 = 23



        $penkiasdesimt = intval($graza/50); // 23/50 = 0(.46)
        $graza =$graza% 50; // 23 % 50 = 23
        $dvidesimt = intval($graza/20); // 23/20 = 1(.15)
        $graza = $graza % 20; // 23 % 20 = 3
        $desimt = intval($graza/10); // 3/10 = 0(.3)
        $graza = $graza % 10; // 3 % 10 = 3
        $penki = intval($graza/5); // 3/5 = 0(.6)
        $graza = $graza % 5; // 3 % 5 = 3
        $du = intval($graza/2); // 3/2 = 1(.5)
        $graza = $graza % 2; // 3 % 2 = 1
        $vienas =intval($graza/1);
        $graza= $graza % 1;


$graza=floatval($graza);
        $penkiasdesimtct =floatval($graza/0.5);
        // $graza=$graza%0.5;


        $dvidesimtCt = floatval($graza/0.2);

        $desimtCt = floatval($graza/0.1);

        $penkiCt = floatval($graza/0.05);
        
        $duCt = intval($graza/0.02);
        // // $graza = $graza % 0.02;
        
    
        $vienasCt = $graza;

        echo "Simtu ".$simtas;
        echo "<br>";
        echo "penkiasdesimt ".$penkiasdesimt;
        echo "<br>";
        echo "dvidesimt ".$dvidesimt;
        echo "<br>";
        echo "desimt ".$desimt;
        echo "<br>";
        echo "penki ".$penki;
        echo "<br>";
        echo "du ".$du;
        echo "<br>";
        echo "vienas ".$vienas;
        echo "<br>";
        echo "penkiasdesimtct ".$penkiasdesimtct;
        echo "<br>";
        echo "dvidesimtCt ".$dvidesimtCt;
        echo "<br>";
        echo "desimtCt ".$desimtCt;
        echo "<br>";
        echo "penkiCt ".$penkiCt;
        echo "<br>";
        echo "duCt ".$duCt;
        echo "<br>";
        echo "vienasCt ".$vienasCt;
// 
    ?>
</body>
</html>