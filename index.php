<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="index.php" method="get">
            First number: <input type="number" name="num1" id="num1">
            <br>
            Second number: <input type="number" name="num2" id="num2">
            <br>
            <button type="submit">SUBMIT</button>
        </form>

        <br>
        <p>Sum :<?php echo $_GET["num1"] + $_GET["num2"]?></p>
</body>
</html>