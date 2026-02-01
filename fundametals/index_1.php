<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <h1>
        <?php
        // $greeting = "Hello";

        // // echo $greeting . " " . "World ";
        // echo "$greeting Everybody";

        ?>
    </h1>


    <?php
        $name = "Dark Matter";
        $read = true;

        if($read){
            $message = "You have read $name";
            }else {
                
                $message = "You have not read $name";
        }
    ?>

    <h1>
        <?php echo $message; ?>
        <?=  $message; ?>
    </h1>

    





</body>

</html>