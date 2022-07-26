<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://bootswatch.com/5/sketchy/bootstrap.min.css"> lien en ligne-->
    <link rel="stylesheet" href="<?= URL ?>public/bootstrap.min.css">

    <script src="<?= URL ?>https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Tp Poo Mvc Acceuil</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= URL ?>accueil">Accueil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= URL ?>livres">Livres</a>
                    </li>
                </ul>
            </div>
            <div>
                <button type="button" class="btn btn-outline-success">Connexion</button>
                <button type="button" class="btn btn-outline-warning">Deconnexion</button>
            </div>
        </div>
    </nav>
    <h1 class="rounded border border-dark m-2 p-2 text-center text-white bg-info"><?php echo $titre ?></h1>

    <section>
        <?= $content ?>
    </section>


</body>

</html>