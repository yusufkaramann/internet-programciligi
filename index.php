<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ödev</title>
</head>
<body>
    


    <h1> KISIM 1</h1>
<?php

use classs as GlobalClass;

    class classs{
        
        public function __construct(){
            $hg="constract metod active";
            echo $hg;
            echo "<br>";
        }

        public function __destruct()
        {
            echo "destruct metod active.";
            echo "<br><br>";
        }

        public function puan($vize,$final){
            
            $not=$vize*0.4 + $final*0.7;
            if ($not>=60) {
                echo "puanınız, hayırlı olsu8n " . $not;  
                echo "<br><br>";  
            }
            else{
                echo "kaldın bro. Notun $not";
                echo "<br><br>";
            }
        }

        public function factorial($num){
            $total=1;
           for ($i=1; $i <= $num; $i++) { 
            $total=$i*$total;
           }
           echo "$num sayısının factorieli ".$total;
           echo "<br>";
        }
    }

    $itsClass = new classs();
    $itsClass->puan(60,50);
    $itsClass->factorial(120);

    
?>









<h1> KISIM 2</h1>
<?php
class deneme {
   private $sayi1,$sayi2,$sayi3;
   public function __construct($sayii1,$sayii2,$sayii3)
   {
    $sayi1=$sayii1;
    $sayi2=$sayii2;
    $sayi3=$sayii3;
   }

   
   public function karesi($giris){
    return $giris*$giris;
   }

    public function fck($giris){
    for ($i=0; $i < $giris; $i++) { 
        echo $i*$i;
        echo "<br>";
    }
    }
}

$myclass = new deneme(1,2,3);
$myclass->fck(8);
?>








</body>
</html>