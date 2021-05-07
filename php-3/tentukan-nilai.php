<?php
function tentukan_nilai($number)
{
    if ($number >= 85 && $number <= 100){
        echo "Sangat Baik";
    }elseif ($number >= 70 && $number < 85){
        echo "Baik";
    }elseif ($number >= 60 && $number < 70){
        echo "Cukup";
    }else {
        echo "Kurang";
    }

}

//TEST CASES
echo tentukan_nilai(98);echo "<br>"; //Sangat Baik
echo tentukan_nilai(76);echo "<br>"; //Baik
echo tentukan_nilai(67);echo "<br>"; //Cukup
echo tentukan_nilai(43);echo "<br>"; //Kurang
?>
