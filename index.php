<?php

$error = '';
$result = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_number = $_POST['fn'];
    $second_number = $_POST['sn'];
    $operator = $_POST['operator'];
    
    if(!is_numeric($first_number) || !is_numeric($second_number)) {
        $error = 'Please enter the numbers.';
    } else {
        switch($operator) {
            case '+':
                $result = $first_number + $second_number;
                break;
    
            case '-':
                $result = $first_number - $second_number;
                break;
    
            case '*':
                $result = $first_number * $second_number;
                break;
    
            case '/':
                if ($second_number != 0) {
                    $result = $first_number / $second_number;
                } else {
                    $error = 'Cannot divide by zero.';
                }
                break;
            
            default:
                $result = "No operator found.";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP Calculator</title>
</head>
<body>

    <h1>Basic PHP Calculator</h1>

    <form action="" method="POST">
        
        <?php echo $error ?> <br>

        <?php echo $result ?> <br>

        <label for="fn_id">First Number:</label>
        <input type="text" name="fn" id="fn_id" required> <br>

        <label for="sn_id">Second Number:</label>
        <input type="text" name="sn" id="sn_id" required> <br>

        <select name="operator" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select> <br>

        <button type="submit">Calculate</button>

    </form>
    
</body>
</html>