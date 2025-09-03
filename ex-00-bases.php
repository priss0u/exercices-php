1.
<?php
echo '<p> Hello World, Bienvenue sur mon premier script PHP</p>';
?>

2.
<?php
echo '<p> Bonjour tout le monde !</p> <br>';
print '<p>  Aujourd\'hui nous sommes le 01/09/2025 </p> <br>';
?>

3.
<p> Bonjour j'aime vraiment beaucoup les licornes </p>

<?php
echo '<p> Ce texte est affiché depuis PHP </p>';
?>

4.

<?php
// Noter les 2 instructuions qui permettent d'afficher du texte en PHP; 
?>
<?php
/*cet exercice utilise echo pour afficher un texte et print pour en afficher un autre

/** La différence entre echo et print est minime,
 * 
 * echo accepte plusieurs arguments séparés par des virgules (exemple : echo "Coucou je m'appelle antoine","J'aimerais dire
 * quelques mots" et ne retourne rien)
 * 
 * print n'accepte qu'un argument (une erreur apparaitra si vous tentez de mettre une virgule après) et retourne toujours
 * true (ce qui fait qu'on peut l'utiliser en valeur de variable par exemple : $vraioufaux = print "ceci est un test", la
 * valeur de vraioufaux sera true (1));*/
?>

5.

<?php
$personnes = array(
    "nom" => "Ilyes",
    "age" => "36",
);
?>

<?php
print_r($personnes);
?>

6.

<?php
    $nombre = 600;
    var_dump($nombre);
?>
<?php
    $str = '15,5';
    var_dump($str);
?>

7.

<?php
echo '<p>(Ceci est mon paragraphe <b>gras</b> en <i>italique</i> et <u>souligné</u>)';
?>

    <h2>Exercice 8</h2>
    
    <?php
        echo "<div>
            <h1>Exposé</h1> 
            <p>10 Octobre pour moi </p>
        </div>"; 
        // j'ai ecris du code dans PHP
    ?>


    <h2>Exercice 9</h2>

    <?php
        $date = date('d/m/Y');
    ?>

    <h2>Ceci est un H2</h2>
    <h3>Ceci est un H3</h3>
    <p>Ceci est un paragraphe <?php echo $date ?></p>

    <h2>Exercice 10</h2>

    <?php
        $message = 'Lorem ipsum alohomora de avadakedavra um wingardium et leviosa';
        echo '<h1>'. $message . '</h1>';
    ?>



