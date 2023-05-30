<?php
if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
    header('WWW-Authenticate: Basic realm="Restricted Area"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Il faut entrer login et password';
    exit;
}

$username = $_SERVER['PHP_AUTH_USER'];
$password = $_SERVER['PHP_AUTH_PW'];

if ($username !== '4' || $password !== 'FLAG_4_FL4G_FOr_yOu') {
    header('WWW-Authenticate: Basic realm="Restricted Area"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Login ou password n\'est pas correct';
    exit;
}
?>

<h1>Défis #4</h1>

<p>Tu es sûrement familier avec l'attaque XSS.</p> 

<p>Essaie de l'exécuter sur cette page. </p>
 
<p> Tu trouveras le FLAG seulement si tu peux plonger cette page dans l'obscurité 😈</p> 

<p>Trouvez FLAG pour passer au Défis #5</p>

<h2>👉 <a href='/5.php'>Défis #5</a></h2>

<p id="hint"></p>

<form method="post" action="">
    <label for="input">Text:</label>
    <input type="text" id="input" name="input">
    <button type="submit">Submit</button>
</form>

<p style="color:white;position: absolute;top:80%;left: 80%">FLAG_5_fla9_For_you</p>
<?php
if (isset($_POST['input'])) {
    $input = $_POST['input'];
    echo "<p>You enter: $input</p>";
}
?>

<!--HELP SECTION -->
  <style>
    .hidden-text {
      display: none;
    }
  </style>
  
  <a href="#" onclick="showText()">help</a>
  
  <p id="hiddenText" class="hidden-text">
  
  <script>
    document.getElementById('hiddenText').innerText=`<\script> document.getElementsByTagName('body')[0].style.background = 'black' <\/script>`
</script>
  
  </p>
  <script>
    function showText() {
      document.getElementById("hiddenText").style.display = "block";
    }
  </script>
