<?php echo 'PHP OOP'.'<br/>';

// PROTECTED MODIFIER
// how can a child class access a private property from the parent class?
// use 'protected' access modifier rather than private
// this allows child classes that inherits from the parent class can access that property
// can only be used internally between classes and does not allow access from outside classes

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

    public function addFriend()
    {
        return "{$this->email} added a new friend".'<br/>';
    }

    public function message()
    {
        return "{$this->email} sent a new message";
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
    // if wanting to override a property/method then you can set a value in child class

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

echo $userOne->role.'<br/>';
echo $userThree->role.'<br/>';

echo $userOne->message().'<br/>';
echo $userThree->message().'<br/>';

echo $userThree->getEmail().'<br/>';

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