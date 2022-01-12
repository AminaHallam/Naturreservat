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

class Coconut extends Animal {
    
    
    function __construct($name, $picture) {
        parent::__construct($name, $picture); 
    }
    
    
    function makeSound() {
        echo "<script>alert($this -> name) . (' Sounds') . (' PLOOOP')<script>"; 
        
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


if(isset($_SERVER["REQUEST_METHOD"]) && ($_SERVER["REQUEST_METHOD"] == "POST")) {

    if(empty($_POST["Apa"]) && empty($_POST["Giraff"]) && empty($_POST["Coconut"]) && empty($_POST["Tiger"])) {

        echo "Please choose a number"; 

    }
    
    if(isset($_POST["Apa"]) && isset($_POST["Giraff"]) && isset($_POST["Coconut"]) && isset($_POST["Tiger"])) {

        $Apa = $_POST["Apa"]; 
        $Giraff = $_POST["Giraff"]; 
        $Coconut = $_POST["Coconut"]; 
        $Tiger = $_POST["Tiger"]; 



        for ($i = 0; $i < $Apa; $i++) {
            $rawData = file_get_contents("https://randomuser.me/api/");


        } 
        
        for ($i = 0; $i < $Giraff; $i++) {
            $rawData = file_get_contents("https://randomuser.me/api/");
        

        }

        for ($i = 0; $i < $Coconut; $i++) {
            $rawData = file_get_contents("https://randomuser.me/api/");
        

        }

        for ($i = 0; $i < $Tiger; $i++) {
            $rawData = file_get_contents("https://randomuser.me/api/");
        

        }



    }



}



?>