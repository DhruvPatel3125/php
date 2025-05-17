<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Output Examples</title>
</head>
<body>
    <div class="container">
        <h1>PHP Output Examples</h1>
        
        <?php
        // Using echo to output text
        echo "<p>Hello from PHP!</p>";
        
        // Variables and output
        $name = "User";
        $age = 25;
        echo "<p>Name: $name, Age: $age</p>";
        
        // Using print_r for arrays
        $colors = array("Red", "Green", "Blue");
        echo "<p>Colors: </p>";
        print_r($colors);
        
        // Using var_dump for detailed information
        echo "<p>Variable information: </p>";
        var_dump($name);

        // Data Types
        echo "<h2>Data Types</h2>";
        $string = "This is a string";
        $integer = 42;
        $float = 3.14;
        $boolean = true;
        $null = null;
        
        echo "<p>String: $string</p>";
        echo "<p>Integer: $integer</p>";
        echo "<p>Float: $float</p>";
        echo "<p>Boolean: " . ($boolean ? 'true' : 'false') . "</p>";
        echo "<p>Null: " . var_export($null, true) . "</p>";

        // Conditional Statements
        echo "<h2>Conditional Statement Example</h2>";
        $time = date('H');
        if ($time < 12) {
            echo "<p>Good morning!</p>";
        } elseif ($time < 18) {
            echo "<p>Good afternoon!</p>";
        } else {
            echo "<p>Good evening!</p>";
        }

        // Loops
        echo "<h2>Loop Example</h2>";
        echo "<p>Counting from 1 to 5:</p>";
        for ($i = 1; $i <= 5; $i++) {
            echo "$i ";
        }

        // Functions
        echo "<h2>Function Example</h2>";
        function greet($name) {
            return "Hello, $name!";
        }
        echo "<p>" . greet($name) . "</p>";
        ?>
    </div>
</body>
</html>