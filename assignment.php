<?php

namespace classwork;

class example {
    public function getName(){
        echo "this is classwork namespace";
    }
}
$obj = new example();
$obj->getName();



namespace classwork2;
class example2 {
    public function getName(){
        echo "this is classwork2 namespace";
    }
}

//$obj = new example();
$obj->getName();



class students {

    public function getStudent(){

        echo "this is students";
        echo "<br>";
    }

}

class oldStudents{
    public function getStudent(){

        echo "this is students ssss";
        echo "<br>";
    }
}


$obj = new students();
$obj->getStudent();

$obj = new oldstudents();
$obj->getStudent();