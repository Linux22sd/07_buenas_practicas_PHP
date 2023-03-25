<?php
namespace App;

class Calculator{
    protected $num1;
    protected $num2;

    public function __construct (int $num1, int $num2){
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function add() : int{
        return $this->num1 + $this->num2;
    }

    public function sus() : int{
        return $this->num1 - $this->num2;
    }

    public function mul() : int{
        return $this->num1 * $this->num2;
    }

    public function div() : int{
        return $this->num1 / $this->num2;
    }

    
}
?>