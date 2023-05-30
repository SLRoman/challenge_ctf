<?php
if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
    header('WWW-Authenticate: Basic realm="Restricted Area"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Il faut entrer login et password';
    exit;
}

$username = $_SERVER['PHP_AUTH_USER'];
$password = $_SERVER['PHP_AUTH_PW'];

if ($username !== '5' || $password !== 'FLAG_5_fla9_For_you') {
    header('WWW-Authenticate: Basic realm="Restricted Area"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Login ou password n\'est pas correct';
    exit;
}
?>

<h1>Défis #5</h1>

<p>Récemment, nous avons demandé à un spécialiste de la sécurité de vérifier notre site web.</p>  

<p>Il a identifié une vulnérabilité, mais comme nous sommes très avares, nous avons refusé de le rémunérer.</p>  

<p>Il a donc refusé de nous informer du problème. Il nous a simplement donné un indice. </p> 

<p>Il a dit que notre programmeur avait laissé un FLAG lorsqu'il configurait l'accessibilité des pages de notre site pour les robot de recherche de Google :)</p> 

<p>Trouvez FLAG pour passer au Défis #6</p>

<h2>👉 <a href='/6.php'>Défis #6</a></h2>

<!--HELP SECTION -->
  <style>
    .hidden-text {
      display: none;
    }
  </style>
  
  <a href="#" onclick="showText()">help</a>
  
  <p id="hiddenText" class="hidden-text">http://46.36.221.15:7777/ctf.test/robots.txt</p>
  <script>
    function showText() {
      document.getElementById("hiddenText").style.display = "block";
    }
  </script>



