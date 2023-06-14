<!DOCTYPE html>
<html>
<head>
  <title>Transaction History</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="main-content">
    <h2>Transaction History</h2>
    <?php if (!empty($transactions)) : ?>
      <table>
        <tr>
          <th>ID</th>
          <th>Sender Account</th>
          <th>Recipient Account</th>
          <th>Amount</th>
          <th>Date</th>
        </tr>
        <?php foreach ($transactions as $transaction) : ?>
          <tr>
            <td><?php echo $transaction['user_id']; ?></td>
            <td><?php echo $transaction['sender_account']; ?></td>
            <td><?php echo $transaction['recipient_account']; ?></td>
            <td><?php echo $transaction['amount']; ?></td>
            <td><?php echo $transaction['date_time']; ?></td>
          </tr>
        <?php endforeach; ?>
      </table>
    <?php else : ?>
      <p>No transactions found.</p>
    <?php endif; ?>
  </div>
</body>
</html>
