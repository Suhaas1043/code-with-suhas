<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST['amount'];
    $from_currency = $_POST['from_currency'];
    $to_currency = $_POST['to_currency'];

    // Exchange rates as of the time of coding (These should be updated or fetched dynamically)
    $exchangeRates = [
        "USD" => ["USD" => 1, "EUR" => 0.85, "GBP" => 0.75, "INR" => 74.0],
        "EUR" => ["USD" => 1.18, "EUR" => 1, "GBP" => 0.88, "INR" => 87.0],
        "GBP" => ["USD" => 1.33, "EUR" => 1.13, "GBP" => 1, "INR" => 99.0],
        "INR" => ["USD" => 0.013, "EUR" => 0.011, "GBP" => 0.010, "INR" => 1],
    ];

    if (isset($exchangeRates[$from_currency][$to_currency])) {
        $convertedAmount = $amount * $exchangeRates[$from_currency][$to_currency];
        echo "<h3>$amount $from_currency is equal to $convertedAmount $to_currency</h3>";
    } else {
        echo "<h3>Invalid currency conversion.</h3>";
    }
} else {
    echo "<h3>No data received.</h3>";
}
?>
