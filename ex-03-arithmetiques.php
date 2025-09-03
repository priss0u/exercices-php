<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetiques</title>
</head>
<body>
    <h1>Exercice 1</h1>

    <?php
        $a = 20;
        $b = 15;
        echo "<p>Ma variable a = $a et ma variable b = $b</p>";

        $total = $a + $b;
        echo "<p>Ma variable a + ma variable b = $total</p>";
        
        $total = $a - $b;
        echo "<p>Ma variable a - ma variable b = $total</p>";

        $total = $a * $b;
        echo "<p>Ma variable a x ma variable b = $total</p>";

        $total = $a / $b;
        echo "<p>Ma variable a ÷ ma variable b = $total</p>";

        $total = $a % $b;
        echo "<p>Le modulo de ma variable a et ma variable b = $total</p>";
    ?>

    <h2>Exercice 2</h2>

    <?php
    $a = 20;
    $b = 15;    

    $a+= $b;
    echo "<p>Le total de ma variable c'est = $a</p>";

    $a -= $b;
    echo "<p>Le total de ma variable c'est = $a</p>";

    $a *= $b;
    echo "<p>Le total de ma variable c'est = $a</p>";

    $a /= $b;
    echo "<p>Le total de ma variable c'est = $a</p>";

    $a %= $b;
    echo "<p>Le total de ma variable c'est = $a</p>";




    ?>
</body>
</html>