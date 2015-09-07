<?php 

class Animal {
    public $foodType;
    public function __construct($foodType){
        $this->foodType = $foodType;
    }
}

class Zookeeper extends Animal{
    public $meat = '';
    public $veggies = '';

    public function __construct($meat, $veggies){
        $this->meat = $meat;
        $this->veggies = $veggies;
    }

    public function feed($animal){
        if($animal->foodType == 'carnivore'){
            $this->meat = $this->meat - 2;
        } elseif($animal->foodType == "herbivore"){
            $this->veggies -= 2; //$this->veggies - 2;
        } elseif($animal->foodType == 'omnivore'){
            $this->veggies -= 2;
            $this->meat    -= 2;
        }
    }

    public function getFoodStatus(){
        return "There are " . $this->meat . " units of meat, " . $this->veggies . " units of veggies.";
    }
}

$kevin = new Zookeeper(10, 10);
$lion = new Animal('carnivore');
$cow = new Animal('herbivore');
$pig = new Animal('omnivore');
print_r($cow);

echo "<br>";
$kevin->feed($lion);
print_r($kevin);

echo $kevin->getFoodStatus();
echo "<br>";

$kevin->feed($cow);
echo $kevin->getFoodStatus();
echo "<br>";
$kevin->feed($pig);
echo $kevin->getFoodStatus();
echo "<br>";
print_r($kevin);


 ?>