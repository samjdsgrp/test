<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <div>
        <p>This is the first page</p>

        <?php
        define("PI",3.14);
            echo "hello world and this is printed using php"; 

            $variable1=10;
            $variable2=5;
            echo $variable1;
            echo $variable2;
            echo "<br>";
            echo $variable1 + $variable2;
            echo "<br>";


            //operation in PHP
            //Arithmetic operation
            // echo"The value of vari1 + var2 is";
            // echo "<br>";
            // echo $variable1 + $variable2;
            // echo "<br>";
            // echo"The value of vari1 - var2 is";
            // echo "<br>";
            // echo $variable1 - $variable2;
            // echo "<br>";
            // echo"The value of vari1 * var2 is";
            // echo "<br>";
            // echo $variable1 * $variable2;
            // echo "<br>";
            // echo"The value of vari1 /  var2 is";
            // echo "<br>";
            // echo $variable1 / $variable2;
            // echo "<br>";

            //Assignment operations
            // $newvar = $variable1;
            // $newvar += 1;
            // $newvar -= 1;
            // $newvar *= 2;
            // $newvar /= 5;
            // echo "The value of new variable is ";
            // echo $newvar;
            // echo "<br>";
            // echo "<br>";

            //comparsion operators
            // echo "<h1> Compasion operators </h1>";
            // echo "The value of 1==4 is";
            // echo var_dump(1==4);
            // echo "<br>";

            // echo "The value of 1!=4 is";
            // echo var_dump(1!=4);
            // echo "<br>";

            // echo "The value of 1>=4 is";
            // echo var_dump(1>=4);
            // echo "<br>";

            // echo "The value of 1<=4 is";
            // echo var_dump(1<=4);
            // echo "<br>";


            //increment/decrement
            // echo $variable1++;
            // echo $variable1--;
            // echo ++$variable1;
            // echo --$variable1;
            // echo "<br>";
            // echo $variable1;
            // echo "<br>";

            //logical operators
            // and
            // or(||)
            // xor
            // !

            // $myVar = (true and true);
            // $myVar = (false and true);
            // $myVar = (false and false);
            // $myVar = (true and false);

            // $myVar = (true xor true);
            // $myVar = (true or true);
            // $myVar = (true xor false);

            // echo "<br>";
            // echo var_dump($myVar);



            //DATA TYPES IN PHP
            // 1.String
            // 2.Integer
            // 3.Float
            // 4.Boolean
            // 5.Array
            //6.Object
            
            echo"<br> Data types <br>";
            $var = "This is a string";
            echo var_dump($var);
            echo"<br>";

            $var=67;
            echo var_dump($var);
            echo"<br>";

            $var = 67.1;
            echo var_dump($var);
            echo"<br>";

            $var = true;
            echo var_dump($var);
            echo"<br>";

            echo PI;






        ?>



        
        <!-- <?php
            //echo "hello world again";
        ?> -->

    </div>
    
</body>
</html>