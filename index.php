<?php

$result = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

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

        <?php echo $result ?> <br>

        <label for="fn_id">First Number:</label>
        <input type="number" name="fn" id="fn_id"> <br>

        <label for="sn_id">Seccond Number:</label>
        <input type="number" name="sn" id="sn_id"> <br>

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