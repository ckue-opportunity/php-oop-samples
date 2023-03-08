<?php
    require "./includes/fruit.php";

    $fruit1 = new Fruit(); // lazy: $fruit = new Fruit;
    $fruit1->set_name('Banana');

    $fruit2 = new Fruit('Apple', 'red-orange');
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
    <!-- Test Output -->
    <div class="container" style="padding: 20px;">
        <h1>class Fruit</h1>
        <p><?php echo '$fruit1->get_name() = ' . $fruit1->get_name(); ?><p>
        <p><?php echo '$fruit2->get_name() = ' . $fruit2->get_name() . '<br/>' . 
                      '$fruit2->color = ' . $fruit2->color; ?><p>
    </div>

</body>
</html>