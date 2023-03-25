<?php
// PRICIPIOS SOLID

//S = Single Resposibility Principle  (SRP) ( Principios de Responsabilidad Unica )
//O = Open Close Principle            (OCP) ( Principio de Abierto Cerrado )
//L = Liskov Substitution Principle   (LSP) ( Principio de Sustitucion de liskov )
//I = Interface Segregation Principle (ISP) ( Principio de Sugregacion de Interfase )
//D = Dependency Inversion Principle  (DIP) ( Principio de Inversion de Dependencia )


// SRP = Una clase debe tener un unico objetivo
// ejemplo:

// La clase user tiene 2 responsabilidades separadas tendria mejor sentido separarlas en clases
// independientes 

class user{
    protected function formatResponse($data){
        return [
            "name"      => $data->name,
            "username"  => $data->username
        ];
    }

    protected function validateUser($user){
        if($user){
            return true;
        }
        else{
            echo "message";
        }
    }
}
// OCP = Una entidad de software debe quedarse abierta para su extension, pero cerrada
// para su modificacion 
// En este ejemplo la clase facturacion su metodo impresion imprimira no importa el tipo de 
// documento que sea, y si se desea agregar un formato nuevo no afectara al codigo

//------ Interface facturacion y array--------------------------------------------------------
$documentos = [];

function addtoarray(&$array, $doc){
    array_push($array, $doc);
}
interface Documento{
    public function informacion();
}

class Facturacion{
    public function impresion($documentos){
        foreach($documentos as $documento){
            echo $documento->informacion();
            echo '<br>';
        }
    }
}
$facturas = new Facturacion();

//------Tipos de documentos-------------------------------------------------------------------
class Doc_exel implements Documento{
    public function informacion(){
        return "Este es un documento Exel y va para administrativo";
    }
}
class Doc_pdf implements Documento{
    public function informacion(){
        return "Este es un documento pdf y va para produccion";
    }
}
//------- Instancias-------------------------------------------------------------------------
$exel = new Doc_exel;
addtoarray($documentos, $exel);
$pdf = new Doc_pdf;
addtoarray($documentos, $pdf);

// ------ Imprimiendo------------------------------------------------------------------------
$facturas->impresion($documentos);
//-------------------------------------------------------------------------------------------

// LSP = Cada clase que hereda de otra puede usarse como su padre sin necesidad de conocer
// las diferencias entre ellas.
// Condiciones: el cliente ejemplo una funcion fuera de las clases que trabaje con la clase 
// madre debe usar metodos de la clase madre unicamente.
// La clase hija no debe alterar el comportamiento de los metodos de la clase madre.


// ISP = Los clientes de un programa dado solo deberian de conocer de este aquellos
// metodos que relmente usan.


// DIP = Los modulos de alto nivel no deben depender de los de bajo nivel, ambos deben 
// depender de abstracciones.
// Las abstracciones no deben depender de los detalles los detalles deben depender de las abstracciones,


?>