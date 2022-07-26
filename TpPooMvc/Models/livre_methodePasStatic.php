

<?php ob_start() ;
require_once "LivreClass.php";
$livre1 = new Livre(1,"9791028104603.jpg","titre1","120");
$livre2 =new Livre(2,"9791028104603.jpg","titre2","430");
$livre3 =new Livre(3,"9791028104603.jpg","titre3","340");

$listBook = [$livre1,$livre2,$livre3];

?>
<table class="table text-center">
<tr class="table-dark">
<th>Image</th>
<th>Titre</th>
<th>Nombre de pages</th>
<th colspan="2">Actions</th>
</tr>

<?php foreach($listBook as $value): ?> 
<tr>
<td class="align-middle"><img src="public/image/<?=$value->getImage()?>" alt=""
width="60px;"></td>
<td class="align-middle"><?=$value->getTitre()?></td>
<td class="align-middle"><?=$value->getNbrPage()?></td>
<td class="align-middle"><a href="" class="btn btn-warning">Modifier</a></td>
<td class="align-middle"><a href="" class="btn btn-danger">Supprimer</a></td>
</tr>
<?php endforeach; ?>
</table>
<a href="" class="btn btn-success d-block">Ajouter</a>
<?php

$titre = "Acceuil";
$content = ob_get_clean();
require_once "template.php";

?>