<?php
/*Viết một chương trình PHP để tính tổng các chữ số của một số.*/
    function sumDigit($number){
        $sum = 0;
        while($number > 0){
            $digit = $number % 10;
            $sum = $sum + $digit;
            $number = ($number - $digit) / 10;
        }
        return $sum;
    }

    $result = sumDigit(396);
    echo $result
?>