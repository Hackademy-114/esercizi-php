<?php
$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],
    ['name' => 'Maria', 'surname' => 'Rossi', 'gender' => 'F'],
    ['name' => 'Luca', 'surname' => 'Bianchi', 'gender' => 'M'],
];

foreach ($users as $user) {
    $saluto = '';
}

    switch ($user['gender']) {
        case 'M':
            $saluto = "Buongiorno Sig. ";
            break;
        case 'F':
            $saluto = "Buongiorno Sig.ra ";
        }
?>