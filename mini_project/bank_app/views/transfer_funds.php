<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Transfer Funds</h2>
    <form method="POST" action="transfer_funds.php">
        <label for="recipient">Recipient Account No:</label>
        <input type="text" name="recipient_account" id="recipient" required>
    
        <label for="amount">Amount:</label>
        <input type="number" name="amount" id="amount" required>
    
        <button type="submit">Transfer</button>
    </form>
</body>
</html>