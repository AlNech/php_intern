<?php
    //task 1
    function guessNumber($num){
        if ($num === 42)
            return 'You win!';
            
         return 'Try again!';   
        
    }

    //task 2
    function normalizeUrl($url){
        $pos = strpos($url, 'http://' );
        if ($pos !== false){
            $url = substr ($url, 7, strlen($url));
            return  'https://' . $url;
        } else{
            return 'https://' . $url;
        }
        $pos = strpos($url, 'https://' );
        if ($pos !== false){
            return  $url;
        }
    }

    //task 3
    function whoIsThisHouseToStarks($family){
        if ($family === 'Karstark' || $family === 'Tully')
            return 'friend';
        if ($family === 'Lannister' || $family === 'Frey')
            return 'enemy';
        return 'neutral' ;       
    }

    //task 4
    function flipFlop($text){
        return ($text === 'flip') ? 'flop' : 'flip';
    }

    //task 5
    function getNumberExplanation($text){
        switch ($text){
            case 666 :
                return 'devil number';
            case 42:
                return 'answer for everything';
            case 7:
                return 'prime number';
            default:
                return null;            
        }
    }

    //task 6 
    function generateAmount($countProduct, $price){
        $result = $countProduct ?: $price * 3;
        return $result;
    }
