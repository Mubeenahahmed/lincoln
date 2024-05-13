<?php
class fruit{
    public $name;
    public $color;
    public function setName($name){
        $this->name=$name;
    }
     public function getName(){
        echo "the fruit name is " . $this->name;

     }
    public function setColor($color){
        $this->color=$color;
    } 
        public function getColor(){
            echo "the color is " . $this->color;
        }

}
$fruit1=new fruit();
$fruit1->setName("Mango");
echo $fruit1->getName();
echo "<br>";
$fruit1->setColor("Yellow");
echo $fruit1->getColor();
echo "<br>";
$fruit2=new fruit();
$fruit2->setName("Avocado");
echo $fruit2->getName();
echo "<br>";
$fruit2->setColor("Green");
$fruit2->getColor();
echo "<br>";
$fruit3=new fruit();
$fruit3->setName("Watermelon");

echo $fruit3->getName();
echo "<br>";
$fruit3->setColor("Green");
$fruit3->getColor();
echo "<br>";
$fruit4=new fruit();
$fruit4->setName("Pineapple");
echo $fruit4->getName();
echo "<br>";
$fruit4->setColor("Yellow");
$fruit4->getColor();

echo "<br>";
class education{
    function getName(){
        echo "this is federal ministry of education";
    }
}
class nuc extends education{
    function getName(){
        echo "nigerian university commision";
    }
}
class nsuk extends nuc{
    function getName(){
        echo "this is nasssarawa state university";
    }
}
class nbte extends education{
    function getName(){
        echo "this is nbte";
    }
    
}
