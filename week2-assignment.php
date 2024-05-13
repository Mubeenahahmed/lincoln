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








Q1. Write a basic explanation in abstraction in oop and clearly  demonstrate with two or more examples.
Ans. Abstraction in object-oriented programing (oop) is a core principle that involves hiding the complex reality of the system using simple interfaces .
It allows the programmer of objects, rather than the internal implementation of objects 
Abstraction is often achieved using abstract classes or interfaces that serve as templates from which other classes can derive functionality. 
Examples are  
I. data abstraction.
II. process abstraction.

    
    Q4. I. Complexity: oop can introduce unnecessary complexity in software development if not used appropriately.
    II. overhead: object-oriented systems can require more systems resource than procedural programming due to
additional work needed to manage objects and their interactions
 III. improper use of inheritance: inheritance one of the key features in oop, can lead to a fragile software architecture, especially when misused.
IV. hidden data and behaviors: the encapsulation principle of oop, while useful for protecting and hiding data, can also lead to situations where the behavior of an object is obscured or not transparent, making debugging more challenging.
V. steep learning curve: the concepts of OOP such as encapsulation, abstraction, polymorphism, and inheritance can be difficult of beginners to grasp. This steep learning curve can lead to incorrect implementation and poor design decisions.  

