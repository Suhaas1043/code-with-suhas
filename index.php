<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
</head>
<body>

<h2>Simple Currency Converter</h2>

<form method="POST" action="convertor.php">
    <label for="amount">Amount:</label>
    <input type="number" id="amount" name="amount" step="0.01" required>
    
    <label for="from_currency">From:</label>
    <select id="from_currency" name="from_currency">
        <option value="USD">USD</option>
        <option value="EUR">EUR</option>
        <option value="GBP">GBP</option>
        <option value="INR">INR</option>
    </select>
    
    <label for="to_currency">To:</label>
    <select id="to_currency" name="to_currency">
        <option value="USD">USD</option>
        <option value="EUR">EUR</option>
        <option value="GBP">GBP</option>
        <option value="INR">INR</option>
    </select>
    
    <button type="submit">Convert</button>
</form>

</body>
</html>

