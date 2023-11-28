<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php 
            $numbers = array(1,2,3,4,5);
            $numbers[3] = 44;
            echo $numbers[3];
            echo count($numbers);
        ?>

        <form action="index.php" method="post">
            Apple: <input type="checkbox" name="fruits[]" value="apple">
            Orange: <input type="checkbox" name="fruits[]" value="oranges"/>
            Pear: <input type="checkbox" name="fruits[]" value="pear">
            banana: <input type="checkbox" name="fruits[]" value="oranges"/>
            <button type="submit">SUBMIT</button>
        </form>

        <?php 
            $fruits = $_POST["fruits"];
            echo $fruits[1];
        ?>

        <h1>Associative array</h1>
        <?php
            $grades = array("Jim"=>"A+", "Pam"=>"A", "Tom"=>"+B");
            echo $grades["Tom"];
            echo count($grades);
        ?>

        <h1>Functions</h1>
        <?php
            function sayHi($name, $age){
                echo "Hello $name, you are $age";
            }

            sayHi("Dhriti", 35)
        ?>

        <h1>Return statements</h1>
        <?php
            function cube($num){
                return pow($num, 3);
            }

            echo cube(3)
        ?>

        <h1>If Statement</h1>
          <?php
            $isMale = true;
            $isTall = true;
            if($iMale && $isTall){
                echo "U R Male and tall";
            }elseif ($isMale && !$isTall){
                echo "U R male but not tall"; 
            }
            else {
                echo "U R not male and not tall";
            }

            function getMax($num1, $num2){
                if($num1>$num2){
                    return $num1;
                }
                else{
                    return $num2;
                }
            }

            echo getMax(3, 90);

            function getMaxOfThree($num1, $num2, $num3){
                if($num1>=$num2 & $num1>=$num3){
                    return $num1;
                }elseif($num2>=$num1 & $num2>=$num3){
                    return $num2;
                }else{
                    return $num3;
                }
            }
            echo getMaxOfThree(45,23,53)
          ?>
</body>
</html>