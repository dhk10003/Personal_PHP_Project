<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Project</title>
    <script src="calculate.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id='input'>
    <h1>One Rep Max Calculator</h1>
    <h4>Calculate your one-rep max (1RM) for any lift. <br>
    Your one-rep max is the max weight you can lift for a single repetition for a given exercise.</h4>
    <form action="result.php" name="1RM" method="post"> 
        <p><strong>Lift</strong> <input type="number" name="LiftNum" min="0" step="0.25" required> lb</p>
        <p><strong>Repetitions</strong> <input type="number" name="RepNum" min="0" onkeypress="return isNumberKey(event)" required></p>
        <input type="submit"  name="calculate" value="Calculate One Rep Max">
    </form>
</div>
    
</body>
</html>