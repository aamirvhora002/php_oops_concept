<?php 
class calculation {
    public $no1,$no2, $no3, $no4, $result;

    function sum() {
        return $this->result = $this->no1 + $this->no2;
    }

    function mul($no1, $no2) {
        $this->no3 = $no1;
        $this->no4 = $no2;
        return $this->result = $this->no3 * $this->no4;
    }
}

$obj1 = new calculation();

$obj1->no1 = 10;
$obj1->no2 = 20;

echo "Summation: " .$obj1->sum() ."<br>";  // O/P: Summation: 30

$obj2 = new calculation();

echo "Multiplication: " .$obj2->mul(50,20); // O/P: Multiplication: 1000
?>