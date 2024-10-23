<?php
$json = '[
    {"username": "johndoe", "password": "p@ssw0rd"},
    {"username": "janedoe", "password": "d0e123"},
    {"username": "alice_smith", "password": "sM1th@lice"},
    {"username": "bob_jones", "password": "j0n3sb0b"},
    {"username": "emily_brown", "password": "br0wn3mily"},
    {"username": "michael_clark", "password": "clarky007"},
    {"username": "sophia_wilson", "password": "w1ls0n$0phia"},
    {"username": "david_miller", "password": "m1ll3r.d@v1d"},
    {"username": "olivia_taylor", "password": "t@ylor.ol1v1a"},
    {"username": "william_thomas", "password": "th0masw1ll1@m"}
]';

$array = json_decode($json, true); // Decodificar como array asociativo

$User = $_POST["usuario"];
$contra = $_POST["contraseña"];

$fin = count($array);
$i = 0; // Inicializar $i

while ($i < $fin) {
    $recorr = $array[$i];

    if ($User == $recorr["username"] && $contra == $recorr["password"]) {
        echo "Sus credenciales son correctas";
        break;
    }
    $i++;
}   

// Si el bucle termina sin encontrar una coincidencia, se ejecuta el siguiente mensaje
if ($i == $fin) {
    echo "Sus credenciales son incorrectas";
}
?>
