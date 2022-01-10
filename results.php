<?php

abstract class Animal {
    public $name; 
    public $picture; 


    abstract function makeSound();

}

class Apa extends Animal {
    
    function __construct($name, $picture) {
        parent::__construct($name, $picture);
    }

    function makeSound() {
        echo "<script>alert($this -> name) . (' Sounds') . (' AOOOPAAA')<script>"; 
    }

}

class Giraff extends Animal {


    function __construct($name, $picture) {
        parent::__construct($name, $picture);
    }

    
    function makeSound() {
        echo "<script>alert($this -> name) . (' Sounds') . (' IAWOOO')<script>"; 

    }

}

class Tiger extends Animal {


    function __construct($name, $picture) {
        parent::__construct($name, $picture); 
    }

    
    function makeSound() {
        echo "<script>alert($this -> name) . (' Sounds') . (' WAAAGH')<script>"; 

    }

}

class Coconut extends Animal {


    function __construct($name, $picture) {
        parent::__construct($name, $picture); 
    }

    
    function makeSound() {
        echo "<script>alert($this -> name) . (' Sounds') . (' PLOOOP')<script>"; 

    }

}





?>