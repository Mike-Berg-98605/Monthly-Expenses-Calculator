<?php
    // get the data from the form
    $income = filter_input(INPUT_POST, 'income',
        FILTER_VALIDATE_FLOAT);
    $rent = filter_input(INPUT_POST, 'rent',
        FILTER_VALIDATE_FLOAT);
    $car_insurance = filter_input(INPUT_POST, 'car_insurance',
        FILTER_VALIDATE_FLOAT);
    $gas = filter_input(INPUT_POST, 'gas',
        FILTER_VALIDATE_FLOAT);
    $groceries = filter_input(INPUT_POST, 'groceries',
        FILTER_VALIDATE_FLOAT);
    $utilities = filter_input(INPUT_POST, 'utilities',
        FILTER_VALIDATE_FLOAT);
    $cellphone = filter_input(INPUT_POST, 'cellphone',
        FILTER_VALIDATE_FLOAT);
    $health_insurace = filter_input(INPUT_POST, 'health_insurance',
        FILTER_VALIDATE_FLOAT);
    $subscriptions = filter_input(INPUT_POST, 'subscriptions',
        FILTER_VALIDATE_FLOAT);
    $entertainment = filter_input(INPUT_POST, 'entertainment',
        FILTER_VALIDATE_FLOAT);
    
    $general_message = "";
    $error_message = "";
    
    // validate income
    if ($income === FALSE ) {
        $error_message .= "Enter your income foo! "; 
    } 
    if ($income <= 0 ){
        $general_message .= "No income, you in trouble! "; 
    }
    // validate rent
    if ( $rent === FALSE )  {
        $error_message .= "Enter your rent foo! "; 
    } 
    if ( $rent <= 0 ) {
        $no_rent = "You pay no rent?? ";
        $general_message = $general_message . $no_rent; 
    }
    // validate car insurance
    if ( $car_insurance === FALSE ) {
        $error_message .= "Enter your car insurance foo! ";
    } 
    if ( $car_insurance <= 0 ) {
        $general_message .= "  No car insurance eh? ";
    } 
    // validate gas
    if ( $gas === FALSE ) {
        $error_message .= "Enter your gas cost foo! ";
    }
    if ( $gas <= 0 ) {
        $general_message .= "no gas for the car eh? ";
    }
    // validate groceries
    if ( $groceries === FALSE ) {
        $error_message .= "Enter your grocery cost foo! ";
    }
    if ( $groceries <= 0 ) {
        $general_message .= "No grocery purchases?? ";
        
    // validate utlities
    }
    if ( $utilities === FALSE ) {
        $error_message .= "Enter your utlities cost foo! ";
    }
    if ( $utilities <= 0 ) {
        $general_message .= "Think you forgot to enter your utilities expense. ";
        
    // validate cellphone
    } 
    if ( $cellphone === FALSE ) {
        $error_message .= "Enter your cellphone cost foo! ";
    } 
    if ( $cellphone <= 0 ) {
        $general_message .= "Dang you got no cellphone?? ";
    
    // validate health insurance
    } 
    if ( $health_insurace === FALSE ) {
        $error_message .= "Enter your health insurance cost foo! ";
    } 
    if ( $health_insurace <= 0 ) {
        $general_message .= "Too many people are uninsured. :( ";
    
    }
        // validate subscriptions    
    if ( $subscriptions === FALSE ) {
        $error_message .= "Enter your monthly subscription costs foo! ";
    } 
    if ( $subscriptions <= 0 ) {
        $general_message .= "No Netflix subscription eh? ";
    }
    // validate entertainment    
    if ( $entertainment === FALSE ) {
        $error_message .= "Enter your entertainment costs foo! ";
    } 
    if ( $entertainment <= 0 ) {
        $general_message .= "You gotta spend some money on entertainment right? ";
    }       
    // if an error message exists, go to the index page
    if ($error_message != '') {
        include('index.php');
        exit(); 
    } 
    $total_expenses = $rent + $car_insurance + $gas + $groceries + $utilities + 
            $cellphone + $health_insurace + $subscriptions + $entertainment;
    $left_over = $income - $total_expenses;
    
    
    if ($left_over > 0) {
        $broke_message = 'Congrats! You is not broke!';
    }
    else {
        $broke_message = 'Sorry, you is broke! :(';
    }
    
    $total_expenses = '$'.number_format($total_expenses, 2);
    $left_over = '$'.number_format($left_over, 2);
    $income = '$'.number_format($income, 2);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Monthly Expenses Calculator Results</h1>      
        
        <p>Your income of <span><?php echo $income; ?></span> minus your total 
            expenses of <span><?php echo $total_expenses; ?></span> leaves you 
            with a total of <span><?php echo $left_over; ?></span> at the end of
            the month.</p>
        
        <h3><?php echo htmlspecialchars($broke_message); ?></h3>
        
        <p><?php echo htmlspecialchars($general_message); ?></p>
        
    </main>
</body>
</html>
