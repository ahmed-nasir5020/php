<?php
#--------oop-------------
interface mobile
{
    public function presshome();
}
class iphone implements mobile
{
    public function presshome()
    {
        echo "wellcome";
    }
}
class ipad implements mobile
{
    public function presshome()
    {
        echo "good bye";
    }
}

$iphone = new iphone();
$iphone->presshome();
$ipad = new ipad();
$ipad->presshome();
