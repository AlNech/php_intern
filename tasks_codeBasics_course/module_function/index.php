<?php
    //task1
    $company1 = 'Apple';
    $company2 = 'Samsung';
    print_r(strlen($company1) + strlen($company2));

    //task 2
    $text = 'mount';
    print_r(ucfirst($text));

    //task 3
    $number = 10.1234;
    print_r(round($number, 2));

    //task 4
    $text = 'Never forget what you are, for surely the world will not';
    print_r("First: {$text[0]}\nLast: {$text[strlen($text) - 1]}");

    //task 5 
    print_r(min(3, 10, 22, -3, 0));

    //task 6
    print_r(rand(1, 6));

    //task 7
    $motto = 'Family, Duty, Honor';
    print_r(gettype($motto));

