<?php
require_once "LivreClass.php";
require_once "modelClass.php";

class LivreManager extends Model
{

   private $listLivre;
   public function addLivre($add)
   {
      $this->listLivre[] = $add;
   }

   public function getListLivre()
   {

      return $this->listLivre;
   }

   public function chargementLivres()
   {
      $db = $this->getBdd();
      $sql = 'SELECT * FROM livres';
      $req = $db->prepare($sql);
      $result = $req->execute();
      $data = $req->fetchAll(PDO::FETCH_OBJ);
      // var_dump($data); 

      foreach ($data as $value) {
         $newLivre = new Livre($value->id_livre, $value->img_livre, $value->titre_livre, $value->nbrPage_livre);
         $this->addLivre($newLivre);
      }
   }


   //------------------mvc-4
   public function getLivreById($idLivre)
   {
      foreach ($this->listLivre as $value)
         if ($value->getId() == $idLivre) {
            return $value;
         }
      throw new Exception("Livre introuvable");
   }

   public function ajoutLivreBd($titre, $nbrPages, $image)
   {
      $db = $this->getBdd();
      $sql = 'INSERT INTO livres (img_livre,titre_livre,nbrPage_livre) VALUES (:img,:titre,:nbrPage)';
      $req = $db->prepare($sql);
      $result = $req->execute([
         ":titre" => $titre,
         ":nbrPage" => $nbrPages,
         ":img" => $image
      ]);
      return $result;
   }

   function DeleteLivre($id)
   {
      $db = $this->getBdd();
      $sql = "DELETE FROM livres WHERE id_livre= :id";
      $req = $db->prepare($sql);
      $req->execute([
         ":id" => $id
      ]);
      
  
   }
   function modifierLivre($titre, $nbrPage, $img) {
      $db = $this->getBdd();
      $sql = "UPDATE livres SET  img_livre = :img, titre_livre = :livre, nbrPage_livre = :nbrPage WHERE id_user = :id";
      $req = $db->prepare($sql);
      $result = $req->execute([
          ":img" => $img,
          ":titre" => $titre,
          ":nbrPage" => $nbrPage
      ]);
      return $result;
  }


}
