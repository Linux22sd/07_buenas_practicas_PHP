<?php
// Que es lo que se tiene que documentar?

// Se tiene que pensar en la persona que va a tomar tu codigo cuando tu lo dejes
// Que es lo minimo que necesita esta persona saber para poder continuar tu trabajo ahi donde lo has dejado
// Como por ejemplo como se puede implementar una nueva funcionalidad en caso de querer hacerlo?
// Como se puede llevar un nuevo codigo a produccion?
// Como se realizan las pruebas?
// Quienes son los involucrados en el proyecto?

// Como documentar?

// Si es un colega de trabajo el lenguaje debera ser tecnico
// Si las personas que veran la documentacion no tienen un conocimiento de programacion  entonces entonces sera lenguaje sencillo
// No solo tiene que ser documentacion en texto, podemos agregar UMLs o diagramas de flujo

// Donde escribir esta documentacion?

// Purde estar dentro de tu propio codigo, o en un repositorio

// Cuando se tiene que documentar?

// La mejor practica es hacerlo a la par del codigo
// Cuando te costo resolver un problema complejo, imagina si no dejas esa informacion dentro de la documentacion

// A quien beneficia un codigo limpio?

// A ti.
// A tus conpaneros.
// A tus clientes.

// EJES QUE HACEN A LA CALIDAD DEL CODIGO

// Lejibilidad.
// Mantenibilidad.
// Testeabilidad.

// Temas a tomar en cuenta

// La forma en que escribes el codigo.
// Los nombres que utilizas.
// El diseno de tus clases.
// No solo se trata del codigo (documentacion).
//-------------------------------------------------------------------------------------------------------------------------------------
// EJEMPLO LIBRO DE VISITAS

// Dentro del folder principal GUESTBOOK se ecuentran las siguientes secciones:

// config
// public
// src
// tests
// vendor
// .gitignore
// .phpunit.result.cache
// comments.json
// composer.json
// composer.lock
// phpunit.xml
// README.md
// tests_comments.json


// La carpeta public contiene dos archivos que seran los que reciban las peticiones directas del usuario (SE CONOCEN COMO FRONT CONTROLLERS)
// La carpeta src tendra clases auxiliares que seran utilizadas 
// La carpeta test se encurntran los archivos que nos permiten hacer las pruebas automatizadas
// La carpeta vendor ahi de encuentran librerias de terceros 

// Nota que los nombres son muy descriptivos


?>