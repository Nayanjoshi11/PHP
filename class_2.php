<?php

    class Animal{
        public $weight = 40;
        public $height = 50;
        private $color ='red';

        public function getColor(){
            return $this->color;
        }

        public function move(){
            //codes;
            echo"It moves<br>";
        }

        public function eat(){
            echo"It eats<br>";
        }

        public function sleep(){
            echo"It sleeps<br>";
        }


        
    }

    class Dog  extends Animal{

    }

    // $animal = new Animal();
    // $animal->move();
    // $animal->eat();
    $dog=new Dog();
    $dog->move();
    $dog->eat();
    $dog->sleep();
    echo $dog->getColor();
 ?>
