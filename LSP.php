<?php
 // the following code illustates how the Liskov Substitution principle(LSP) works in PHP
 // if  we have S that subtype of T then objects of type T can be replaced with object of type S

interface Animal{
    public function walk();
    public function eat();
}
 
 class Dog implements Animal{

     public function walk() : void
     {
         echo "Walking .. ";
     }
     public function eat() : void
     {
         echo "Eating .. ";
     }
 }

class BullDog extends Dog{

    public function wrinkledFace() : void
    {
        echo "I have a wrinkled face .. ";
    }
    

}

$dog = new Dog();
$bullDog = new BullDog();

echo "Dog \n";
$dog->walk();
$dog->eat();

echo "\nBullDog\n";
$bullDog->walk();
$bullDog->eat();
$bullDog->wrinkledFace();

echo "\nParent Missing(instead of using dog we can replace it with bulldog without any issue)\n";
$bullDog->walk();
$bullDog->eat();