<?php 
    //set default value of variables for initial page load
    if (!isset($income)) { $income = ''; } 
    if (!isset($rent)) { $rent = ''; } 
    if (!isset($car_insurance)) { $car_insurance = ''; }
    if (!isset($gas)) { $gas = ''; }
    if (!isset($groceries)) { $groceries = ''; }
    if (!isset($utilities)) { $utilities = ''; }
    if (!isset($cellphone)) { $cellphone = ''; }
    if (!isset($health_insurace)) { $health_insurace = ''; }
    if (!isset($subscriptions)) { $subscriptions = ''; }
    if (!isset($entertainment)) { $entertainment = ''; }
?> 
<!DOCTYPE html>
<html>
<head>
    <title>Monthly Expenses Calculator</title>
    <link rel="stylesheet" type="text/css" href="./main.css">
</head>
<body id="bdy">
    <main>
    <h1>Monthly Expenses Calculator</h1>
    <h3>Enter your estimated expenses for this month to find out if you will 
    be broke by the end of the month!</h3>
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
    <?php } ?>
    <form action="display_results.php" method="post">
        <div id="data">
            <label>Income:</label>
            <input type="text" name="income"
                   value="<?php echo htmlspecialchars($income); ?>">
            <br>
            <label>Rent:</label>
            <input type="text" name="rent"
                   value="<?php echo htmlspecialchars($rent); ?>">
            <br>            
            <label>Car Insurance:</label>
            <input type="text" name="car_insurance"
                   value="<?php echo htmlspecialchars($car_insurance); ?>">            
            <br>            
            <label>Gas:</label>
            <input type="text" name="gas"
                   value="<?php echo htmlspecialchars($gas); ?>">            
            <br>            
            <label>Groceries:</label>
            <input type="text" name="groceries"
                   value="<?php echo htmlspecialchars($groceries); ?>">            
            <br>            
            <label>Utilities:</label>
            <input type="text" name="utilities"
                   value="<?php echo htmlspecialchars($utilities); ?>">            
            <br>
            <label>Cellphone:</label>
            <input type="text" name="cellphone"
                   value="<?php echo htmlspecialchars($cellphone); ?>">            
            <br>
            <label>Health Insurance:</label>
            <input type="text" name="health_insurance"
                   value="<?php echo htmlspecialchars($health_insurace); ?>">            
            <br>
            <label>Subscriptions:</label>
            <input type="text" name="subscriptions"
                   value="<?php echo htmlspecialchars($subscriptions); ?>">            
            <br>
            <label>Entertainment:</label>
            <input type="text" name="entertainment"
                   value="<?php echo htmlspecialchars($entertainment); ?>">            
            <br>
            
        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Initiate Brokeness Calculator"><br>
        </div>

    </form>
    </main>
</body>
</html>