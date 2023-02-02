<?php
    //task 1
    function invertCase($text)
{
    // BEGIN (write your solution here)
    $result = '';

    for ($i = 0; $i < mb_strlen($text); $i++){
        $symbol = mb_substr($text, $i, 1);
        $lowChar = mb_strtolower($symbol);
        $upChar = mb_strtoupper($symbol);

        if ($lowChar === $symbol){
            $result .= $upChar;
        } else {
            $result .= $lowChar;
        }  
    }
    return $result;

    // END
}


//task 2
print_r(setlocale(LC_CTYPE, ''));

//task 3
if (mb_strpos($text, $substr) === 0){
    return true;
} else {
    return false;
}