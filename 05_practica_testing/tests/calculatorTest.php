<?php
//TDD o Test Driven Develoment 

use PHPUnit\Framework\TestCase;

use App\Calculator;

class CalculatorTest extends TestCase{
    public function testAddWillReturnTheSumOfThisParameters(){
        // sut (source under test) 
        $sut = new Calculator(10, 5);

        $this->assertEquals(15, $sut->add());
        $this->assertEquals(5, $sut->sus());
        $this->assertEquals(50, $sut->mul());
        $this->assertEquals(2, $sut->div());
    }
}

// Comando para correr el tests en consola el --testdox es opcional y te permite imprimir el nombre de la funcion dividida con espacios entre cada 
// espacio en el resultado del test

// vendor/phpunit/phpunit/phpunit --testdox
?>