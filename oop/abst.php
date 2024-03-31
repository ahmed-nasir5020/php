<?php
#--------oop-------------

use Person as GlobalPerson;

abstract class Person
{
    #attribute access modifier
    public $name;
    public $age;
    public $password;
    public $email;
    #construct
    function __construct($name, $age, $password, $email)
    {
        $this->name = $name;
        $this->age = $age;
        $this->password = $password;
        $this->email = $email;
    }
    #seter 
    function set_name($name)
    {
        $this->name = $name;
    }
    function set_age($age)
    {
        $this->age = $age;
    }
    function set_password($password)
    {
        $this->password = $password;
    }
    function set_email($email)
    {
        $this->email = $email;
    }
    #geter 
    function get_name()
    {
        return $this->name;
    }
    function get_age()
    {
        return $this->age;
    }
    function get_password()
    {
        return $this->password;
    }
    function get_email()
    {
        return $this->email;
    }
    #method 
    abstract function printinfo();
    final function goo()
    {
        echo "goo";
    }

    #destructer
    function __destruct()
    {
        echo "done";
    }
}

class Man extends Person
{
    #attribute access modifier
    private $price;
    #construct
    function __construct($name, $age, $password, $email, $price)
    {
        parent::__construct($name, $age, $password, $email);
        $this->price = $price;
    }
    #seter 
    function set_price($price)
    {
        $this->price = $price;
    }
    #geter
    function get_price()
    {
        return $this->price;
    }
    #method 
    function printinfo()
    {
        echo ("name : " . $this->name . "<br>");
        echo ("age : " . $this->age . "<br>");
        echo ("password : " . $this->password . "<br>");
        echo ("email : " . $this->email . "<br>");
        echo ("price : " . $this->price . "<br>");
    }
    // function goo(){

    // }
    #destructer
    function __destruct()
    {
        echo "<br> done25";
    }
}
// $woman = new GlobalPerson();
$man = new Man("omer", 30, 4545, "omer@gmail.com", 7500);
// echo($man);
$man->printinfo();
$man->goo();
