<?php
if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
    header('WWW-Authenticate: Basic realm="Restricted Area"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Il faut entrer login et password';
    exit;
}

$username = $_SERVER['PHP_AUTH_USER'];
$password = $_SERVER['PHP_AUTH_PW'];

if ($username !== '7' || $password !== 'FLAG_6_fds_For_you') {
    header('WWW-Authenticate: Basic realm="Restricted Area"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Login ou password n\'est pas correct';
    exit;
}
?>
<h1>Félicitations !</h1>

<p>Tu as réussi tous les défis !</p>

<h2>Tu peux certainement trouver un bon emploi !</h2>

<h2>Bye! Bye!</h2>

<h2>:)</h2>


