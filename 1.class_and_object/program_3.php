<?php
// How to change the value of the $name property?
//1. Inside the class (by adding set_name() method)

class Fruit_One {
    public $name, $nm;

    function set_name($name) {
        return $this->nm = $name;
    }
}

$apple = new Fruit_One();
$apple->set_name("Apple");

echo $apple->nm;
echo "<br><br><br>";
// OP/: Apple

//2. Outside the class (by directly changing the property value)
    // Create blank class
class Fruit_Two {
    public $color, $naam;
}

$banana = new Fruit_Two();
echo $banana->color = "Yellow ";
echo $banana->naam = "Banana";
          // OR
// echo $banana->color. " " .$banan->naam; // o/p show but un defined property warning show

// O/P: Yellow Banana
?>