<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "header.html" ?>
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

          <h1>Switch Statement</h1>
          <form action="index.php" method="post">
            What was your grade?
            <input type="text" name="grade">
            <input type="submit">
          </form>
          <?php
            $grade = $_POST["grade"];
            switch($grade){
                case "A":
                    echo "You did amazing!";
                    break;
                case "B":
                    echo "You did OK";
                    break;
                case "C":
                    echo "You did poorly.";
                    break;
                default:
                    echo "Invalid grade";
            }
          ?>

          <h1>While loop</h1>
          <?php
            $index = 1;
            while($index <= 5){
                echo "$index <br>";
                $index++;
            }
            ?>

         <h1>Do While loop</h1>
          <?php
            $index = 6;
            do{
                echo "$index <br>";
                $index++;
            } while($index <= 5)
            ?>

           <h1>For loop</h1>
          <?php
           $nums = array(4,6,2,5,67,1);
            for($i = 1; $i < count($nums); $i++){
                echo "$nums[$i] <br>";
            }
            //Single line comment
            /*
            Multi line comment
            */
            ?>  

            <?php
                $title = "My First Post";
                $author = "Mike";
                $wordcount = 400;
                include "artile-header.php"  
            ?>

            <h1>CLASSES AND OBJECTS </h1>
            <?php
                class Book {
                    var $title;
                    var $author;
                    var $pages;

                    function __construct($aTitle, $aAuthor, $aPages){
                        $this->title = $aTitle;
                        $this->author = $aAuthor;
                        $this->pages = $aPages;

                    }
                }

                $book1 = new Book(); //An object is an instance of class 
                $book1->title = "Harry Potter";
                $book1->author = "JK ROwling";
                $book1->pages = 400;

                $book2 = new Book( "Call of the wild", "Jack London", 300); //An object is an instance of class 
             
                echo $book1->title;
                echo $book2->title;
            ?>

            <h1>Object Function</h1>
            <?php
                class Student {
                    var $name;
                    var $major;
                    var $percentage;

                   function __construct($name, $major, $percentage){
                    $this->name = $name;
                    $this->major = $major;
                    $this->percentage = $percentage;
                   }  

                   function hasHonors(){
                    if($this->percentage >= 70){
                        return "true";
                    }
                       return "false";
                   }
                }
                $student1 = new Student("Jim", "CAD/CAM", 67);
                $student2 = new Student("Tim", "Quality Control", 70);

                echo $student1->hasHonors()
            ?>

            <h1>Getters and setters</h1>

            <h1>Class Inheritance</h1>
            <?php
                class Chef{
                    function makeChicken(){
                        echo "Chef makes Chicken";
                    }
                }

                class ItalianChef extends Chef {

                }

                $chef = new Chef();
                $chef->makeChicken();

                $ItalianChef = new ItalianChef();
                $ItalianChef->makeChicken();
            ?>
</body>
</html>