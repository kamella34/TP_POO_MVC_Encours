<?php ob_start() ?>



<?php

$titre = "Accueil";

$content = ob_get_clean();

require_once "template.php";
