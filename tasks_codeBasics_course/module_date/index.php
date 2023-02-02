<?php

    //taks 1
    const SECONDS_IN_YEAR = 60 * 60 * 24 * 365;

    function getYear($timestamp)
    {
        // BEGIN (write your solution here)
        $result = floor($timestamp / SECONDS_IN_YEAR + 1970);
        return (int)$result;
        // END
    }


    //task 2
    function getCustomDate($timestamp)
    {
        // BEGIN (write your solution here)
        $result_y = date('Y', $timestamp);
        $result_m = date('m', $timestamp);
        $result_d = date('d', $timestamp);
        return $result_d . '/' . $result_m . '/' . $result_y;
        // END
    }

    //task 3
    function getHexletBirthday(){
        return mktime(0, 0, 0, 1, 1, 2012);
    }

    //task 4 
    print_r(date_default_timezone_get());
