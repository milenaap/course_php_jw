# Project

## Run Server

```sh

php -S localhost:8888
php -S localhost:8888 -t public




```

## Imprimir una variable de dos maneras:

    <h1>
        <?php echo $message; ?> --> con php y echo
        <?=  $message; ?> --> sin php ni echo
    </h1>

# Recorrer un Array

```sh

 <?php
    // foreach ($books as $book) {
    //     echo "<li>$book</li>";
    // }

?>



<?php foreach ($books as $book) : ?>
    <li><?= $book ?></li>
<?php endforeach;?>

```

# Solamente se renderiza el html y se coloca el end (los : y el end sustituyen los parentesis)

```sh
<?php foreach ($books as $book) : ?>
    <li><?= $book ?></li>
<?php endforeach;?>
```

# Herramienta de debug

```sh

# funcion
function dd($value){

    echo "<pre>";

    var_dump($value);

    echo "</pre>";

    die();

}
# Llamada
dd($_SERVER);

```

# Ejemplo de clases

```sh

class Person {
    public $name;
    public $age;

    public function breathe(){

        echo $this->name . ' is breathing!';
    }
}


$person = new Person();
$person->name = 'John Doe';
$person->age = 40;


dd($person->breathe());

```

# Array

```sh

1- Ejemplo de un array de una dimensión
$arrayCountries = [
    0 => 'España',
    1 => 'Holanda'
];

echo $arrayCountries[0]; // Acceder al primer elemento anterior


2- Ejemplo de array key => value
$arrayKeyValue = [
    'key1' => 'value1',
    'key2' => 'value2'
];

echo $arrayKeyValue['key1'];


3- Ejemplo de array dentro de otro array
$array = [
    'key1' => [
        'keyInterno1' => 'valueInterno1',
        'keyInterno2' => 'valueInterno2',
    ],
];

echo $array['key1']['keyInterno1'];


4- Array Multiple
$arrayMulti2 = [
    'key1' => [
        'keyInterno1' => 'valueInterno1',
        'keyInterno2' => 'valueInterno2',
    ],
    'key2' => [
        0 => 'España',
        1 => 'Holanda'
    ];
];

echo $arrayMulti2['key2'][1];


```

# Objeto

```sh

$objeto = new stdClass();
$objeto->key1 = 'value1';

$objeto->lista = [
    'key1'=>'value1',
    'key2'=>'value2',
];

echo $objeto->key1;
echo $objeto->lista['key1'];

```

# API

```sh

1. Metodo index (List)
response.json($notes); // Ej: En el metodo list para respuesta API (algo parecido)


2. Metodo STORE
response.json($data); // Ej: En el metodo store para respuesta API (algo parecido)

```