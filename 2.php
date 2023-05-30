<?php
if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
    header('WWW-Authenticate: Basic realm="Restricted Area"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Il faut entrer login et password';
    exit;
}

$username = $_SERVER['PHP_AUTH_USER'];
$password = $_SERVER['PHP_AUTH_PW'];

if ($username !== '2' || $password !== 'FLAG_2_f1@G_for_y0u') {
    header('WWW-Authenticate: Basic realm="Restricted Area"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Login ou password n\'est pas correct';
    exit;
}
?>

<h1>Défis #2</h1>

<p>Sur le serveur, parmi les nombreux fichiers d'un dossier, tu trouveras le FLAG.</p> 

<p>Malheureusement, le programmeur n'a pas pris soin de la sécurité et tu peux accéder au dossier directement depuis le navigateur.</p> 

<p>Mais ce n'est pas tout. Le programmeur n'a pas du tout réfléchi en choisissant le nom du dossier dans lequel les fichiers seront placés :)</p>

<p>Trouvez FLAG pour passer au Défis #3</p>

<h2>👉 <a href='/3.php'>Défis #3</a></h2>

<!--HELP SECTION -->
  <style>
    .hidden-text {
      display: none;
    }
  </style>
  
  <a href="#" onclick="showText()">help</a>
  
  <p id="hiddenText" class="hidden-text">http://46.36.221.15:7777/ctf.test/files/</p>
  <script>
    function showText() {
      document.getElementById("hiddenText").style.display = "block";
    }
  </script>



