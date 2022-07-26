<?php ob_start();
// require_once "LivreClass.php";
// require_once "livreManager.php";

// require_once "modelClass.php";
// $livre1 =new Livre(1,"9791028104603.jpg","titre1","120");
// $livre2 =new Livre(2,"9791028104603.jpg","titre2","430");
// $livre3 =new Livre(3,"9791028104603.jpg","titre3","340");
// $listBook = [$livre1,$livre2,$livre3];


// $catalogue1 = new LivreManager();
// $catalogue1->chargementLivres();

// foreach($catalogue1->getListLivre() as $value) {
//    $catalogue1->addLivre($value);
// }

?>
<table class="table text-center">
<tr class="table-dark">
<th>Image</th>
<th>Titre</th>
<th>Nombre de pages</th>
<th colspan="2">Actions</th>
</tr>

<!-- foreach(Livre::$tab as $value): -->
<?php foreach($TsLesLivres as $value): ?> 
<tr>
<td class="align-middle"><img src="public/image/<?=$value->getImage()?>" alt="" id="img"
width="60px;"></td>
<td class="align-middle"><a href="<?=URL?>livres/lire/<?=$value->getId()?>"><?=$value->getTitre()?></a></td>
<td class="align-middle"> <?=$value->getNbrPage()?></td>

<td class="align-middle"><a href="<?=URL?>livres/modifier/<?=$value->getId()?>" class="btn btn-warning">Modifier</a></td>

<form action="<?=URL?>livres/supprimer/<?=$value->getId()?>">
<td class="align-middle"><button  class="btn btn-danger">Supprimer</button></td>
</form>

</tr>
<?php endforeach;?>
</table>
<a href="<?=URL?>livres/ajouter" class="btn btn-success d-block">Ajouter</a>
<?php

$titre = "Livres";
$content = ob_get_clean();
require_once "template.php";

?>

