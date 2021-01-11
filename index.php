<?php echo 'PHP OOP'.'<br/>';

// MAGIC METHODS
// __destruct() and __clone() method
// magic methods start with double underscore

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

    public function __destruct()
    {
        echo "The user {$this->username} has been removed".'<br/>';
    }

    // CLONE METHOD
    // making a clone of another object
    // by default, you will copy all the same properties/methods from the object

    public function __clone()
    {
        $this->username = $this->username.'(clone) ';
        // grab the username from userOne
        // and set it equal to this object's username
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

$userFour = clone $userOne;
// made an identical copy of $userOne stored in $userFour
echo $userFour->username;

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