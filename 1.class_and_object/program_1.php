<?php 
class Fruit {
    // Properties
    public $name, $nm;

    // Methods
    function set_name($name) {
        $this->nm = $name;
    }

    function get_name() {
        return $this->nm;
        //echo $this->nm;
    }
}

$apple = new Fruit();
$apple->set_name("Apple");
//$apple->get_name();
echo $apple->get_name();

//O/P: Apple
?>
