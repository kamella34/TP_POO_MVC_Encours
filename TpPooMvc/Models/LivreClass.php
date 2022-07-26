

<?php

class Livre
{
    
    private $image;
    private $titre;
    private $nbrPage;
    // public static $tab = [];
// le parametre static permet de ne pas mettre les intentiations dans un tableau, ici on creer le tableau avec tab
    public function __construct($id, $image, $titre, $nbrPage)
    
    {
        $this->id = $id;
        $this->image = $image;
        $this->titre = $titre;
        $this->nbrPage = $nbrPage;
        // self:: $tab [] = $this;
        // ci dessus on traite une varible static avec ::
    }

    public function getId()
    {
        return  $this->id;
    }
    public function getImage()
    {
        return  $this->image;
    }
    public function getTitre()
    {
        return  $this->titre;
    }
    public function getNbrPage()
    {
        return  $this->nbrPage;
    }

}






   


