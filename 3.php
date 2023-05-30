<?php
if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
    header('WWW-Authenticate: Basic realm="Restricted Area"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Il faut entrer login et password';
    exit;
}

$username = $_SERVER['PHP_AUTH_USER'];
$password = $_SERVER['PHP_AUTH_PW'];

if ($username !== '3' || $password !== 'FLAG_3_f1@G_for_y0u') {
    header('WWW-Authenticate: Basic realm="Restricted Area"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Login ou password n\'est pas correct';
    exit;
}
?>


<h1>Défis #3</h1>

<p>Dans notre base de données, il y a des centaines d'utilisateurs. Tu peux essayer de les trouver en saisissant leurs noms dans le champ de saisie en bas de cette page.</p> 

<p>Essayez de saisir leurs noms: Jacob Dickerson, Reuben Johnson, Harper Watts</p> 

<p>Il y a un seul utilisateur dans la base de données. Au lieu de son email, tu trouveras le FLAG.</p>

<p>Trouvez FLAG pour passer au Défis #4</p>

<h2>👉 <a href='/4.php'>Défis #4</a></h2>




<form method="post" action="3.php">
    <label for="name">Nom d'utilisateur:</label>
    <input type="text" id="name" name="name">
    <button type="submit">FIND</button>
</form>



<?php
$conn = mysqli_connect('localhost', 'ctf_test', 'SD0ZIUQ9Kgput3eG', 'ctf_test');
$name = $_POST['name'];
if($name == "" or $name == " "){
    echo '<p>Nothing founded</p>';
    return;
}
$sql = "SELECT * FROM users WHERE name LIKE '$name'";
$result = mysqli_query($conn, $sql);
echo '<h3>Result:</h3>';
echo '<ul>';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<li>' . $row['name'] . ' - ' . $row['email'] . '</li>';
}
echo '</ul>';
mysqli_close($conn);
?>

<!--HELP SECTION -->
  <style>
    .hidden-text {
      display: none;
    }
  </style>
  
  <a href="#" onclick="showText()">help</a>
  
  <p id="hiddenText" class="hidden-text">' OR 1=1 #</p>
  <script>
    function showText() {
      document.getElementById("hiddenText").style.display = "block";
    }
  </script>