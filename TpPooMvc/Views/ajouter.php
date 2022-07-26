<?php ob_start();

?>

<form action="<?=URL?>livres/valider" method="post"  enctype="multipart/form-data">
<div class="form-group ms-3 me-3">
    <label class="col-form-label mt-4" for="inputDefault" >Titre</label>
    <input type="text" class="form-control" placeholder="entrez le titre du livre ..." id="inputDefault" name="title">
</div>

<div class="form-group ms-3 me-3">
    <label class="col-form-label mt-4" for="inputDefault">Nbr de pages</label>
    <input type="text" class="form-control" placeholder="entrez le nbr de pages ..." id="inputDefault" name="nbr-pages">
</div>

<div class="form-group ms-3 me-3">
    <label for="formFile" class="form-label mt-4">Image</label>
    <input class="form-control" type="file" id="formFile" name="img">
</div>

<button type="submit" class="btn btn-primary mt-5 ms-4 link-light text-decoration-none">valider</button>
</form>

<?php
$titre = "Ajout d'un livre";
$content = ob_get_clean();
require_once "template.php";
?>