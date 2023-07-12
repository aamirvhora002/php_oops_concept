<?php 
// use the instanceof keyword to check if an object belongs to a specific class

class Fruit {

}

$apple = new Fruit();
var_dump($apple instanceof Fruit);

// O/P: bool(true)
?>