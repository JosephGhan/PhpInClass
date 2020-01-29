<?php
    if (!isset($investment)) {$investment = '';}
    if (!isset($interst_rate)) {$interst_rate = '';}
    if (!isset($years)) {$years = '';}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Future Value Calculator</title>
</head>
<body>
    <main>
    <h1>Future Value Calulator</h1>
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
    <?php } ?>
    <form action="display_results.php" method="post">
        <div id="data">
            <label>Investment Amount:</label>
            <input type="text" name="investment"
                    value "<?php echo htmlspecialchars($investment); ?>">
            <br>
            <label>Yearly Interst Rate:</label>
            <input type="text" name="interest_rate"
                    value "<?php echo htmlspecialchars($interst_rate); ?>">
            <br>
            <label>Number of Years:</label>
            <input type="text" name="years"
                    value "<?php echo htmlspecialchars($years); ?>">
            <br>
        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"><br>
        </div>
    </form>
    </main>
</body>
</html>