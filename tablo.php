<?php $result = require __DIR__ . '/main.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="http://localhost/calculator/tablo.php" method="POST">
        <input type="number" name="x">
        <select name="operation" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="*">*</option>
        </select> 
        <input type="number" name="y">           
        <input type="submit" name="Calculate" value="Calculate">
    </form>
    <!-- <?php echo $result; ?> -->
</body>
</html>