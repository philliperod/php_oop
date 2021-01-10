<?php echo 'PHP OOP'.'<br/>';

// INHERITANCE
// when you extend a class, the subclass (children) inherits all methods from the parent
// unless a class overrides those methods, they will retain their original functionality
// permits the implementation of additional functionality in similar objects
// without the need to reimplement all of the shared functionality

class User
{
    public $username;
    private $email;

    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function addFriend()
    {
        return "{$this->email} added a new friend".'<br/>';
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
    // to inherit one's class properties/methods, use 'extends'
    // if adding another prop/method, must use another constructor function
    public $level;

    public function __construct($username, $email, $level)
    {
        $this->level = $level;
        parent::__construct($username, $email);
        // when you have another constructor function in a class that is inheriting
        // it will override the parent's constructor function
        // in order to inherit those properties, you can use parent::property/method
    }
}

$userOne = new User('Phil', 'phil@philly.com');
$userTwo = new User('Rod', 'rod@roddy.com');
$userThree = new AdminUser('Rich', 'rich@richy.com', 8);

echo $userOne->username.'<br/>';
echo $userThree->username.'<br/>';
echo $userThree->getEmail().'<br/>';
echo $userThree->level;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>