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

<?php
    include 'calculate.php';
?>

<div id='input'>
    <h1>One Rep Max Calculator</h1>
     <h4>Calculate your one-rep max (1RM) for any lift. <br>
    Your one-rep max is the max weight you can lift for a single repetition for a given exercise.</h4>
    <form action="result.php" name="1RM" method="post"> 
        <p><strong>Lift</strong> <input type="number" name="LiftNum" min="0" step="0.25" value="<?=$LiftNum?>" required> lb</p>
        <p><strong>Repetitions</strong> <input type="number" name="RepNum" min="0" onkeypress="return isNumberKey(event)" value="<?=$RepNum?>" required></p>
        <input type="submit" name ="calculate" value="Calculate One Rep Max">
    </form>
</div>

<div id='result'>
    <?php 
    $Print_Out = new Calculator();
    $Print_Out -> Your_Rm();
    ?>
    
    <table id='chart'>
        <thead>
            <tr>
                <th>Repetitions</th>
                <th>Lift Weight</th>
                <th>Percentage of 1RM</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            for($i=1; $i<=10; $i++)
            {
                $Percent = 100-2.78*($i-1);
                $Result_Table = $Result * $Percent/100;
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo round($Result_Table,1). 'lb'; ?></td>
                <td><?php echo round($Percent, 0).'&percnt;'; ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>

    </table>
</div>
</body>
</html>