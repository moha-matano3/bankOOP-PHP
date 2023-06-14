<?php
// classes/User.php
class User {
    private $username;
    private $email;
    private $password;
    // private $account;
    // private $balance;

    public function __construct($username, $email, $password){ //$account, $balance) {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        // $this->account = $account;
        // $this->balance = $balance;

    }

    // Add getter and setter methods for the User class properties if needed
    

    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
 



    // public function setAccount($account)
    // {
    //     $this->account = $account;

    //     return $this;
    // }

    // public function getAccount()
    // {
    //     return $this->account;
    // }

    // /**
    //  * Set the value of account
    //  *
    //  * @return  self
    //  */ 


    // public function setBalance($balance)
    // {
    //     $this->balance = $balance;

    //     return $this;
    // }

    // public function getBalance()
    // {
    //     return $this->balance;
    // }

    // /**
    //  * Set the value of balance
    //  *
    //  * @return  self
    //  */ 
}
