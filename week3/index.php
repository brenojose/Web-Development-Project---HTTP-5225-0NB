<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 3</title>
</head>
<body>
    <?php

    //Class Practice

    //$hour = date('h');
    //echo $hour;
    //$hour = rand(1,24);
    //$day = 'Good morning!';
    //$afternoon = 'Good afternoon!';
    //$evening = 'Good evening!';
    //$night = 'Good night!';
    //echo '<p>the time is ' . $hour . ' o\'clock</p>' . '<br>';

    //if($hour >= 6 && $hour < 12) {
    //    echo $day;
    //} elseif($hour >= 12 && $hour < 18) {
    //    echo $afternoon;
    //} elseif($hour >= 18 && $hour <= 24) {
    //    echo $evening;
    //} else {
    //   echo $night;
    //}
    //


    // Challenge 1

    //$magicNumber = rand(1,100);
    //$fizz = 'Fizz!';
    //$buzz = 'Buzz!';
    //$fizzBuzz = 'FizzBuzz';
    //$rightOne = 'The magic number is ' . $magicNumber;

    //if($magicNumber % 3 === 0) {
    //    echo $fizz;
    //} else if ($magicNumber % 5 === 0) {
    //    echo $buzz;
    //} else if ($magicNumber % 3 === 0 && $magicNumber % 5 === 0) {
    //    echo $fizzBuzz;
    //} else {
    //    echo $rightOne;
    //}


    //Challenge 2
    date_default_timezone_set('America/New_York'); 

    $breakfastTime = 'Today is: ' . date('l jS \of F Y h:i:s A') . '<br><br>';
    $breakfast = 'Bananas, Apples and Oats.<br>';
    $lunch = 'Fish, Chicken and Vegetables<br>';
    $dinner = 'Steak, Carrots and Broccoli<br>';
    $interval = 'No food at this time!<br>';

    echo $breakfastTime;

    if ($breakfastTime > 5 && $breakfastTime < 9) {
        echo $breakfast;
    } else if ($breakfastTime > 12 && $breakfastTime < 14) {
        echo $lunch;
    } else if ($breakfastTime > 19 && $breakfastTime < 21) {
        echo $dinner;
    } else {
        echo $interval;
    }

    
    
    
    
    
    ?>
</body>
</html>
