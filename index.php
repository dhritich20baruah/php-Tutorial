<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $characterName = "John";
        $characterAge = 35;
        echo "<h1>Hello World! My name is $characterName. I am $characterAge</h1>";
        echo "<hr>";
        $characterName = "Mike";
        echo "<p>This is the first php page www.$characterName at the age of $characterAge</p>";
        $phrase = "Hello World! My name is Dhriti";
        $phrase[0] = "Y"; #replacing h with y
        echo strtoupper($phrase);
        echo "<hr>";
        echo strtolower($phrase);
        echo "<hr>";
        echo strlen($phrase);
        echo "<hr>";
        echo $phrase[2];
        echo "<hr>";
        echo str_replace("Yello", "Hi", $phrase); #replaces words
        echo "<hr>";
        echo  substr($phrase, 6, 5);
        echo "<h2>Working with numbers</h2>";
        echo 5.7 * 9;
        echo "<hr>";
        echo 10 % 3; # modulus operator returns the remainder
        echo "<hr>";
        $num = 10;
        $num++;
        echo $num;
        echo "<hr>";
        $num--;
        echo $num;
        echo "<hr>";
        $num *= 25;
        echo $num;
        echo "<hr>";
        echo abs(-100); #absolute value
        echo "<hr>";
        echo pow(2,4);
        echo "<hr>";
        echo sqrt(196);
        echo "<hr>";
        echo max(2, 10);
        echo min(2, 10);
        echo round(3.2);
        echo ceil(3.3);
        echo floor(3.3); 
        echo "<hr>";
        echo "<h1>Getting user input</h1>";
        echo "<br>";
    
    

    ?>
        <form action="php-server.php" method="get">
            Name: <input type="text" name="name" id="name">
            <br>
            <button type="submit">SUBMIT</button>
        </form>

        <br>
        <?php echo $_GET["name"] ?>
</body>
</html>