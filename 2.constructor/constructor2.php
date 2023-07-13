<?php
class person {
    public $name, $age;
    public $n, $a; // Value received properties

    function __construct($name = "No Name", $age = 0) {
        $this->n = $name;
        $this->a = $age;
    }

    function show() {
        echo "Name: " .$this->n. " and Age: " .$this->a. "<br>";
    }
}

$p1 = new person();
$p2 = new person("Admin", 20);

$p1->show(); // O/P: Name: No Name and Age: 0
$p2->show(); // O/P: Name: Admin and Age: 20
?>