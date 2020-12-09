<?php 

// public properties which can be accessed and changed everywhere 
// private properties which can only be accessed internally inside the class where it was initially declared 
// protected properties which can only be accessed internally inside the class it was declared in as well as any subclass which inherits that property  

// inheritance 
class User {
    public $username;
    protected $email;
    public $role = 'member';

    public function __construct($usernameP,$emailP){
        $this->username = $usernameP;
        $this->email = $emailP;
    }
    
    // technocily this can be is a getter 
    public function sayHello() {
        return "$this->username said hello";
    }

    public function message() {
        return "$this->email sent a new message";
    }


    // getter
    public function getEmail() {
        return $this->email;
    }

    // setter
    public function setEmail($emailP) {
        if (strpos($emailP,'@') > -1) {

             return $this->email = $emailP;
        }
    }

}

// subclass 

class AdminUser extends User {

    public $level;
    public $role = 'admin'; // overriding the above 

    public function __construct($username, $email, $level) {
           $this->level = $level;
           parent::__construct($username, $email);
    }
    public function message() {
        return "$this->email sent a new message";
    }
}

$userOne = new User('tom', 'tomf@gmail.com');
$userTwo = new AdminUser('pul', 'pul@gmail.com', 5);

$userOne->setEmail('kool@drink.com');

// logging
echo $userOne->getEmail() . '<br>';
echo $userTwo->role . '<br>';
echo $userTwo->message();


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