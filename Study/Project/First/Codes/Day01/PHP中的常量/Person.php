<?php
namespace First\Codes\Day01\PHP中的常量;

class Person
{
    public $username;
    public $age;

    public function show() {
        echo "我有才艺";
        echo "<br />";
        echo __CLASS__;
        echo "<br />";
        echo __METHOD__;
    }

    public function sing() {
        echo __METHOD__;
        echo "<br />";
        echo __NAMESPACE__;
    }
}

$people = new Person();
$people->username = "fanyin";
$people->age = 26;
$people->show();
$people->sing();
