<?php ob_start();

?>
<form action="<?=URL?>livres/modifValider" method="post" enctype='multipart/form-data'>
<div class="form-group ms-3 me-3">
  <label class="col-form-label mt-4" for="inputDefault">Titre</label>
  <input type="text" class="form-control"  name="title" placeholder="<?=$recupLivre->getTitre()?>" id="inputDefault">
  
</div>

<div class="form-group ms-3 me-3">
  <label class="col-form-label mt-4" for="inputDefault">Nombres de pages</label>
  <input type="text" class="form-control"  name="Nbr-page" placeholder="<?=$recupLivre->getNbrPage()?>" id="inputDefault">
 
</div>

<h2 class="mt-4 ms-3">Image</h2>
<img src= "<?=URL."public/image/".$recupLivre->getImage()?>" alt="img" name="image" >
<input type="hidden" value="<?=$recupLivre->getId()?>" name="idActuel"  >

<p class="mt-4 ms-3"><a href="#">Changer l'image</a></p>

<div class="form-group ms-3 me-3">
      <label for="formFile" class="form-label mt-4"></label>
      <input class="form-control" type="file" id="formFile"  name="imageForm" placeholder="">
     
</div>

<button type="submit" class="btn btn-primary mt-5 ms-4">Modifier</button>
</form>
<?php
$titre = "Modifier un livre";
$content = ob_get_clean();
require_once "template.php";
