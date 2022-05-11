<?php

//www.monsite.fr/formations
//www.monsite.fr/formations/:categorie (PHP JS...)
//www.monsite.fr/formation/:id (6,7)

$url = '';

if (isset($_GET['url'])) {
    $url = explode('/', $_GET['url']);
}


if ($url == '' || $url[0] = 'formations') {
    getFormation();
} elseif ($url[0] == 'formation') {
    getFormationBycategorie();
} elseif ($url[0] == 'formations' && !empty($url[1])) {
    getFormationById();
}
