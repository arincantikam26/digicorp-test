<?php 

$arrToken = array();

function generateRandomString($length = 10) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}


function generate_token($user){
    global $arrToken;

    if (!isset($arrToken[$user])) {
        $arrToken[$user] = [];
    }

    $token = generateRandomString(10);

    if (count($arrToken[$user]) >= 10) {
        array_shift($arrToken[$user]);
    }

    $arrToken[$user][] = $token;

    return $token;
}

function verify_token($user, $token) {
    global $arrToken;

    if (!isset($arrToken[$user])) {
        
        return false; // User tidak ditemukan
    }

    $cekToken = array_search($token, $arrToken[$user]);

    if ($cekToken === false) {
        return false;
    }

    unset($arrToken[$user][$cekToken]);
    return true;

}

// Contoh penggunaan
$token1 = generate_token("budi");
$token2 = generate_token("budi");
$token3 = generate_token("budi");


var_dump($arrToken);
echo "<br>";

// verify token
$verif1 = verify_token('budi', "sdadsada");
$verif2 = verify_token('budi', $token2);

var_dump($verif1);
echo "<br>";

print($token2);
var_dump($verif2);



?>