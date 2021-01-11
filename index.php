<?php echo 'PHP OOP'.'<br/>';

// MAGIC METHODS
// destruct and clone method

class User
{
    public $username;
    public $role = 'Member';
    protected $email;

    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    // Step 1 - create a __destruct method

    public function __destruct()
    {
        // performs any kind of clean-up or run any final code
        // whenever the last reference to a object instance is removed
        // example: you create a new instance for a user that references to a variable
        // the variable is just a reference or pointer
        // once that reference is removed and no other references pointing to that instance
        // then the destruct method will execute to remove it
        echo "The user {$this->username} has been removed".'<br/>';
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        if (strpos($email, '@') > -1) {
            $this->email = $email;
        }
    }
}

class AdminUser extends User
{
    public $level;
    public $role = 'Admin';

    public function __construct($username, $email, $level)
    {
        $this->level = $level;
        parent::__construct($username, $email);
    }

    public function message()
    {
        return "{$this->email} sent a new message";
    }
}

$userOne = new User('Phil', 'phil@philly.com');
$userTwo = new User('Rod', 'rod@roddy.com');
$userThree = new AdminUser('Rich', 'rich@richy.com', 8);

// Step 2 - use unset() to complete the destruct method
// unset(property) - destroys the specified variables
// basically this will remove the reference to the variable

// unset($userOne);
// this will remove that reference to the userOne property
// when PHP finishes executing or reach the end of the code
// it will remove other references because you don't need them anymore
// so you can remove unset() and it will still have the same effect

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Tutorial</title>
</head>

<body>

</body>

</html>