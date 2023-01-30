<?php
    //task 1
    function isPensioner($age){
        return $age >= 60;
    }

    //task 2
    function isMister($text){
        return $text === 'Mister';
    }

    //task 3
    function isInternationalPhone($numberPhone){
        return $numberPhone[0] === '+';
    }

    //task 4
    function isLeapYear($year){
        return ($year % 400 === 0) || ($year % 4 === 0 & $year % 100 !== 0);
    }

    //task 5
    function isPalindrome($text){
        $text = strtolower($text);
        return $text === strrev($text);
    }
    function isNotPalindrome($text){
        return !isPalindrome($text);
    }

    //task 6
    function isNeutralSoldier($colorArmor, $colorShield){
        return $colorArmor !== 'red' & $colorShield === 'black';
    }

    //task 7
    function isFalsy($num){
        return false == $num;
    }
