<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>

<body>
    <h1>Recommended Books</h1>

    <?php
        $books = [

            [
                'name' => "Do Androids Dream of Electric Sheep",
                'author' => 'Philip K. Dick',
                'releaseYear' => 1968,
                'purchaseUrl' => 'http://example.com'
            ],

            [
                'name' => 'Project Hail Mary',
                'author' => 'Andy Weir',
                'releaseYear' => 2021,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'The Marthian',
                'author' => 'Andy Weir',
                'releaseYear' => 2011,
                'purchaseUrl' => 'http://example.com'
            ],

        ];

        /********************
         * Función con nombre
         */
        // function filter($items, $key, $value)
        // {

        //     $fiteredItems = [];

        //     foreach ($items as $item) {
        //         if ($item[$key] ===  $value) {
        //             $fiteredItems[] = $item;
        //         }
        //     }

        //     return $fiteredItems;
        // }

        // $filteredBooks = filter($books, 'author', 'Philip K. Dick');


        /********************
         * Función anonima o funcion Lambda
         */
    
    //    $filter = function ($items, $fn)
    //     {

    //         $filteredItems = [];

    //         foreach ($items as $item) {
    //             if ($fn($item)) {
    //                 $filteredItems[] = $item;
    //             }
    //         }

    //         return $filteredItems;
    //     };


    //     $filteredBooks = $filter($books, function($book){
    //         return $book['releaseYear'] === 1968;
    //     });




        $filteredBooks = array_filter($books, function($book){
            return $book['author'] === 'Andy Weir';
        });

    ?>


    <ul>
        <?php foreach ($filteredBooks as $book) : ?>

            <li>
                <a href="<?= $book['purchaseUrl'] = 'Andy Weir' ?>">

                    <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>

                </a>

            </li>
        <?php endforeach; ?>

    </ul>


</body>

</html>