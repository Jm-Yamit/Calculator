<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
   
        }
       
       

        .calculator {
            background-color: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(8, 20, 14, 0.97);
            width: 300px;
            text-align: center;
        }
        
        .calculator input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .calculator select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .calculator input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .calculator input[type="submit"]:hover {
            background-color: #218838;
        }
        .result {
            margin-top: 20px;
            font-size: 18px;
            color: #333;
        }
        .result h2 {
            margin: 0;
            color: #28a745;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h1>PHP Calculator</h1>
        <form method="post">
            <input type="number" name="num1" placeholder="Enter first number" required>
            <select name="operation">
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select>
            <input type="number" name="num2" placeholder="Enter second number" required>
            <input type="submit" name="calculate" value="Calculate">
        </form>

        <?php
        if (isset($_POST['calculate'])) {
            // Get the input values
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];
            $result = null;

            // Perform the calculation based on the selected operation
            switch ($operation) {
                case 'add':
                    $result = $num1 + $num2;
                    break;
                case 'subtract':
                    $result = $num1 - $num2;
                    break;
                case 'multiply':
                    $result = $num1 * $num2;
                    break;
                case 'divide':
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = "Error: Division by zero!";
                    }
                    break;
                default:
                    $result = "Invalid operation!";
                    break;
            }

            // Display the result
            echo "<div class='result'><h2>Result: $result</h2></div>";
        }
        ?>
    </div>
</body>
</html>