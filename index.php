<?php

echo "
<h1>Bonjour</h1>
<p>Vous êtes invité à relever <strong>7 défis</strong>. Dans chacun d'eux, vous devez trouver un FLAG. Le FLAG est au format FLAG_*.</p>
<p>Si vous trouvez le FLAG, vous pouvez passer au défi suivant.</p>
<p>Pour accéder au défi suivant, utilisez le nom d'utilisateur et le mot de passe. </p>
<p><strong>Nom d'utilisateur = numéro du défi suivant.</strong></p> 
<p><strong>Mot de passe = FLAG que vous avez trouvé.</strong></p>
<h2>Bonne chance! 😈 </h2>
";

echo "<h2>👉👉👉 <a href='https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]/0.php'>Défis #0</h2>"

/*
echo "<br><a href='https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]/0.php'>Челледж 0</a>";
echo "<br><a href='https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]/1.php'>Челледж 1</a>";
echo "<br><a href='https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]/2.php'>Челледж 2</a>";
echo "<br><a href='https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]/3.php'>Челледж 3</a>";
echo "<br><a href='https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]/4.php'>Челледж 4</a>";
echo "<br><a href='https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]/5.php'>Челледж 5</a>";
*/
?>
