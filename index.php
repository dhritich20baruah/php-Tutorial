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
</body>
</html>