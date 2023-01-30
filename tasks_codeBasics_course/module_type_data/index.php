<?php
    //task 1
    print_r(-0.304);

    //task 2
    print_r('7' - ('-8' - -2));

    //task 3
    print_r((int)2.9 . ' times');

    //task 4
    $motto = 'What Is Dead May Never Die!';
    print_r($motto);

    //task 5 
    $name = 'Brienna';
    $name = strrev($name);
 
    print_r($name);

    //task 6
    $count_brothers = 2;
    print_r($count_brothers);

    //task 7
    $family = 'Targaryen';
    $pet = 'Dragon'; 

    print_r($family);
    print_r(' and ');
    print_r($pet);

    //task 8

    $eurosCount = 100;
    $dollarsCount = $eurosCount * 1.25;
    $rubCount = $dollarsCount * 60;
    print_r($dollarsCount . "\n". $rubCount);

    //task 9
    $info = "We couldn't verify you mother's maiden name.";
    $intro = "\nHere is important information about your account security.";

    $firstName = 'Joffrey';
    $greeting = 'Hello';
    print_r($greeting . ', ' . $firstName . '!');
    print_r($intro . "\n" . $info);

    //task 10
    $firstNumber = 1.10;
    $secondNumer = -100;
    print_r($firstNumber * $secondNumer);

    //task 11
    $king = 'King Balon the 6th';
    $countDinasty = 6;
    $countCastle = 17;
    $countRooms = $countCastle * $countDinasty;
    print_r($king . ' has ' . $countRooms . ' rooms.');

    //task 12
    const DRAGONS_BORN_COUNT = 3;
    print_r(DRAGONS_BORN_COUNT);

    //task 13
    print_r(__DIR__);

    //task 14
    $stark = 'Arya';
    print_r("Do you want to eat, {$stark}?");

    //task 15
    $one = 'Naharis';
    $two = 'Mormont';
    $three = 'Sand';
    print_r("{$one[2]}{$two[1]}{$three[3]}{$two[4]}{$two[2]}");

    //task 16
    $str = <<<EOT
    Lannister, Targaryen, Baratheon, Stark, Tyrell... they're all just spokes on a wheel.
    This one's on top, then that one's on top, and on and on it spins, crushing those on the ground.
    EOT;

    print_r($str);

