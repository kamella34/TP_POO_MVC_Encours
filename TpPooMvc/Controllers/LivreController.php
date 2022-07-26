<?php
require_once "GlobalController.php";
require_once "Models/UtilisateurManager.php";

class LivreController
{
  private $livreManager;

  public function __construct()
  {

    $this->livreManager = new LivreManager();
    $this->livreManager->chargementLivres();
  }
  public function afficherLivres()
  {
    $TsLesLivres = $this->livreManager->getListLivre();
    require 'Views/livresView.php';
  }
  public function afficherUnLivre($idLivre)
  {
    $unLivre = $this->livreManager->getLivreById($idLivre);
    require './Views/lire.php';
  }
  public function ajoutLivre()
  {
    require 'Views/ajouter.php';
  }
  public function ajoutLivreValidation()
  {
    $files = $_FILES["img"];
    $linkImg = "public/image/";
    $ajouterUneImg = GlobalController::ajoutImage($_POST["title"], $files, $linkImg);
    $this->livreManager->ajoutLivreBd($_POST["title"], $_POST["nbr-pages"], $ajouterUneImg);
    header("location:" . URL . "livres");
  }
  function supprimerLivre($idLivre)
  {
    $recupImg = $this->livreManager->getLivreById($idLivre);
    $supprLivre = $recupImg->getImage();
    unlink("public/image/" . $supprLivre);
    $this->livreManager->DeleteLivre($idLivre);
    header("location:" . URL . "livres");
  }

  function modifierLivre($idLivre)
  {
    $recupLivre = $this->livreManager->getLivreById($idLivre);
    require 'Views/modifier.php';
  
  }


  function modifValider()
  {
    $titre = $_POST["title"];
    $recupImageActuelle = $_FILES["image"];
    
   
    // HEADER TOUS LES LIVRES
  }
}


// recuperer le nom de l'image
//CRRER UN INPUT CAChé pour recup l'id


