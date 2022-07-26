
<?php ob_start()?>


<img  class="position-absolute bottom-50 end-50"  class="position-absolute top-50 start-50" src="<?=URL?>public/image/<?=$unLivre->getImage()?>" alt="couverture du livre">
<p class="position-absolute top-50 start-50"><?=$unLivre->getNbrPage()?>"pages"</p> 




<?php
 
$titre = $unLivre->getTitre();
$content = ob_get_clean();
require_once "template.php";
?>

