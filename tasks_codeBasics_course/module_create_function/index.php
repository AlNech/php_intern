<?php
    //task 1
    function printMotto(){
        $text = 'Winter is coming';
        print_r($text);
    }

    //task 2
    function sayHurrayThreeTimes(){
        $text = 'hurray! hurray! hurray!';
        return $text;
    }

    //task 3
    function truncate($str, $num){
        $newStr = substr($str, 0, $num) . '...';
        return $newStr;
    }

    //task 4
    function getHiddenCard($numberCard, $hiddenNumber = 4){
        $numberCard = substr($numberCard, 12, 16);
        $newStr =  str_repeat("*", $hiddenNumber) . $numberCard;
        return $newStr;
    }

    //task 5
    function getAge($age){
        $age = floor($age);
        return($age);
    }