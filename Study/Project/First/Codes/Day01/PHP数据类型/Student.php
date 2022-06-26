<?php

class Student
{
    public $tureName;
    public $age;
    public $money = null;

    public function reading() {
        echo $this->tureName."今年".$this->age."岁,目前在读书";
    }
}
$student = new Student();
$student->tureName = "张三";
$student->age = 16;
$student->reading();
echo gettype($student);

echo gettype($student->money);
echo "<br />";
if(is_object(2)) {
    echo "是对象";
}else{
    echo "不是对象";
}