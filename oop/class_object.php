<?php 
#--------oop-------------
class Person{
    #attribute access modifier
private $name;
private $age;
private $password;
private $email;
    #construct
function __construct($name,$age,$password,$email){
$this->name=$name;
$this->age=$age;
$this->password=$password;
$this->email=$email;
}
    #seter 
function set_name($name){$this->name=$name;}
function set_age($age){$this->age=$age;}
function set_password($password){$this->password=$password;}
function set_email($email){$this->email=$email;}
    #geter 
function get_name(){return $this->name;}
function get_age(){return $this->age;}
function get_password(){return $this->password ;}
function get_email(){return $this->email;}
    #method 
function printinfo(){
    echo ("name : ". $this->name ."<br>");
    echo ("age : ". $this->age ."<br>");
    echo ("password : ". $this->password ."<br>");
    echo ("email : ". $this->email ."<br>");
}
    #destructer
    function __destruct()
    {
        echo "done";
    }
}

$man = new Person ("ahmed nasir",25,4545,"an20@gmail.com");
// $man->set_name("ahmed");
// $man->set_age(20);
// $man->set_password(1234);
// $man->set_email("an20@gmail.com");
$man->printinfo();
// $woman = new Person ();




?>