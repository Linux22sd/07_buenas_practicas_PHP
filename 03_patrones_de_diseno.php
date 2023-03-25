<?php
// Patrones de diseno Son soluciones de arquitectura de sofyware aplicables a diferentes 
// problemas 
// Algo importante a tener en cuenta es que estos patrones no son aplicables siempre
// son simplemente ideas que te pueden ayudar a pensar para no tener que empezar en sin ninguna 
// idea, hay una riesgo asociado a esto que es el que se conoce como PATERNITIS cuando se quieren
// aplicar estos patrones para todos los problemas esto te puede traer mas problemas que soluciones
// asi que hay que tener cuidado donde y cuando los utilizamos.

// CREACION hablan de como se crean nuevas instancias deobjetos
// ESTRUCTURALES que nos dicen como debemos estructurar nuestras clases
// COMPORTAMIENTO que nos dicen como deben comportarse nuestros objetos

//------------------------------------------------------------------------------------------------
// PATRON SINGLENTON Se puede tomar tanto como patron de crecion como de comportamiento
// la idea es de tener una clase que solo tenga una indstancia a lo largo de nuestra aplicacion
// usualmente este patron se utiliza para optimizar recursos.

class Singleton {
    private static $theInstance = null;

    public static function getInstance(){
        if( self::$theInstance === null ){
            self:: $theInstance = new self();
        }
        return self::$theInstance;
    }

    private function __construct() {
        $this->property = 1;
    }

}
// La idea del metodo getInstance es verificar si la instancia no ha sido creada todavia es la 
// resposable justamemte imvocar el cosntructor y por el otro lado si la instancia ya esta creada
// lo unico qur hara sera retornarla, de modo que cada vez que uno quiera obtener la instancia de 
// Singleton tendra que llamar al metodo getInstance, de este modo nos aseguramos que solo exista 
// una instancia.

//------------------------------------------------------------------------------------------------
// PATRON FACTORY se trata de un patron creacional es decir que se utiliza para ayudar a la
// creacion de nuevas instancias 
// El patron se utilza usualmente cuando la creacion de un objeto justamente es un proceso muy
// complejo por ejemplo tal vez que requiera de muchos parametros, o la propia creacion del objeto
// requiera calculos complejos.

// Ejemplo :

class Automovile {
    private $vehicleMake;
    private $vehicleModel;

    public function __construct($make, $model){
        $this->vehicleMake = $make;
        $this->vehicleModel = $model;
    }
    public function getMakeAndModel(){
        return $this->vehicleMake . ' ' . $this->vehicleModel;
    }
}

// Factory

class AutomobileFactory{
    private static $model = 2019;
    
    private static function create($make){
        return new Automovile($Make, self::$model);
    }
}

$objeto_automovile = new Automovile('Renault', 2019); // Sin utilizar la factory
$objeto_automovileFactory::create('Renault'); // Utilizando la factory

//------------------------------------------------------------------------------------------------
// PATRON COMMAND se trata de un patron de comportamiento se utiliza cuando existe alguna 
// operacion especialmente compleja que debe de ser realizada desde diferentes puntos de entrada
// tipicamente esto sucede cuando desarrollas una aplicacion web y necesitas ejecutar la misma 
// operacion tanto desde la web y tambien desde la linea de comandos.

interface CommandInterface {
    public function execute();
}

