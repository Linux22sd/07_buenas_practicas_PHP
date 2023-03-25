<?php
// Tipos de tests automatizados
// Unitarios y de Integracion 

// Test Unitario:
// Unit_Testing se refiere a tomar cada unidad del software por separado y analizarla fuera de su
// contexto para validar que hace lo que tiene que hacer.

// Para poder aplicat el Unit_Test necesitamos de una herramienta que nos permita escribit los
// tests por un lado, y por otro lado ejecutarlos y que nos muestre los errores, en este caso 
// se utilizara PHPUNIT 

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase {
    public function testPushAndPop(){
        $stack = [];
        $this->assertSame(0, count($stack));                    // true
        array_push($stack, 'foo');                              // true
        $this->assertSame('foo', $stack[count($stack)-1]);      // true
        $this->assertSame(1, count($stack));                    // true
        $this->assertSame('foo', array_pop($stack));            // true
        $this->assertSame(0, count($stack));                    // true
    }
}

// Test de Integracion este valida la interacion entre ellos es decir como se comporta el sistema
// completo

// use PHPUnit\Framework\TestCase;

class WebTest extends TestCase {
    public function testAction(){
        $client = new HttpClient('misitio.com');

        $this->assertErrorCode(200, $client->sendRequest());
    }
}
?>