<?php 
class User{
    public $username='nayan';
    protected $email='n@gmail.com';
    public $password ='njr';
    public function getEmail(){
        return $this->email;
    }
    public function login()
    {
        echo $this->username . 'has logged in';
    }
    public function setEmail($email)
    {
        return $this->email=$email;
    }
}

class Admin extends User{
    public $role='superadmin';

    public function getEmail(){
        echo '<br>User logged in' . $this->email;
    }

} 

$user1 = new User();
$user1->username='power';
echo'<br>';
$user1->setEmail('nothing@gmail.com');
echo $user1->getEmail();
echo'<br>';
$user1->login();
echo'<br>';
echo'Admin info below<br>';
$admin = new Admin();

$admin->username='Admindai ';
echo'<br>';
$admin->login();
echo'<br>';
$admin->setEmail('admin@gmail.com');
echo'<br>';
echo $admin->getEmail();
?>