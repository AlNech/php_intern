<?php
    //task 1
    /*while($firstNumber > 0){
        print_r($firstNumber . "\n"); 
        $firstNumber -= 1;          
    }
    print_r('finished!');*/


    //task 2
    function multiplyNumbersFromRange($num1, $num2){
        $result = $num2;

        while ($num2 > $num1){
            $result = $result * $num1;
            $num1 += 1;
        }
        return $result;
    }

    //task 3
    function joinNumbersFromRange($num1, $num2){
        $result = '';

        while ($num2 >= $num1){
            $result = $result . $num1;
            $num1 += 1;
        }
        return $result;
    }

    //task 4
    function printReversedWordBySymbol($name){
        $i = 0;
        $len = strlen($name);

        while ($i < $len) {
            $len -= 1; 
            // Обращаемся к символу по индексу
            print_r("$name[$len]\n");  
            
        }
    }

    //task 5
    function countChars($str, $char)
    {
        $str = strtolower($str);
        $char = strtolower($char);
        $i = 0;
        $count = 0;
        while ($i < strlen($str)) {
            if ($str[$i] === $char) {
                // Считаем только подходящие символы
                $count = $count + 1;
            }
            // Счетчик увеличивается в любом случае
            $i = $i + 1;
        }

        return $count;
    }

    //task 6
    function  mysubstr($str, $length){
        $i = 0;
        $result = '';

        while($i <= $length - 1){
            $currentChar = $str[$i];
            $result = $result . $currentChar;
            $i += 1;
        }
        return $result;
    }

    //task 7
    function isArgumentsForSubstrCorrect($str, $num1, $num2){
        if (strlen($str) <= $num1 || $num1 < 0 || $num2 < 0 || ($num1 + $num2)> strlen($str)){
                return false;
            } 
        else{
            return true;
        }
    }

    //task 8
    function filterString($str, $char){
        $i = 0;
        $result = '';

        while($i < strlen($str)){
            if ($char === $str[$i]){
                $i += 1;
            } else {
                $result = $result . $str[$i];
                $i += 1;
            }
        }
        return $result;
    }

    //task 9
    function makeItFunny($str, $num){
        $result = '';
        $i = 0;

        while ($i < strlen($str)){
            if (($i + 1)  % ($num) === 0) {
                $result = $result . strtoupper($str[$i]);
                $i++;
            }
            else {$result = $result . $str[$i]; $i++;};
        }
        return $result;
    }


    //task 10
    function hasChar($str, $char){
        $i = 0;

        while ($i < strlen($str)){
            if ($str[$i] === $char){
                return true;
            } else {
                $i += 1;
            }
        }
        return false;
    }

    //task 11
    function sumOfSeries($num1, $num2){
        $sum = 0;

        if ($num1 === $num2){
            $sum = $num1;
        } else {for ($i = $num1; $i <= $num2; $i++) {
                $sum = $sum + $i;
         }}
        

         return $sum;
    }  

