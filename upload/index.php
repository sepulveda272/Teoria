<?php
//aca va todo el contenido php
 echo '<h1>hola mundo cruel</h1>';

/* echo(): Esta es la función más común para imprimir en PHP.Se utiliza para mostrar una o varias cadenas de texto en la salida del servidor web. La sintaxis básica es la siguiente: */
 echo "texto a imprimir";
 echo "<br>";

 /* print(): Esta función es similar a echo(), pero solo puede  imprimir una cadena de texto a la vez.
 La sintaxis básica es la siguiente */
 $texto = "Mundo";
 printf("hola %s", $texto);

 echo "<br>";

 /* sprintf(): Esta función es similar a printf(), pero en lugar de imprimir la cadena formateada en
 la salida estándar, devuelve la cadena formateada como resultado. La sintaxis básica es la
 siguiente: */
$mensaje = sprintf("hola %s", $texto);
echo $mensaje;
echo "<br>";

?>
<!-- ----------------------------------------------------------- -->
<?php
//declarar una variable numerica
$edad= 18;

//declarar una variable de texto
$nombre = "juan David";

//declar una variable booleana
$es_valido = true;
echo var_dump($nombre);


//declara una constante numerica
define ("PI", 3.1416);

//declarar una constante de texto
define ("SALUDO", "hola mundo!");

//declarar una constante booleana
define("ES_VALIDO", true);

?>
<!-- ------------------------------------------------------ -->
<?php
echo "<br>";

//Boolean
$logueado =  true;
var_dump($logueado);

echo "<br>";

//enteros
$numero = 200;
var_dump($numero);

echo "<br>";

//floats
$float = 200.5;
var_dump($float);

echo "<br>";

//string
$nombres = "Juan";
var_dump($nombres);

echo "<br>";

$array = [];
var_dump($array);

echo "<br>";

?>
<!-- --------------------------------------------------------- -->
<?php

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";

var_dump($numero1 > $numero2);
echo "<br>";

var_dump($numero1 < $numero2);
echo "<br>";

var_dump($numero1 >= $numero2);
echo "<br>";

var_dump($numero1 <= $numero2);
echo "<br>";

var_dump($numero2 == $numero3);
echo "<br>";

var_dump($numero2 == $numero4);
echo "<br>";

var_dump($numero2 === $numero4);
echo "<br>";

//-1 si izquierda es menor,
//0 si es igual,
//1 si izquierda es mayor

var_dump($numero1 <=> $numero2);
echo "<br>";

var_dump($numero2 <=> $numero3);
echo "<br>";

var_dump($numero2 <=> $numero1);
echo "<br>";
 
?>
<!-- ------------------------------------------------- -->

<?php include

$nombreCliente = "Campers Campuslands";

//conocer extecion de un string
echo strlen($nombreCliente);
echo "<br>";
var_dump($nombreCliente);

//eliminar espacios en blanco
$textos = trim($nombreCliente);
echo "<br>";
echo strlen($text);
echo "<br>";

//comvertirlo a mayusculas
echo strtoupper($nombreCliente);
echo "<br>";

//convertir en minusculas
echo strtolower($nombreCliente);
echo "<br>";

$email1= "correo@correo.com";
$email2= "Correo@correo.com";

var_dump(strtolower($email1) === strtolower($email2));
echo "<br>";
echo str_replace('Juan','J', $nombreCliente);
echo "<br>";

//revisa si un string existe o no
echo strpos($nombreCliente, 'Pedro');

$tipoCliente = "Premiun - Empresarial";
echo "<br>";

echo "El cliente " . $nombreCliente . " es " . $tipoCliente;
echo "<br>";

echo "El cliente {$nombreCliente} es {$tipoCliente}";

/* ARREGLOS */
$carrito = ['Tablet', 'Television', 'Computadora'];

//Util para ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

//acceder a un elemento del array
echo $carrito[1];

//añade un elemento en el indice 3 del arreglo
$carrito[3]= 'celular';

//añadir  un elemento nuevo al final..
array_push($carrito,'Audifonos');

//anade al inicio 
array_unshift($carrito, 'smartwatch');

//util para ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

$clientes = array('Cliente 1', 'Cliente 2', 'Cliente 3');
echo "<pre>";
var_dump($clientes);
echo "</pre>";

echo $clientes[1];
echo "<br>";

?>
<!-- --------------------------------------------------------- -->
<?php
$miArrayAsociativo = array(
    "clave1" => "valor1",
    "clave2" => "valor2",
    "clave3" => "valor3"
);

echo $miArrayAsociativo["clave1"]; // imprime "valor1"
echo "<br>";
echo $miArrayAsociativo["clave2"]; // imprime "valor2"
echo "<br>";
echo $miArrayAsociativo["clave3"]; // imprime "valor3"
echo "<br>";

foreach ($miArrayAsociativo as $clave => $valor){
    echo "clave " . $clave . " valor " . $valor . "<br>";
}

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'informacion' =>[
        'tipo' => 'premium',
        'disponible' => 100
    ]
];

echo "<pre>";
var_dump($cliente['informacion']);
echo "</pre>";

//echo $cliente['nombre'];
//echo $cliente['informacion']['disponible];

$cliente['codigo'] = 1209192012;

echo "<pre>";
var_dump($cliente);
echo "</pre>";