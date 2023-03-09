<?php
    require "./includes/animals.php";

    // PHASE 2: generate instances ---------------------------------

    // initialize animals
    $animals = array();

    array_push(
        $animals, 
        new Dog('Fido', 'blau', 4), 
        new Cat('Felix', 'grün', 1),
        new Whale('Walley', 'rot', 85)
    );
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
        <h1>Animal Classes</h1>

        <ul>
            <?php
                foreach ($animals as $animal) {
                    echo "<li>";
                        echo "<h4>Name: " . $animal->getName() . " (" .
                            $animal->getAge() . ", " . 
                            $animal->getColor() . ")</h4>";

                        echo "<p>". $animal->greet() . "<br/>". $animal->eat() . "</p>";
                    echo "</li>";
                }

            ?>
        </ul>
        
    </div>
</body>
</html>