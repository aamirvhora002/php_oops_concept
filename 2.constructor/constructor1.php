<?php 
// Constructor automatically call when class object created.
// Constructor define using __ (double underscore)

// Why use constructor?
// Written so many code for individual, but in constructor write code for common

// So many code Program-1 (General Program) 
// So many properties created and so many value set after object so code increased

class person {
    // Way -2 Set value when properties create
    public $name = "No Name", $age = 0;
    public $n, $a; // Value received properties

    function show() {
        echo "Name: " .$this->name ." and Age: " .$this->age ."<br>";
    }

    function another_show($name, $age) {
        $this->n = $name;
        $this->a = $age;
        echo "Name: " .$this->n ." and Age: " .$this->a;
    }
}

$p1 = new person();
// Way-1: Value set after creating object (if value not set o/p is properties value)
// $p1->name = "Admin";
// $p1->age = 20;

$p1->show();

// Way-3: Pass properties value in method  
$p2 = new person();
$p2->another_show("Super Admin", 52); 


?>