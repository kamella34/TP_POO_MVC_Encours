<?php
require_once "GlobalController.php";
require_once "Models/UtilisateurManager.php";


class UtilisateurController{
    
    private $userManager;

    public function __construct()
    {
      $this->userManager = new UtilisateurManager();
    }

    public function ajoutUtilisateur()
    {
      require 'Views/inscriptionConnexionView.php';
    }

    public function verifUserExist()
    {
      // $recupPseudoForm = $_POST["pseudoconnect"];
      // $recupMdpForm = $_POST["mdpconnect"];
      // $recupMdpBdd = $this->utilisateurManager->getMdp();
      // $recupPseudoBdd = $this->utilisateurManager->getPseudo();

      if (isset($_POST['btnconnect'])){
          $verifnameExist = findUser($_POST['pseudoconnect']);
     
          if (!$verifnameExist){
              alert("inexistant");
      
          }else if (password_verify($_POST['mdpconnect'], $verifnameExist[$this->utilisateurManager->getMdp()])){
      
              //$_SESSION['utilisateur'] = $_POST['pseudoconnect'];
              //$_SESSION['id_user'] = $verifnameexist['id_utilisateur'];
              //$_SESSION['status'] = $verifnameexist['status_utilisateur'];
          }
      }
    }


    public function inscriptionUser(){

      if(!empty($_POST['pseudoconnect']) && !empty($_POST['mdpconnect']) && !empty($_POST['mdpconnect'])){
            
        if($_POST['mdpconnect'] === $_POST['mdpverif']){
            $passhash = password_hash($_POST['mdpverif'],PASSWORD_DEFAULT);
            ajoutUser(2 ,$_POST['nameconnect'],$passhash);

          }else {
            alert("erreur");
          }
      }
    } 

        
      
 
      