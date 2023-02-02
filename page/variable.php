<?php

$users = [
    [
        'full_name' => 'Enaël Caron',
        'email' => 'email@gmail.com',
        'age' => 15,
        'password' => 'rrr56',  
    ],
    [
        'full_name' => 'Mickaël Andrieu',
        'email' => 'mickael.andrieu@exemple.com',
        'age' => 34,
        'password' => 'S3cr3t',
    ],
    [
        'full_name' => 'Mathieu Nebra',
        'email' => 'mathieu.nebra@exemple.com',
        'age' => 34,
        'password' => 'MiamMiam',
    ],
    [
        'full_name' => 'Laurène Castor',
        'email' => 'laurene.castor@exemple.com',
        'age' => 28,
        'password' => 'laCasto28',
    ],
];

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => '<a href="">Escalope milanaise</a>',
        'recipe' => '',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Salade Romaine',
        'recipe' => '',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Dalh is lens',
        'recipe' => 'Plat Indien avec des lentilles. </br>
        Les Epices sont [....]',
        'author' => 'email@gmail.com',
        'is_enabled' => true,
    ]
];

function display_recipes(array $recipes) : string
{
$recipe_content = '';

if ($recipe['is_enabled']) {
    $recipe_content = '<article>';
    $recipe_content .= '<h3>' . $recipe['title'] . '</h3>';
    $recipe_content .= '<div>' . $recipe['recipe'] . '</div>';
    $recipe_content .= '<i>' . $recipe['author'] . '</i>';
    $recipe_content .= '</article>';
}

return $recipe;
}

function display_author(string $authorEmail, array $users) : string
{
for ($i = 0; $i < count($users); $i++) {
    $author = $users[$i];
    if ($authorEmail === $author['email']) {
        return $author['full_name'] . '(' . $author['age'] . ' ans)';
    }
}
}

function get_recipes(array $recipes) : array
{
$valid_recipes = [];

foreach($recipes as $recipe) {
    if ($recipe['is_enabled']) {
        $valid_recipes[] = $recipe;
    }
}

return $valid_recipes;
}