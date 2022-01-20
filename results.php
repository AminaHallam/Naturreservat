<?php


abstract class Animal {
    public $name; 
    public $picture; 
    
    function onClickPicture() {
        $text = 'alert("'; 
        $text .= $this->name; 
        $text .= " Sounds: "; 
        $text .= $this->makeSound(); 
        $text .= '");'; 
        return $text; 
    }
    
    
    function __construct($name, $picture) {
        $this->name = $name;
        $this->picture = $picture; 
    }
    
    abstract function makeSound();
    
    
    function alertPicture() {
        echo "<img src='".$this->picture. "' onClick= '" .$this->onClickPicture(). "'/>"; 
    }
    
}

class Apa extends Animal {
    
    function __construct($name, $picture) {
        parent::__construct($name, $picture);
    }
    
    function makeSound() {
        return "AOOOPAAA"; 
    }
    
}

class Giraff extends Animal {
    
    
    function __construct($name, $picture) {
        parent::__construct($name, $picture);
    }
    
    
    function makeSound() {
        return "IAWOOO"; 
        
    }
    
}

class Tiger extends Animal {
    
    
    function __construct($name, $picture) {
        parent::__construct($name, $picture); 
    }
    
    
    function makeSound() {
        return "WAAAGH"; 
        
    }
    
}

class Coconut extends Animal {
    
    
    function __construct($name, $picture) {
        parent::__construct($name, $picture); 
    }
    
    
    function makeSound() {
        return "PLOOOP"; 
        
    }
    
}


function animalsPicture($pictureCount) {
    if($pictureCount == 2) {
        return 1; 
    } else {
        return $pictureCount + 1; 
    }
    
}

function coconutPicture($picCount) {
    if($picCount == 4) {
        return 1;
    } else {
        return $picCount +1;
    }
}



session_start(); 



if(isset($_SERVER["REQUEST_METHOD"]) && ($_SERVER["REQUEST_METHOD"] == "POST")) {
    
    if(empty($_POST["Apa"]) && empty($_POST["Giraff"]) && empty($_POST["Coconut"]) && empty($_POST["Tiger"])) {
        
        echo "Please choose a number"; 
        
    }
    
    if(isset($_POST["Apa"]) && isset($_POST["Giraff"]) && isset($_POST["Coconut"]) && isset($_POST["Tiger"])) {

        $Apa = $_POST["Apa"]; 
        $Giraff = $_POST["Giraff"]; 
        $Coconut = $_POST["Coconut"]; 
        $Tiger = $_POST["Tiger"]; 

        $listOfAnimals = []; 

        $pictureCount = 1; 

        for ($i = 0; $i < $Apa; $i++) {
            $rawData = file_get_contents("https://randomuser.me/api/");
            $name = json_decode($rawData)->results[0]->name->first; 
            $apaAnimal = new Apa($name, "./apa/monkey" . $pictureCount . ".jpg"); 

            $pictureCount = animalsPicture($pictureCount); 

            array_push($listOfAnimals, $apaAnimal); 

        } 

        $pictureCount = 1; 
        
        for ($i = 0; $i < $Giraff; $i++) {
            $rawData = file_get_contents("https://randomuser.me/api/");
            $name = json_decode($rawData)->results[0]->name->first; 
            $giraffAnimal = new Giraff($name, "./giraff/giraffe" . $pictureCount . ".jpg"); 

            $pictureCount = animalsPicture($pictureCount); 

            array_push($listOfAnimals, $giraffAnimal); 
        }

        $pictureCount = 1; 

        for ($i = 0; $i < $Tiger; $i++) {
            $rawData = file_get_contents("https://randomuser.me/api/");
            $name = json_decode($rawData)->results[0]->name->first; 
            $tigerAnimal = new Tiger($name, "./tiger/tiger" . $pictureCount . ".jpg"); 

            $pictureCount = animalsPicture($pictureCount); 

            array_push($listOfAnimals, $tigerAnimal); 

        }

        $picCount = 1;

        for ($i = 0; $i < $Coconut; $i++) {
            $rawData = file_get_contents("https://randomuser.me/api/");
            $name = json_decode($rawData)->results[0]->name->first; 
            $coconutInZoo = new Coconut($name, "./coconut/coco" . $picCount . ".jpg"); 

            $picCount = coconutPicture($picCount); 

            array_push($listOfAnimals, $coconutInZoo); 

        }


        foreach ($listOfAnimals as $animalsSounds) {
            $animalsSounds->alertPicture(); 

            echo $animalsSounds->name. " "; 
        }

    }



}



?>