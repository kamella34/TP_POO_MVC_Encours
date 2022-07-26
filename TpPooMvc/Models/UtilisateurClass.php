<?php

class Utilisateur
{
    private $id;
    private $pseudo;
    private $mail;
    private $mdp;

    public function __construct($id, $pseudo, $mail, $mdp){
        $this->id = $id;
        $this->pseudo = $pseudo;
        $this->mail = $mail;
        $this->mdp = $mdp;
    }

    public function getId()
    {
        return  $this->id;
    }
    public function getPseudo()
    {
        return  $this->pseudo;
    }
    public function getMail()
    {
        return  $this->mail;
    }
    public function getMdp()
    {
        return  $this->mdp;
    }

}