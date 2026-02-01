# Project

## Run Server

```sh

php -S localhost:8888




```

## Imprimir una variable de dos maneras:

    <h1>
        <?php echo $message; ?> --> con php y echo
        <?=  $message; ?> --> sin php ni echo
    </h1>

# Array

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