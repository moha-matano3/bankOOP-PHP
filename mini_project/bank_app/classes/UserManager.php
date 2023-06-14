<?php
require_once 'Database.php';
// classes/UserManager.php
class UserManager {
    private $db;

    public $host = '127.0.0.1';
    public $dbname = 'bank';
    public $username = 'root';
    public $password = 'MMatano@123';

    public function __construct() {
        // Establish database connection or initialize any necessary dependencies
        $this->db = new Database($this->host, $this->dbname, $this->username, $this->password); // Replace with your database connection logic
    }

    public function registerUser($user) {
        // Generate account_number for the new user
        $accountNumber = $this->generateAccountNumber();

        // Set initial balance for the new user
        $initialBalance = 0;

        // Save the user data to the database
        $sql = "INSERT INTO users (username, email, password, account_no, balance) VALUES (?, ?, ?, ?, ?)";
        $params = array($user->getUsername(), $user->getEmail(), $user->getPassword(), $accountNumber, $initialBalance);
        $this->db->execute($sql, $params);
    }

    private function generateAccountNumber($prefix='',$post_fix='') {
        // Generate a unique account number
        // Implement your own logic to generate account numbers, e.g., using random numbers or a combination of user details
        
        // $sql = "SELECT FLOOR(RAND() * 9999999999) AS account_number FROM users WHERE "account_number" NOT IN (SELECT my_number FROM account_number) LIMIT 1"
        
        $account=time();
        return ( rand(0000000001,9999999999).$prefix.$account.$post_fix);
        // Example: Generate a 10-digit account number
    }

    public function loginUser($username, $password) {
        // Check if the username and password match a user in the database
        $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
        $params = array($username, $password);
        $result = $this->db->execute($sql, $params); // Replace with your database query execution logic

        if ($result && $result->rowCount() > 0) {
            return $result->fetch(PDO::FETCH_ASSOC);
        }

        return null;
    }

    public function getUserById($userId) {
        // Retrieve user data from the database based on the provided user ID
        $sql = "SELECT * FROM users WHERE user_id = ?";
        $params = array($userId);
        $result = $this->db->execute($sql, $params); // Replace with your database query execution logic

        if ($result && $result->rowCount() > 0) {
            return $result->fetch(PDO::FETCH_ASSOC);
        }

        return null;
    }

    public function getTransactionsByUserId($userId) {
        // Retrieve transactions associated with the provided user ID
        $sql = "SELECT * FROM transactions WHERE user_id = ?";
        $params = array($userId);
        $result = $this->db->execute($sql, $params); // Replace with your database query execution logic

        if ($result && $result->rowCount() > 0) {
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }

        return array();
    }

    public function recordTransaction($senderAccount, $recipientAccount, $amount) {
        $dateTime = date('Y-m-d H:i:s');

        // Insert the transaction into the database
        $sql = "INSERT INTO transactions (sender_acc, recipient_acc, amount, transaction_date) VALUES (?, ?, ?, ?)";
        $params = array($senderAccount, $recipientAccount, $amount, $dateTime);
        $this->db->execute($sql, $params);
    }

    public function updateAccountBalance($accountNumber, $newBalance) {
        $sql = "UPDATE users SET balance = ? WHERE account_no = ?";
        $params = array($newBalance, $accountNumber);
        $this->db->execute($sql, $params);
    }

    public function getAccountBalance($accountNumber) {
        $sql = "SELECT balance FROM users WHERE account_no = ?";
        $params = array($accountNumber);
        $result = $this->db->execute($sql, $params); // Execute the query
        $row = $result->fetch(); // Fetch the result row
        return $row['balance']; // Return the balance column value
    }

    // Add other methods for user management, such as getUserById(), updateProfile(), deleteProfile(), etc.
}
