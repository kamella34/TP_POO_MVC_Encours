<?php

abstract class GlobalController
{
    public static function ajoutImage($titre, $files, $repertoire)
    {
        if ($files['size'] > 0) {

            $titre = strtolower($titre);

            $extensionImg = strtolower(pathinfo($files['name'], PATHINFO_EXTENSION));/*recuperer l'extention de l'image*/
            $random = rand(0, 99999);/*creer un nombre aléatoire*/
            $files['name'] = str_replace(" ", "_", $files['name']);/*remplace les espaces du nom du fichier par "_"*/
            $NewCheminfile = $repertoire . $random . "_" . $titre . "." . $extensionImg;
            $Oldcheminfile = $files["tmp_name"];
            $newName = $random . "_" . $titre . "." . $extensionImg;


         

                if ($_FILES['img']['size'] > 1000000) {
                    throw new Exception("trop grand");
                }

                if ($extensionImg !== "jpg" &&  $extensionImg !== "png") {
                    throw new Exception("l'extention n'est pas valide");
                }
                move_uploaded_file($Oldcheminfile, $NewCheminfile);
                return $newName ;
            } 
        }
    }

