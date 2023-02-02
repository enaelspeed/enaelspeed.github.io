<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../../menu/css/style.css">
</head>
<?php
include('../../../header.php');
?>
<html>
<body>
    <div class="banniere">
        <div class="imgban">
            <img class="imgban0" src="../../../menu/img/photo/mer.jpg">
            <p class="text">
                Bienvenue sur mon site Enaelspeed.</br>
                j'apprend à développer l'Html le CSS,</br>
                JavaScript le PHP et MYSQL.
            </p>
        </div>
        <div class="ldirect">
            <div>
                <a class="banbout">Photo</a>
                <a class="banbout">A propos</a>
        </div>
        <div class="box2">
            <a class="banbout" href="../upload/index.html" target="_blank">Upload</a>
            </div>
        </div>
    </div>
  <div>
  <?php
  include ('../include/lpo.php');

  ?>
</div>
<div class="ressource" style="margin:15px;">
    <div>
        <h3 class="text">Teste php recette:</h3>
        <p style="font: 13px Verdana black;
        border-radius:15px;
        background-color:burlywood;
        box-shadow: 6px 6px 25px rgba(247, 245, 245, 0.5);
        padding: 50px;
 ">
        Quand on écrit $recipes[$lines], la variable $lines est d'abord remplacée par sa valeur.<br>

Exemple :<br>

Si $lines vaut 1, cela signifie qu'on cherche ce que contient $recipes[1][0] , c'est-à-dire : Couscous.<br>
<br>
Bravo, vous avez compris !<br>
<br>
Avec la boucle foreach<br>
La boucle for  a beau fonctionner, on peut utiliser un autre type de boucle – plus adapté aux tableaux – qu'on n'a pas encore vu jusqu'ici :  ['foreach']  .<br>
<br>
foreach passe en revue chaque ligne du tableau. Lors de chaque passage, elle met la valeur de cette ligne dans une variable temporaire (par exemple $element  ).<br>
<br>
Je parle chinois ? Regardez plutôt :<br>
</p>
</div>
<div>
    <div>
<pre style="
font-size:16px;
color:white;
background-color: black;
border-radius:25px;
padding:25px;
margin-top: 55px;

">
/**
 * Déclaration du tableau des recettes
 * Chaque élément du tableau est un tableau numéroté (une recette)
 */

// Déclaration du tableau des recettes
$recipes = [
    ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
    ['Couscous','[...]','mickael.andrieu@exemple.com',false,],
];

foreach ($recipes as $recipe) {
    echo $recipe[0]; // Affichera Cassoulet, puis Couscous
}
?>
</pre>
<h4> Résultat du ['foreach'] :</h4>
<p style="font: 16px Comic sans ms black;">
<?php
$recipes = [
    [' Cassoulet ','[...]','mickael.andrieu@exemple.com',true,],
    [' Couscous ','[...]','mickael.andrieu@exemple.com',false,],
];

foreach ($recipes as $recipe) {
    echo $recipe[0]; // Affichera Cassoulet, puis Couscous
}

$soupe = [
    [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
    ],
    [
        'title' => 'Couscous',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
];
foreach ( $soupe as $soupe) {
    echo $soupe['title'] . ' contribué(e) par : ' . $soupe['author'] . PHP_EOL; 
}
?>
</p>
</div>
<div>
<p style="font: 13px Verdana black;
padding: 15px;">
C'est le même code que tout à l'heure, mais cette fois basé sur une boucle  foreach  .<br>
<br>
À chaque tour de boucle, la valeur de l'élément suivant est mise dans la variable  $recipe  .<br>
<br>
On peut donc utiliser $recipe uniquement à l'intérieur de la boucle, pour afficher l'élément en cours.<br>
</p>
        <?php

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => ' les patate sont cuites.',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => '[...]',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => '[...]',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Salade Romaine',
        'recipe' => '[...]',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Euh je ne sais pas',
        'recipe' => '[...]',
        'author' => 'enaelspeed.castor@exemple.com',
        'is_enabled' => false,
    ],
];
foreach ($recipes as $liste ) {
    echo '<p style="font: 16px Comic sans ms black;">';
  echo $liste['title'] . ' contribué par ' . $liste['author'] . $liste['recipe'] . '</br>' . PHP_EOL;
  echo '</p>';
}
?>
</div>

</div>
</body>
</html>