<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: grey;
        margin: auto;
        padding: 23px;
    }
</style>
<body>
    <div class="container">
        <h1>Lets learn about PHP</h1>
        <p>Your party status is here</p>
    <?php

    $age=71;
    if($age>18){
        echo"You can go to the party";
    }
    else if($age==7){
        echo"You are 7 now";
    }
    else{
        echo"You can not go to the party";
    }

    echo"<br>";

    // Arrays in PHP
    $languages = array("Pythpn","C++","php","Nodejs");
    // echo count($languages);
    // echo $languages[0];

    // Loops in PHP

    // Interating arrays in PHP using while loop
    $a = 0;
    while($a<=10){
        echo"<br> The value of a is: ";
        echo $a;
        $a++;
    }
    $a = 0;
    while($a < count($languages)) {
        echo"<br>The value of language is: ";
        echo $languages[$a];
        $a++;
    }

    // Do while loop
    $a = 200;
    do{
        echo"<br> The value of a is ";
        echo $a;
    }while($a < 10);

    // for loop 

    for ($a=60; $a < 10; $a++) { 
        echo"<br>The value of the for loop is ";
        echo$a;
    }

    // foreach loop

    foreach ($languages as $value) {
        echo"<br>The Value from foreach loop is ";
        echo $value;
    }

    // FUNCTION IN PHP

    function print5(){
        echo "<br>FIVE";
    }
    print5();
    print5();
    print5();

    function print_number($number){
        echo "<br>Your number is ";
        echo $number;
    }

    print_number(55);
    print_number(5);
    print_number(52225);





        

    ?>
    </div>
</body>
</html>