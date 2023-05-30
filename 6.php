<?php
if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
    header('WWW-Authenticate: Basic realm="Restricted Area"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Il faut entrer login et password';
    exit;
}

$username = $_SERVER['PHP_AUTH_USER'];
$password = $_SERVER['PHP_AUTH_PW'];

if ($username !== '6' || $password !== 'FLAG_6_fds9_For_you') {
    header('WWW-Authenticate: Basic realm="Restricted Area"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Login ou password n\'est pas correct';
    exit;
}
?>

<h1>Défis #6</h1>

<p>J'ai deux bonnes nouvelles et une mauvaise pour toi.</p>

<p>BONNES NOUVELLES : C'est le dernier défi et nous avons trouvé le FLAG nous-mêmes.</p>

<p>MAUVAISE NOUVELLE : Le FLAG que nous avons trouvé ne marche pas :(</p>  

<p>FLAG: <strong>IODJ_9_igv_Iru_brx</strong></p> 

<p>Comme l'a dit un grand empereur : "Veni, vidi, vici!"</p>  

<p>Et ce n'est pas exact, mais il y a une opinion selon laquelle le numéro préféré de l'empereur est exactement 
le même que le dernier numéro du numéro de ta groupe au Cegep 😊</p> 

<p>Trouvez FLAG pour passer au EXIT</p>

<h2>👉 <a href='/7.php'>EXIT</a></h2>


<!--HELP SECTION -->
  <style>
    .hidden-text {
      display: none;
    }
  </style>
  
  <a href="#" onclick="showText()">help</a>
  
  <p id="hiddenText" class="hidden-text">Utilise le chiffre de César pour décrypter<br><br>FLAG_6_fds_For_you</p>
  <script>
    function showText() {
      document.getElementById("hiddenText").style.display = "block";
    }
  </script>


