<?php
    require "./includes/fruit.php";

    // PHASE 2: generate instances ---------------------------------

    // initialize fruit instances
    $fruit1 = new Fruit(); // short: new Fruit;
    $fruit1->set_name('Banana');
    $fruit1->color = 'green';

    $fruit2 = new Fruit('Apple', 'orange-red');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Samples</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container" style="padding: 20px;">
        <h1>class Fruit</h1>
        <p><?php 
            // PHASE 3: display variables and call methods -----------------
            echo '$fruit1->get_name() = ' . $fruit1->get_name() . '<br/>' .
                 '$fruit1->color = ' . $fruit1->color;

            echo '<br/><br/>';

            echo '$fruit2->get_name() = ' . $fruit2->get_name() . '<br/>' .
                 '$fruit2->color = ' . $fruit2->color;
            
            echo '<br/><br/>';
            
            var_dump($fruit1);
            echo '<br/><br/>';
            print_r($fruit2);
           ?><p>
        
    </div>
</body>
</html>