<?php
class Fruit {
    // Properties
    public $name,$color;

   // Methods
   // Save set_color and get_color methods (mininize/less code)
   function set_name($name, $color) {
    $this->nm = $name;
    $this->cl = $color;
   }

   function get_name() {
  //  echo "Fruit Name: " .$this->nm. " <b>and</b> Fruit Color: ".$this->cl;
  //  return "Fruit Name: " .$this->nm. " <b>and</b> Fruit Color: ".$this->cl;
    return $this->nm." <b>and</b> Fruit Color: ".$this->cl;
   }
}

   $apple = new Fruit();
   $apple->set_name("Apple","Red");

  //  $apple->get_name();
  //  echo $apple->get_name();
    echo "Fruit Name: " .$apple->get_name();

    //O/P: Fruit Name: Apple and Fruit Color: Red
?>