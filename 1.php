<?php
if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
header('WWW-Authenticate: Basic realm="Restricted Area"');
header('HTTP/1.0 401 Unauthorized');
echo 'Il faut entrer login et password';
exit;
}

$username = $_SERVER['PHP_AUTH_USER'];
$password = $_SERVER['PHP_AUTH_PW'];

if ($username !== '1' || $password !== 'FLAG_1_f1A6_f0r_YoU') {
header('WWW-Authenticate: Basic realm="Restricted Area"');
header('HTTP/1.0 401 Unauthorized');
echo 'Login ou password n\'est pas correct';
exit;
}
?>

<h1>Défis #1</h1>

<p>Il y a un fichier caché sur le serveur.</p>

<p>Le fichier caché s'appelle "env".</p>

<p>Trouvez-le pour passer au Défis #2</p>

<h2>👉 <a href='/2.php'>Défis #2</a></h2>

  <!--HELP SECTION -->
  <style>
    .hidden-text {
      display: none;
    }
  </style>
  
  <a href="#" onclick="showText()">help</a>
  
  <p id="hiddenText" class="hidden-text">http://46.36.221.15:7777/ctf.test/.env</p>
  <script>
    function showText() {
      document.getElementById("hiddenText").style.display = "block";
    }
  </script>
