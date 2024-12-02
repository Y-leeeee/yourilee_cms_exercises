<?php
// task1
function colorBird($text, $color) {
    echo "<p style='color: $color;'>$text</p>";
}
colorBird("Hello bird!", "green");

// task2
class Bird {
    public $color;
    function __construct($color) {
        $this->color = $color;
    }
}
$pipen = new Bird("blue");
colorBird("The pipe color is " . $pipen->color, "blue");

//task3
class BirdSpecies {
    public $color;
    public $species;
    function __construct($color, $species) {
        $this->color = $color;
        $this->species = $species;
    }
}

//task4
class BirdOpinion {
    private $opinion_on_windows;
    public function set_opinion_on_windows($opinion) {
        $this->opinion_on_windows = $opinion;
    }
    public function get_opinion_on_windows() {
        return $this->opinion_on_windows;
    }
}

//task5
$bird2= new BirdOpinion();
$bird2->set_opinion_on_windows("what");
colorBird("Opinion1:  " . $bird2->get_opinion_on_windows(), "purple");
$bird3 = new birdOpinion();
$bird3->set_opinion_on_windows("idk");
colorBird("Opinion2: " . $bird3->get_opinion_on_windows(), "orange");

//task6
abstract class Animal {
    private $first_name;
    public function set_first_name($name) {
        $this->first_name = $name;
    }
    public function get_first_name() {
        return $this->first_name;
    }
    function greeting() {
        return "Djurets hälsningsfras!";
    }
}

//task7
class Fox extends Animal {
}
$foxbert = new Fox();
$foxbert->set_first_name("Foxbert");
colorBird("Greeting: " . $foxbert->greeting(), "pink");

//task8
class FoxGreeting extends Animal {
    public function greeting() {
        return "whatttt?";
    }
}

$foxbert2 = new FoxGreeting() ;
colorBird("Greeting: " . $foxbert2->greeting(), "gray");

//task9
abstract class AnimalAbstract {
    private $first_name;

    public function set_first_name($name) {
        $this->first_name = $name;
    }
    public function get_first_name() {
        return $this->first_name;
    }
    public function greeting() {
        return "Djurets hälsningsfras!";
    }
}
class BirdAbstract extends AnimalAbstract {

}
class FoxAbstract extends AnimalAbstract {

}

//task10
trait CreateBird {
    public function colorBird($text, $color) {
        echo "<p style='color: $color;'>$text</p>";
    }
}
class BirdTrait {
    use CreateBird;

    function __construct() {
        $this->colorBird("new bird", "brown");
    }
}

$newBird = new BirdTrait();

?>