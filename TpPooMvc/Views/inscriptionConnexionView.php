<?php ob_start();

?>

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>inscript/connect</title>
</head>
<body>

<?php
require_once "Models/modelClass.php";
require_once "Models/UtilisateurManager.php";
?>

<div class="d-flex justify-content-around">
<section class="text-center" style="border: solid; margin:5rem 2rem 5rem 30rem; padding:3rem 2rem ">
 <h2>Inscription</h2>
<form action="<?=URL?>inscriptonValide" method="POST">
  <div class="mb-3">
    <label for="nameinscript" class="form-label">Pseudo</label>
    <input type="text" class="form-control" id="nameinscript" aria-describedby="nameinscript" name="nameinscript" style="width:200px; margin:auto ">
    <label for="mailinscript" class="form-label">Mail</label>
    <input type="text" class="form-control" id="mailinscript" aria-describedby="mailinscript" name="mailinscript" style="width:200px; margin:auto ">
   
  </div>
  <div class="mb-3">
    <label for="mdpinscript" class="form-label">Password</label>
    <input type="password" class="form-control" id="mdpinscript" name="mdpinscript" style="width:200px; margin:auto">
  </div>
  <div class="mb-3">
    <label for="mdpverif" class="form-label">Password again</label>
    <input type="password" class="form-control" id="mdpverif" name="mdpverif" style="width:200px; margin:auto">
  </div>
  
  <button type="submit" class="btn btn-primary" >Valider</button>
</form>
</section>



<section class="text-center align-self-center " style="border: solid ; margin:5rem 30rem 5rem 2rem ; padding:3rem 2rem" >
<h2>Connexion</h2>
<form action="<?=URL?>connexionValide" method="POST">
  <div class="mb-3">
    <label for="pseudoconnect" class="form-label">Pseudo</label>
    <input type="text" class="form-control" id="pseudoconnect" aria-describedby="pseudoconnect" name="pseudoconnect" style="width:200px; margin:auto">
    
   
  </div>
  <div class="mb-3 ">
    <label for="mdp" class="form-label">Password</label>
    <input type="password" class="form-control" id="mdp" name="mdpconnect" style="width:200px; margin:auto">
  </div>
 
  <button type="submit" class="btn btn-primary" name="btnconnect">Valider</button>
</form>
</section>
</div>
</body>
</html>


<?php



$titre = "Inscription/Connexion";
$content = ob_get_clean();
require_once "template.php";
?>