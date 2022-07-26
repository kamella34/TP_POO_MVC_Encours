<?php
require_once "UtilisateurClass.php";
require_once "modelClass.php";

class UtilisateurManager extends Model
{

   private $listUser;

   public function addUser($add)
   {
      $this->listUser[] = $add;
   }

   public function getListUser()
   {
      return $this->listUser;
   }


    public function  ajoutUser($pseudo, $mail, $mdp)
    {
       $db = $this->getBdd();
       $sql = 'INSERT INTO utilisateurs (pseudo_utilisateur,mail_utilisateur,mdp_utilisateur) VALUES (:pseudo,:mail,:mdp)';
       $req = $db->query($sql)
      //  $result = $req->execute
       ([
          ":pseudo" => $pseudo,
          ":mail" => $mail,
          ":mdp" => $mdp,
       ]);
    }


    function findUser($pseudo) {
      $db = $this->getBdd();
      $sql = "SELECT * FROM utilisateurs WHERE pseudo_utilisateur = :pseudo";
      $req = $db->prepare($sql);
      $req->execute([
          ":pseudo"=> $pseudo
      ]);
      $data = $req->fetch(PDO::FETCH_ASSOC);
      return $data;
   }
 
    function DeleteUtilisateur($id)
    {
       $db = $this->getBdd();
       $sql = "DELETE FROM utilisateurs WHERE id_utilisateur= :id";
       $req = $db->prepare($sql);
       $req->execute([
          ":id" => $id
       ]);
    }

    function modifierUtilisateur($pseudo, $mail, $mdp) {
       $db = $this->getBdd();
       $sql = "UPDATE utilisateurs SET  pseudo_utilisateur = :pseudo, mail_utilisateur = :mail, mdp_utilisateur = :mdp WHERE id_utilisateur = :id";
       $req = $db->prepare($sql);
       $result = $req->execute([
           ":pseudo" => $pseudo,
           ":mail" => $mail,
           ":mdp" => $mdp
       ]);
       return $result;
   }
 
   public function chargementUsers()
   {
      $db = $this->getBdd();
      $sql = 'SELECT * FROM utilisateurs';
      $req = $db->query($sql);
      // $result = $req->execute();
      $data = $req->fetchAll(PDO::FETCH_OBJ);
      

      foreach ($data as $value) {
         $newUser = new Utilisateur($value->id_utilisateur, $value->pseudo_utilisateur, $value->mail_utilisateur, $value->mdp_utilisateur);
         $this->addUser($newUser);
   }
 }
 
}


