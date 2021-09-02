<?php
// Step 3
$fizz = $buzz = $fizzbuzz = $lucky = $integer = 0;

for ($i=1; $i<=20; $i++) {
    $pattrn = "/3/";
    if (preg_match($pattrn, $i)){
        echo "lucky ";
        $lucky++;
    }elseif($i % 15 == 0) {
        echo "fizzbuzz ";
        $fizzbuzz++;
    } elseif ($i % 5 == 0) {
        echo "buzz ";
        $buzz++;
    } elseif ($i % 3 == 0) {
        echo "fizz ";
        $fizz++;
    } else {
        echo "$i ";
        $integer++;
    }
}
echo "<br>";
echo "fizz = " . $fizz . "<br>";
echo "buzz = " . $buzz . "<br>";
echo "fizzbuzz = " . $fizzbuzz . "<br>";
echo "lucky = " . $lucky . "<br>";
echo "integer = " . $integer . "<br>";
?>